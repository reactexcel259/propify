<?php

namespace App\Repositories;

use App\Jobs\Notify\NotifyAdminNewResidentPinboard;
use App\Jobs\Notify\NotifyNewPinboard;
use App\Models\AuditableModel;
use App\Models\Building;
use App\Models\Model;
use App\Models\Quarter;
use App\Models\Pinboard;
use App\Models\Contract;
use App\Models\Settings;
use App\Models\User;
use App\Notifications\NewResidentPinboard;
use App\Notifications\AnnouncementPinboardPublished;
use App\Traits\SaveMediaUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

/**
 * Class PinboardRepository
 * @package App\Repositories
 * @version February 11, 2019, 6:22 pm UTC
 *
 * @method Pinboard findWithoutFail($id, $columns = ['*'])
 * @method Pinboard find($id, $columns = ['*'])
 * @method Pinboard first($columns = ['*'])
*/
class PinboardRepository extends BaseRepository
{
    use  SaveMediaUploads;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content' => 'like',
    ];


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pinboard::class;
    }

    /**
     * @param array $attributes
     * @return Model|Pinboard|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(array $attributes)
    {
        $attributes['building_ids'] = $attributes['building_ids'] ?? [];
        $attributes['quarter_ids'] = $attributes['quarter_ids'] ?? [];
        $u = \Auth::user();

        if ($u->resident()->exists()) {
            $contracts = $u->resident->active_contracts()->get(['building_id']);
            if ($contracts->isEmpty()) {
                throw new \Exception("Your resident account does not have any active contract");
            }

            $contracts->load('building:id,quarter_id');
            $attributes['building_ids'] = $contracts->pluck('building_id')->unique()->toArray();
            if (!empty($attributes['visibility']) && Pinboard::VisibilityQuarter == $attributes['visibility']) {
                $quarterIds = $contracts->where('building.quarter_id', '!=', null)->pluck('building.quarter_id');
                $attributes['quarter_ids'] = $quarterIds->unique()->toArray();
            } else {
                $attributes['quarter_ids'] = [];
            }
        }

        // this mean if resident make pinboard then must be publish
        $attributes['status'] = $attributes['status'] ?? Pinboard::StatusPublished;
        if (Pinboard::StatusPublished == $attributes['status']) {
            $attributes['published_at'] = now();
        }

        /**
         * @var $model Pinboard
         */
        $model = parent::create($attributes);
        if (empty($model))  {
            return $model;
        }

        $model = $this->saveMediaUploads($model, $attributes);

        if (!empty($attributes['quarter_ids'])) {
            $this->assignWithMergeAudit($model, 'quarters', $attributes, 'quarter_ids');
        }

        if (!empty($attributes['building_ids'])) {
            $this->assignWithMergeAudit($model, 'buildings', $attributes, 'building_ids');
        }

        if (!empty($attributes['provider_ids'])) {
            $this->assignWithMergeAudit($model, 'providers', $attributes, 'provider_ids');
        }

        $notificationsData = collect();

        if (Pinboard::StatusPublished == $attributes['status']) {
            $notificationsData = dispatch_now(new NotifyNewPinboard($model, false));
        }

        $adminNotificationsData = dispatch_now(new NotifyAdminNewResidentPinboard($model, false));
        $notificationsData = $notificationsData->merge($adminNotificationsData);
        $model->newSystemNotificationAudit($notificationsData);

//        $this->notifyAdminActions($model);
        return $model;
    }

    /**
     * @param AuditableModel $model
     * @param $method
     * @param $data
     * @param $key
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     */
    public function assignWithMergeAudit($model, $method, $data, $key)
    {
        $model->disableAuditing();
        $model->{$method}()->sync($data[$key]);
        $model->enableAuditing();
        //$model->addAssigneesDataInAudit($key, $data[$key]);
    }



    /**
     * @param int $id
     * @param $status
     * @param $publishedAt
     * @return Model|Pinboard|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function setStatus(int $id, $status, $publishedAt)
    {
        $pinboard = $this->find($id);
        return $this->setStatusExisting($pinboard, $status, $publishedAt);
    }

    /**
     * @param Pinboard $pinboard
     * @param $status
     * @param $publishedAt
     * @return Model|Pinboard|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function setStatusExisting(Pinboard $pinboard, $status, $publishedAt)
    {
        if ($pinboard->status == $status) {
            return $pinboard;
        }

        return $this->updateExisting($pinboard, ['status' => $status]);
    }

    /**
     * @param array $attributes
     * @param $id
     * @return Model|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function update(array $attributes, $id)
    {
        $model = $this->model->findOrFail($id);
        return $this->updateExisting($model, $attributes);
    }

    /**
     * @param Model $model
     * @param $attributes
     * @return Model|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function updateExisting(Model $model, $attributes)
    {
        $status= $attributes['status'] ?? null;
        if (Pinboard::StatusPublished == $status) {
            $attributes['published_at'] = now();
        }
        $model = parent::updateExisting($model, $attributes);

        if (Pinboard::StatusPublished == $status) {
            // @TODO correct when need send
            dispatch_now(new NotifyNewPinboard($model));;
        }

        return $model;
    }

    /**
     * @param Pinboard $pinboard
     * @return \Illuminate\Support\Collection
     */
    public function notify(Pinboard $pinboard)
    {
        return dispatch_now(new NotifyNewPinboard($pinboard));
    }

    /**
     * @param Pinboard $pinboard
     */
    public function notifyAdminActions(Pinboard $pinboard)
    {
        if (! Auth::user()->hasRole('administrator')) {
            return;
        }
        // @TODO
    }

    /**
     * @param Contract $contract
     * @return Model|Pinboard|bool|mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function newResidentContractPinboard(Contract $contract)
    {
        if (empty($contract->building_id)) {
            return false;
        }

        $pinboard = $this->create([
            'visibility' => Pinboard::VisibilityAddress,
            'status' => Pinboard::StatusPublished,
            'type' => Pinboard::TypeNewNeighbour,
            'content' => "New neighbour",
            'user_id' => $contract->resident->user->id,
            'building_ids' => [$contract->building_id],
            'notify_email' => true,
        ]);

        $publishStart = $contract->start_date ?? Carbon::now();
        if ($publishStart->isBefore(Carbon::now())) {
            $publishStart = Carbon::now();
        }

        $this->setStatusExisting($pinboard, Pinboard::StatusPublished, $publishStart);
        return $pinboard;
    }

    /**
     * @param Pinboard $p
     * @return mixed
     */
    public function locations(Pinboard $p)
    {
        // Cannot use $p->buildings() and $p->quarters() because of a bug
        // related to different number of columns in union
        $pbs = Building::select(\DB::raw('id, name, "building" as type'))
            ->join('building_pinboard', 'building_pinboard.building_id', '=', 'id')
            ->where('building_pinboard.pinboard_id', $p->id);
        $pds = Quarter::select(\DB::raw('id, name, "quarter" as type'))
            ->join('pinboard_quarter', 'pinboard_quarter.quarter_id', '=', 'id')
            ->where('pinboard_quarter.pinboard_id', $p->id);

        return $pbs->union($pds);
    }
}
