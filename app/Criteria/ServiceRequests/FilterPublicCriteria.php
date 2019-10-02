<?php

namespace App\Criteria\ServiceRequests;

use App\Models\ServiceRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterPublicCriteria
 * @package Prettus\Repository\Criteria
 */
class FilterPublicCriteria implements CriteriaInterface
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * FilterPublicCriteria constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Apply criteria in query repository
     *
     * @param Builder|Model $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     * @throws \Exception
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if (!$this->request->get('is_public', null)) {
            return $model;
        }

        $vs = [
            ServiceRequest::VisibilityBuilding,
            ServiceRequest::VisibilityQuarter,
        ];
        return $model->whereIn('requests.visibility', $vs);
    }
}
