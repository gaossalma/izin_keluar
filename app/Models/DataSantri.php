<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DataSantri
 * @package App\Models
 * @version September 19, 2018, 3:47 pm UTC
 */
class DataSantri extends Model
{
    use SoftDeletes;

    public $table = 'data_santris';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nis',
        'nama',
        'kelas',
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
        'nis' => 'string',
        'nama' => 'string',
        'kelas' => 'integer',
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
        'nama' => 'required',
        'kelas' => 'required',
        'tgl_lahir' => 'required',
        'asrama' => 'required',
        'orang_tua' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required'
    ];

     public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas','kelas');
    }

     public function asrama()
    {
        return $this->belongsTo('App\Models\Asrama','asrama');
    }

    

    
}
