<?php

namespace App\Repositories;

use App\Models\classrooms;
use App\Repositories\BaseRepository;

/**
 * Class classroomsRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:33 am UTC
*/

class classroomsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
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
        return classrooms::class;
    }
}
