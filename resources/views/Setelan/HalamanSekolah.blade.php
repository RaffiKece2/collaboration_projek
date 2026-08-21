<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-8">

    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow">
        <h1 class="text-xl font-semibold mb-4">Identitas Sekolah</h1>

        @if (session('success'))
            <div class="mb-4 p-3 rounded bg-green-100 text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('identitas.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium mb-1">Nama Sekolah</label>
                <input type="text" name="Nama_sekolah" value="{{ old('Nama_sekolah', $dataSchool->Nama_sekolah) }}"
                       class="w-full border rounded px-3 py-2 @error('Nama_sekolah') border-red-500 @enderror">
                @error('Nama_sekolah') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Kepala Sekolah</label>
                <input type="text" name="Kepala_sekolah" value="{{ old('Kepala_sekolah', $dataSchool->Kepala_sekolah) }}"
                       class="w-full border rounded px-3 py-2 @error('Kepala_sekolah') border-red-500 @enderror">
                @error('Kepala_sekolah') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Alamat</label>
                <textarea name="Alamat" rows="3"
                          class="w-full border rounded px-3 py-2 @error('Alamat') border-red-500 @enderror">{{ old('Alamat', $dataSchool->Alamat) }}</textarea>
                @error('Alamat') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Status Sekolah</label>
                <select name="Status_sekolah" class="w-full border rounded px-3 py-2 @error('Status_sekolah') border-red-500 @enderror">
                    <option value="">-- Pilih Status --</option>
                    <option value="Negeri" {{ old('Status_sekolah', $dataSchool->Status_sekolah) == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                    <option value="Swasta" {{ old('Status_sekolah', $dataSchool->Status_sekolah) == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                </select>
                @error('Status_sekolah') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Jenjang Pendidikan</label>
                <input type="text" name="Jenjang_pendidikan" value="{{ old('Jenjang_pendidikan', $dataSchool->Jenjang_pendidikan) }}"
                       class="w-full border rounded px-3 py-2 @error('Jenjang_pendidikan') border-red-500 @enderror">
                @error('Jenjang_pendidikan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Akreditasi</label>
                <input type="text" name="Akreditasi" value="{{ old('Akreditasi', $dataSchool->Akreditasi) }}"
                       class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">No. Telepon</label>
                <input type="text" name="Telp" value="{{ old('Telp', $dataSchool->Telp) }}"
                       class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="Email" value="{{ old('Email', $dataSchool->Email) }}"
                       class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">NPSN</label>
                <input type="text" name="NPSN" value="{{ old('NPSN', $dataSchool->NPSN) }}"
                       class="w-full border rounded px-3 py-2 @error('NPSN') border-red-500 @enderror">
                @error('NPSN') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Tahun Berdiri</label>
                <input type="number" name="Tahun_berdiri" value="{{ old('Tahun_berdiri', $dataSchool->Tahun_berdiri) }}"
                       class="w-full border rounded px-3 py-2 @error('Tahun_berdiri') border-red-500 @enderror">
                @error('Tahun_berdiri') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Logo Sekolah</label>
                @if ($dataSchool->Logo)
                    <img src="{{ Storage::url($dataSchool->Logo) }}" alt="Logo" class="h-16 mb-2">
                @endif
                <input type="file" name="Logo" class="w-full border rounded px-3 py-2">
                @error('Logo') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan Perubahan
            </button>
        </form>
    </div>

</body>
</html>
