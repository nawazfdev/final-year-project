<?php

namespace App\Repositories;

use App\Models\semester;
use App\Repositories\BaseRepository;

/**
 * Class semesterRepository
 * @package App\Repositories
 * @version February 9, 2023, 9:57 am UTC
*/

class semesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Semester_Name',
        'Semester_Code',
        'Semester_Duration',
        'Semester_Description'
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
        return semester::class;
    }
}
