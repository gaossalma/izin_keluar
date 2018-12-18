<?php

namespace App\Repositories;

use App\Models\Pembimbing;
use InfyOm\Generator\Common\BaseRepository;

class PembimbingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'jabatan',
        'tgl_lahir',
        'no_hp',
        'alamat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pembimbing::class;
    }
}
