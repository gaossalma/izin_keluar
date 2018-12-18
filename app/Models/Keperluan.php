<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Keperluan
 * @package App\Models
 * @version September 19, 2018, 4:15 pm UTC
 */
class Keperluan extends Model
{
    use SoftDeletes;

    public $table = 'keperluans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'keperluan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'keperluan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'keperluan' => 'required'
    ];

    
}
