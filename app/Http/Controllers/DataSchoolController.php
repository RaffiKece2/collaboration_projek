<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataSchoolRequest;
use App\Models\DataSchool;
use Illuminate\Support\Facades\Storage;

class DataSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataSchoolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $dataSchool = DataSchool::first();
        return response()->json($dataSchool);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSchool $dataSchool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDataSchoolRequest $request, DataSchool $dataSchool)
    {
        $validated = $request->validated();  // udah otomatis tervalidasi
        $dataSchool = DataSchool::firstOrNew(); // kalau kosong, bikin instance baru (belum tersimpan)

       if ($request->hasFile('Logo')) {
        if ($dataSchool->Logo) {
            Storage::disk('public')->delete($dataSchool->Logo);
        }
        $path = $request->file('Logo')->store('Logo', 'public');
        $validated['Logo'] = $path;
    }

    $dataSchool->fill($validated);
    $dataSchool->save(); // save() bisa dipakai buat insert ATAU update

    return response()->json([
        'message' => 'Data berhasil disimpan',
        'data' => $dataSchool,
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataSchool $dataSchool)
    {
        //
    }
}
