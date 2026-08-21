<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJurusanRequest;
use App\Http\Requests\UpdateJurusanRequest;
use App\Models\Jurusan;
use App\Services\Jurusan\JurusanService;

class JurusanController extends Controller
{
    public function __construct(
        protected JurusanService $jurusanService
    ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = $this->jurusanService->getAll();
        {
            return view('admin.jurusan.index', compact('jurusans'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJurusanRequest $request)
    {
        $this->jurusanService->create($request->validated());

        return redirect()
        ->route('jurusan.index')
        ->with('success', 'jurusan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $this->jurusanService->update($jurusan,$request->validated());

        return redirect()
        ->route('jurusan.index')
        ->with('success', 'jurusan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $this->jurusanService->delete($jurusan);

        return redirect()
        ->route('jurusan.index')
        ->with('success', 'nama jurusan berhasil di delete.');
    }
}
