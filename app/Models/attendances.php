<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class attendances
 * @package App\Models
 * @version January 23, 2023, 6:37 am UTC
 *
 * @property integer $student_id
 * @property integer $class_id
 * @property integer $subject_id
 * @property integer $teacher_id
 * @property integer $attendance_status
 */
class attendances extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'attendances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'class_id' => 'integer',
        'subject_id' => 'integer',
        'teacher_id' => 'integer',
        'attendance_status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student_id' => 'required|integer',
        'class_id' => 'required|integer',
        'subject_id' => 'required|integer',
        'teacher_id' => 'required|integer',
        'attendance_status' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
