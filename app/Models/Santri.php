<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Santri
 * @package App\Models
 * @version September 19, 2018, 3:29 pm UTC
 */
class Santri extends Model
{
    use SoftDeletes;

    public $table = 'santris';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nis',
        'kelas_id',
        'tgl_lahir',
        'asrama',
        'orang_tua',
        'no_hp',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nis' => 'integer',
        'kelas_id' => 'integer',
        'tgl_lahir' => 'string',
        'asrama' => 'integer',
        'orang_tua' => 'string',
        'no_hp' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nis' => 'required',
        'kelas_id' => 'required',
        'tgl_lahir' => 'required',
        'asrama' => 'required',
        'orang_tua' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required'
    ];

    
}
