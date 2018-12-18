<?php

namespace App\Repositories;

use App\Models\Keperluan;
use InfyOm\Generator\Common\BaseRepository;

class KeperluanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'keperluan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Keperluan::class;
    }
}
