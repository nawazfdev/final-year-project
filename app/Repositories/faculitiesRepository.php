<?php

namespace App\Repositories;

use App\Models\faculities;
use App\Repositories\BaseRepository;

/**
 * Class faculitiesRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:31 am UTC
*/

class faculitiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
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
        return faculities::class;
    }
}
