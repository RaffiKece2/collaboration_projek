<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataSchoolRequest;
use App\Http\Requests\UpdateDataSchoolRequest;
use App\Models\DataSchool;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DataSchoolController extends Controller
{
    /**
     * Menampilkan halaman identitas sekolah.
     * firstOrCreate([]) memastikan selalu ada 1 baris data,
     * jadi view gak akan pernah nemu $dataSchool null.
     */
    public function index(): View
    {
        $dataSchool = DataSchool::firstOrCreate([]);

        return view('setelan.HalamanSekolah', compact('dataSchool'));
    }

    /**
     * Update data identitas sekolah.
     * Selalu nimpa baris yang sama, TIDAK PERNAH nambah row baru.
     */

        public function update(StoreDataSchoolRequest $request): RedirectResponse
{
    $dataSchool = DataSchool::firstOrCreate([]);

    $data = $request->safe()->except('Logo');

    if ($request->hasFile('Logo')) {
        if ($dataSchool->Logo && Storage::disk('public')->exists($dataSchool->Logo)) {
            Storage::disk('public')->delete($dataSchool->Logo);
        }

        $data['Logo'] = $request->file('Logo')->store('sekolah', 'public');
    }

    $dataSchool->update($data);

    return redirect()
        ->route('identitas.index')
        ->with('success', 'Data sekolah berhasil diperbarui.');
}
}
