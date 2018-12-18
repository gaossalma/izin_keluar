<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class IzinPulang
 * @package App\Models
 * @version September 19, 2018, 4:31 pm UTC
 */
class IzinPulang extends Model
{
    use SoftDeletes;

    public $table = 'izin_pulangs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama_santri',
        'tgl_pulang',
        'tgl_kembali',
        'keperluan',
        'jam_kedatangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_santri' => 'integer',
        'tgl_pulang' => 'string',
        'tgl_kembali' => 'string',
        'keperluan' => 'integer',
        'jam_kedatangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_santri' => 'required',
        'tgl_pulang' => 'required',
        'tgl_kembali' => 'required',
        'keperluan' => 'required',
        'jam_kedatangan' => 'required'
    ];

    public function santri_nama()
    {
        return $this->belongsTo('App\Models\DataSantri','nama_santri');
    }

    public function asrama()
    {
        return $this->belongsTo('App\Models\Asrama','asrama');
    }

    public function alasan()
    {
        return $this->belongsTo('App\Models\Keperluan','keperluan');
    }
}
