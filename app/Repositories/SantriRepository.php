<?php

namespace App\Repositories;

use App\Models\Santri;
use InfyOm\Generator\Common\BaseRepository;

class SantriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nis',
        'kelas_id',
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
        return Santri::class;
    }
}
