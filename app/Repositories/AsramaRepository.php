<?php

namespace App\Repositories;

use App\Models\Asrama;
use InfyOm\Generator\Common\BaseRepository;

class AsramaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'kapasitas',
        'pembimbing_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asrama::class;
    }
}
