<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Sekolah</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .button {
            padding: 10px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .save {
            background: #2563eb;
            color: white;
        }

        .back {
            background: #6b7280;
            color: white;
        }

        .logo-preview {
            width: 120px;
            height: 120px;
            object-fit: contain;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            display: block;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Edit Data Sekolah</h1>

        {{-- Menampilkan error validasi --}}
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ route('Setelan.UpdateSekolah', $setelan->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Sekolah</label>

                <input
                    type="text"
                    name="Nama_sekolah"
                    value="{{ old('Nama_sekolah', $setelan->Nama_sekolah) }}"
                >
            </div>

            <div class="form-group">
                <label>Kepala Sekolah</label>

                <input
                    type="text"
                    name="Kepala_sekolah"
                    value="{{ old('Kepala_sekolah', $setelan->Kepala_sekolah) }}"
                >
            </div>

            <div class="form-group">
                <label>Alamat</label>

                <textarea
                    name="Alamat"
                    rows="4"
                >{{ old('Alamat', $setelan->Alamat) }}</textarea>
            </div>

            <div class="form-group">
                <label>Status Sekolah</label>

                <input
                    type="text"
                    name="Status_sekolah"
                    value="{{ old('Status_sekolah', $setelan->Status_sekolah) }}"
                >
            </div>

            <div class="form-group">
                <label>Jenjang Pendidikan</label>

                <input
                    type="text"
                    name="Jenjang_pendidikan"
                    value="{{ old('Jenjang_pendidikan', $setelan->Jenjang_pendidikan) }}"
                >
            </div>

            <div class="form-group">
                <label>Akreditasi</label>

                <input
                    type="text"
                    name="Akreditasi"
                    value="{{ old('Akreditasi', $setelan->Akreditasi) }}"
                >
            </div>

            <div class="form-group">
                <label>Telepon</label>

                <input
                    type="text"
                    name="Telp"
                    value="{{ old('Telp', $setelan->Telp) }}"
                >
            </div>

            <div class="form-group">
                <label>Email</label>

                <input
                    type="email"
                    name="Email"
                    value="{{ old('Email', $setelan->Email) }}"
                >
            </div>

            <div class="form-group">
                <label>NPSN</label>

                <input
                    type="text"
                    name="NPSN"
                    value="{{ old('NPSN', $setelan->NPSN) }}"
                >
            </div>

            <div class="form-group">
                <label>Tahun Berdiri</label>

                <input
                    type="text"
                    name="Tahun_berdiri"
                    value="{{ old('Tahun_berdiri', $setelan->Tahun_berdiri) }}"
                >
            </div>

            {{-- LOGO --}}
            <div class="form-group">

                <label>Logo Sekolah</label>

                {{-- Logo lama --}}
                @if($setelan->Logo)
                    <img
                        src="{{ asset('storage/' . $setelan->Logo) }}"
                        alt="Logo Sekolah"
                        class="logo-preview"
                    >
                @endif

                <input
                    type="file"
                    name="Logo"
                    accept="image/png,image/jpeg,image/jpg"
                >

                <small>
                    Format: JPG, JPEG, PNG. Maksimal 2 MB.
                </small>

            </div>

            <button type="submit" class="button save">
                Simpan Perubahan
            </button>

            <a
                href="{{ route('setelan.index') }}"
                class="button back"
            >
                Kembali
            </a>

        </form>

    </div>

</div>

</body>
</html>
