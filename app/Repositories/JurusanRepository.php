<?php

namespace App\Repositories;

use App\Models\Jurusan;
use App\Repositories\Interfaces\JurusanRepositoryInterface;
class JurusanRepository implements JurusanRepositoryInterface
{
    public function getAll()
    {
        return Jurusan::all();
    }
    public function create(array $data)
    {
        return Jurusan::create($data);
    }
    public function update(Jurusan $jurusan,array $data)
    {
        $jurusan->update($data);
        return $jurusan;
    }
    public function delete(Jurusan $jurusan): bool
    {
        return $jurusan->delete();
    }
}
