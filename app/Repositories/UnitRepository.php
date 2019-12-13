<?php

namespace App\Repositories;

use App\Models\Unit;

/**
 * Class UnitRepository
 * @package App\Repositories
 * @version January 28, 2019, 8:32 am UTC
 *
 * @method Unit findWithoutFail($id, $columns = ['*'])
 * @method Unit find($id, $columns = ['*'])
 * @method Unit first($columns = ['*'])
*/
class UnitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like',
        'description' => 'like',
        'floor' => 'like',
        'unit_format' => 'like',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Unit::class;
    }

    /**
     * @param int $building_id
     * @return mixed
     */
    public function getTotalUnitsFromBuilding(int $building_id)
    {
        return $this->model->where('building_id', $building_id)->count();
    }

    /**
     * @param array $attributes
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(array $attributes)
    {
        if (! empty($attributes['building_id'])) {
            unset($attributes['quarter_id']);
        }
        return parent::create($attributes);
    }

    /**
     * @param array $attrs
     * @param $id
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(array $attrs, $id)
    {
        if (! empty($attributes['building_id'])) {
            unset($attributes['quarter_id']);
        }
        unset($attrs['building']);
        return parent::update($attrs, $id);
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function getUnitsIdwithBuildingIds($ids) {
        return $this->model->whereIn('building_id', $ids)->get('id');
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function deleteUnitWithBuilding($ids) {
        return $this->model->whereIn('building_id', $ids)->delete();
    }
}
