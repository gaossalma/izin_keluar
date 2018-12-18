<?php

namespace App\Repositories;

use App\Models\IzinPulang;
use InfyOm\Generator\Common\BaseRepository;

class IzinPulangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_santri',
        'tgl_pulang',
        'tgl_kembali',
        'keperluan',
        'jam_kedatangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return IzinPulang::class;
    }
}
