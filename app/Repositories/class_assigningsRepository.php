<?php

namespace App\Repositories;

use App\Models\class_assignings;
use App\Repositories\BaseRepository;

/**
 * Class class_assigningsRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:33 am UTC
*/

class class_assigningsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
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
        return class_assignings::class;
    }
}
