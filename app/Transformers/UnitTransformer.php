<?php

namespace App\Transformers;

use App\Models\Unit;

/**
 * Class UnitTransformer.
 *
 * @package namespace App\Transformers;
 */
class UnitTransformer extends BaseTransformer
{
    protected $defaultIncludes = [
        'address'
    ];

    /**
     * Transform the Unit entity.
     *
     * @param Unit $model
     *
     * @param Unit $model
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function transform(Unit $model)
    {
        $response = [
            'id' => $model->id,
            'unit_format' => $model->unit_format,
            'type' => $model->type,
            'name' => $model->name,
            'description' => $model->description,
            'building_id' => $model->building_id,
            'floor' => $model->floor,
            'monthly_rent_net' => $model->monthly_rent_net,
            'monthly_rent_gross' => $model->monthly_rent_gross,
            'monthly_maintenance' => $model->monthly_maintenance,
            'room_no' => $model->room_no,
            'basement' => $model->basement,
            'attic' => $model->attic,
            'sq_meter' => $model->sq_meter,
            'residents' => [],
            'media' => [],
        ];

        $withCount = $model->getStatusRelationCounts();
        $response = array_merge($response, $withCount);


        $attributes = $model->attributesToArray();
        if (key_exists('total_contracts_count', $attributes)) {
            $response['total_contracts_count'] = $attributes['total_contracts_count'];
        }

        if (key_exists('active_contracts_count', $attributes)) {
            $response['active_contracts_count'] = $attributes['active_contracts_count'];
            if (key_exists('total_contracts_count', $attributes)) {
                $response['inactive_contracts_count'] = $attributes['total_contracts_count'] - $attributes['active_contracts_count'];
            }
        }

        if ($model->relationExists('building')) {
            $response['building'] = (new BuildingSimpleTransformer)->transform($model->building);
        }

        if ($model->relationExists('media')) {
            $response['media'] = (new MediaTransformer())->transformCollection($model->media);
        }

        if ($model->relationExists('address')) {
            $response['address'] = (new AddressTransformer)->transform($model->address);
        }

        if ($model->relationExists('contracts')) {
            $response['contracts'] = (new ContractTransformer())->transformCollection($model->contracts);

            $residents = [];
            foreach ($response['contracts'] as $contractData) {
                if (!empty($contractData['resident'])) {
                    $residents[] = $contractData['resident'];
                }
            }


            // @TODO delete
            if ($residents) {
                $response['residents'] = $residents;
            }
        }

        return $response;
    }

    /**
     * Transform Request to Address entity.
     *
     * @param array $input
     *
     * @return array
     */
    public function transformRequest(array $input)
    {
        if (isset($input['address'])) {
            unset($input['address']);
        }

        return $input;
    }

    /**
     * Include Address
     *
     * @return \League\Fractal\Resource\Item
     */
    public function includeAddress(Building $building)
    {
        $address = $building->address;

        return $this->item($address, new AddressTransformer);
    }
}
