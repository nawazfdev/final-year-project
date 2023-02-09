<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class semester
 * @package App\Models
 * @version February 9, 2023, 9:57 am UTC
 *
 * @property string $Semester_Name
 * @property integer $Semester_Code
 * @property string $Semester_Duration
 * @property string $Semester_Description
 */
class semester extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'semester';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Semester_Name',
        'Semester_Code',
        'Semester_Duration',
        'Semester_Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Semester_Name' => 'string',
        'Semester_Code' => 'integer',
        'Semester_Duration' => 'string',
        'Semester_Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Semester_Name' => 'required|string|max:255',
        'Semester_Code' => 'required|integer',
        'Semester_Duration' => 'required|string|max:255',
        'Semester_Description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
