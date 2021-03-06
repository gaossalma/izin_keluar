<?php

namespace App\Repositories;

use App\Models\Kelas;
use InfyOm\Generator\Common\BaseRepository;

class KelasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kelas'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kelas::class;
    }
}
