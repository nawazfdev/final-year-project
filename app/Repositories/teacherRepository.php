<?php

namespace App\Repositories;

use App\Models\teacher;
use App\Repositories\BaseRepository;

/**
 * Class teacherRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:31 am UTC
*/

class teacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'passport',
        'status',
        'date_registered',
        'user_id',
        'image'
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
        return teacher::class;
    }
}
