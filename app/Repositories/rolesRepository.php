<?php

namespace App\Repositories;

use App\Models\roles;
use App\Repositories\BaseRepository;

/**
 * Class rolesRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:35 am UTC
*/

class rolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return roles::class;
    }
}
