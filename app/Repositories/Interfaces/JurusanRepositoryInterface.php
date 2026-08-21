<?php

namespace App\Repositories\Interfaces;

use App\Models\Jurusan;

interface JurusanRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function update(Jurusan $jurusan,array $data);
    public function delete(Jurusan $jurusan): bool;
}
