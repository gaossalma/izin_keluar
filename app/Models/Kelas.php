<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kelas
 * @package App\Models
 * @version September 19, 2018, 3:20 pm UTC
 */
class Kelas extends Model
{
    use SoftDeletes;

    public $table = 'kelas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'kelas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kelas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kelas' => 'required'
    ];

    
}
