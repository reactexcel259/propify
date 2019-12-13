<?php

namespace App\Repositories;

use App\Models\Building;
use App\Models\Model;
use App\Models\Quarter;
use App\Models\PropertyManager;
use Illuminate\Support\Arr;

/**
 * Class PropertyManagerRepository
 * @package App\Repositories
 * @version March 8, 2019, 9:38 pm UTC
 */
class PropertyManagerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description' => 'like',
        'first_name' => 'like',
        'last_name' => 'like',
        'property_manager_format' => 'like',
        'user.email' => 'like',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PropertyManager::class;
    }

    public function create(array $attributes)
    {
        $model = parent::create($attributes);

        if (isset($attributes['buildings'])) {
            $model->buildings()->sync($attributes['buildings']);
        }

        return $model;
    }

    /**
     * @param array $attributes
     * @param $id
     * @return Model|mixed
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
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function updateExisting(Model $model, $attributes)
    {
        unset($attributes['quarters']);
        $model = parent::updateExisting($model, $attributes);

        if (isset($attributes['buildings'])) {
            $model->buildings()->sync($attributes['buildings']);
        }

        return $model;
    }

    public function delete($id)
    {
        $this->applyScope();
        $model = $this->find($id);
        $model->buildings()->detach();
        $deleted = $model->delete();

        return $deleted;
    }

    public function assignmentsWithIds(array $userIds)
    {
        return Quarter::select(\DB::raw('quarters.id, quarters.name, "quarter" as type'))
            ->join('quarter_assignees', 'quarter_id', '=', 'quarters.id')
            ->whereIn('quarter_assignees.user_id', $userIds)->union(
                Building::select(\DB::raw('buildings.id, buildings.building_format as name, "building" as type'))
                    ->join('building_assignees', 'building_id', '=', 'buildings.id')
                    ->whereIn('building_assignees.user_id', $userIds)
            );
    }
}
