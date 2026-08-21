<?php

namespace App\Services\Jurusan;

use App\Models\Jurusan;
use App\Repositories\Interfaces\JurusanRepositoryInterface;

class JurusanService
{
    public function __construct(
        protected JurusanRepositoryInterface $repository
    ){}

    public function getAll()
    {
        return $this->repository->getAll();
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update(Jurusan $jurusan,array $data)
    {
        return $this->repository->update($jurusan,$data);
    }
    public function delete(Jurusan $jurusan): bool
    {
        return $this->repository->delete($jurusan);
    }
}

