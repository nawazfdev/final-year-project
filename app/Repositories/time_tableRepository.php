<?php

namespace App\Repositories;

use App\Models\time_table;
use App\Repositories\BaseRepository;

/**
 * Class time_tableRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:36 am UTC
*/

class time_tableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
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
        return time_table::class;
    }
}
