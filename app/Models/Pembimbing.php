<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pembimbing
 * @package App\Models
 * @version September 19, 2018, 10:48 am UTC
 */
class Pembimbing extends Model
{
    use SoftDeletes;

    public $table = 'pembimbings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'jabatan',
        'tgl_lahir',
        'no_hp',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'jabatan' => 'string',
        'tgl_lahir' => 'string',
        'no_hp' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'jabatan' => 'required',
        'tgl_lahir' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required'
    ];

    
}
