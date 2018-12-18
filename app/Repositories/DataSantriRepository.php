<?php

namespace App\Repositories;

use App\Models\DataSantri;
use InfyOm\Generator\Common\BaseRepository;

class DataSantriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return DataSantri::class;
    }
}
