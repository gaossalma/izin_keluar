<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Asrama
 * @package App\Models
 * @version September 19, 2018, 11:22 am UTC
 */
class Asrama extends Model
{
    use SoftDeletes;

    public $table = 'asramas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'kapasitas',
        'pembimbing_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'kapasitas' => 'integer',
        'pembimbing_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'kapasitas' => 'required',
        'pembimbing_id' => 'required'
    ];

    public function pembimbing()
    {
        return $this->belongsTo('App\Models\Pembimbing','pembimbing_id');
    }

    
}
