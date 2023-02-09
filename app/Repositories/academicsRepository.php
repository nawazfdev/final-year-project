<?php

namespace App\Repositories;

use App\Models\academics;
use App\Repositories\BaseRepository;

/**
 * Class academicsRepository
 * @package App\Repositories
 * @version January 23, 2023, 6:32 am UTC
*/

class academicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
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
        return academics::class;
    }
}
