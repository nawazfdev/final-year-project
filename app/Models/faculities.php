<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class faculities
 * @package App\Models
 * @version January 23, 2023, 6:31 am UTC
 *
 * @property string $faculty_name
 * @property string $faculty_code
 * @property string $faculty_description
 * @property string $faculty_status
 */
class faculities extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'faculities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'faculty_name' => 'string',
        'faculty_code' => 'string',
        'faculty_description' => 'string',
        'faculty_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'faculty_name' => 'required|string|max:255',
        'faculty_code' => 'required|string|max:255',
        'faculty_description' => 'required|string',
        'faculty_status' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
