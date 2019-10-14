<?php

namespace App\Models;

use Chelout\RelationshipEvents\Concerns\HasBelongsToManyEvents;
use Chelout\RelationshipEvents\Concerns\HasMorphedByManyEvents;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Models\Audit;

class AuditableModel extends Model implements Auditable
{
    use \App\Traits\Auditable,
        HasBelongsToManyEvents,
        HasMorphedByManyEvents;

    const EventCreated = 'created';
    const EventUpdated = 'updated';
    const EventDeleted = 'deleted';
    const EventUserAssigned = 'user_assigned';
    const EventUserUnassigned = 'user_unassigned';
    const EventQuarterAssigned = 'quarter_assigned';
    const EventQuarterUnassigned = 'quarter_unassigned';
    const EventBuildingAssigned = 'building_assigned';
    const EventBuildingUnassigned = 'building_unassigned';
    const EventManagerAssigned = 'manager_assigned';
    const EventManagerUnassigned = 'manager_unassigned';
    const EventProviderAssigned = 'provider_assigned';
    const EventProviderUnassigned = 'provider_unassigned';
    const EventProviderNotified = 'provider_notified';
    const EventMediaUploaded = 'media_uploaded';
    const EventMediaDeleted = 'media_deleted';

    const SyncAuditConfig = [
        'attach' => [
            'providers' =>  AuditableModel::EventProviderAssigned,
            'managers' =>  AuditableModel::EventManagerAssigned,
            'propertyManagers' =>  AuditableModel::EventManagerAssigned,
            'users' =>  AuditableModel::EventUserAssigned,
            'buildings' => AuditableModel::EventBuildingAssigned,
            'quarters' => AuditableModel::EventQuarterAssigned,
        ],
        'detach' => [
            'providers' =>  AuditableModel::EventProviderUnassigned,
            'managers' =>  AuditableModel::EventManagerUnassigned,
            'propertyManagers' =>  AuditableModel::EventManagerUnassigned,
            'users' =>  AuditableModel::EventUserAssigned,
            'buildings' => AuditableModel::EventBuildingUnassigned,
            'quarters' => AuditableModel::EventQuarterUnassigned,
        ],
    ];

    protected $syncAuditable = [
        'managers' => ['first_name', 'last_name'],
        'propertyManagers' => ['first_name', 'last_name'],
        'providers' => ['name'],
        'users' => ['name'],
        'buildings' => ['name'],
        'quarters' => ['name'],
    ];


    const Events = [
        self::EventCreated,
        self::EventUpdated,
        self::EventDeleted,
        self::EventProviderAssigned,
        self::EventProviderUnassigned,
        self::EventProviderNotified,
        self::EventUserAssigned,
        self::EventUserUnassigned,
        self::EventManagerAssigned,
        self::EventManagerUnassigned,
        self::EventMediaUploaded,
        self::EventMediaDeleted,
    ];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::belongsToManyDetached(function ( $relation, $parent, $ids, $attributes) {
            $auditType = self::SyncAuditConfig['detach'][$relation] ?? '';
            if ( ! empty($auditType)) {
                self::auditManyRelations($relation, $parent, $ids, $auditType);
            }
        });

        static::belongsToManyAttached(function ( $relation, $parent, $ids, $attributes) {
            $auditType = self::SyncAuditConfig['attach'][$relation] ?? '';
            if ( ! empty($auditType)) {
                self::auditManyRelations($relation, $parent, $ids, $auditType);
            }
        });

        static::morphedByManyDetached(function ( $relation, $parent, $ids, $attributes) {
            $auditType = self::SyncAuditConfig['detach'][$relation] ?? '';
            if ( ! empty($auditType)) {
                self::auditManyRelations($relation, $parent, $ids, $auditType);
            }
        });

        static::morphedByManyAttached(function ($relation, $parent, $ids, $attributes) {
            $auditType = self::SyncAuditConfig['attach'][$relation] ?? '';
            if ( ! empty($auditType)) {
                self::auditManyRelations($relation, $parent, $ids, $auditType);
            }
        });
    }

    /**
     * @param $key
     * @param $value
     * @param null $audit
     * @param bool $isSingle
     */
    public function addDataInAudit($key, $value, $audit = null, $isSingle = true)
    {
        if (is_null($audit)) {
            $audit = $this->audit;
        }
        if (empty($audit)) {
            return;
        }

        if ('media' == $key) {
            $value = $this->getMediaAudit($value);
        }

        if (self::EventCreated == $audit->event) {
            $audit->new_values = $this->fixAddedData($audit->new_values, $key, $value, $isSingle);
            $audit->save();
        } elseif (self::EventUpdated == $audit->event) {
            $audit->new_values = $this->fixAddedData($audit->new_values, $key, $value, $isSingle);
            $audit->save();
        } else {
            // @TODO
        }
    }

    /**
     * @param $savedValues
     * @param $key
     * @param $newValue
     * @param $isSingle
     * @return mixed
     */
    protected function fixAddedData($savedValues, $key, $newValue, $isSingle)
    {
        if ($isSingle) {
            $savedValues[$key] = $newValue;
        } else  {
            $savedValues[$key][] = $newValue;
        }

        return $savedValues;
    }

    /**
     * @param $media
     * @return mixed
     */
    protected function getMediaAudit($media)
    {
        $data = $media->only('name', 'file_name', 'disk', 'collection_name', 'mime_type', 'size', 'order_column');
        $data['media_id'] = $media->id;
        $data['media_url'] = $media->getFullUrl();
        return $data;
    }

    /**
     * @param $relationData
     * @return array|mixed
     */
    public function getModelRelationAuditData($relationData)
    {
        if (is_a($relationData, Collection::class)) {
            return $this->getManyRelationAuditData($relationData);
        } elseif(is_a($relationData, Model::class)) {
            return $this->getSingleRelationAuditData($relationData);
        }
        return [];//'@TODO'
    }

    /**
     * @param $relationData
     * @return array
     */
    protected function getManyRelationAuditData($relationData)
    {
        $auditData = [];
        foreach ($relationData as $relation) {
            $auditData[] = $this->getSingleRelationAuditData($relation);
        }
        return $auditData;
    }

    /**
     * @param $relation
     * @return mixed
     */
    protected function getSingleRelationAuditData($relation)
    {
        if (is_a($relation, Media::class)) {
            return $this->getMediaAudit($relation);
        }

        $auditData = $relation->getAttributes();
        unset($auditData['created_at']);
        unset($auditData['updated_at']);
        foreach ($relation->getExistingRelations() as $_relation) {
            $auditData[$_relation] = $this->getModelRelationAuditData($relation->{$_relation});
        }
        return $auditData;
    }
}
