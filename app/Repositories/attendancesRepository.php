<?php

namespace App\Repositories;

use App\Models\attendances;
use App\Repositories\BaseRepository;

/**
 * Class attendancesRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:37 am UTC
*/

class attendancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
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
        return attendances::class;
    }
}
