<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>Create Jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf

        <label>Nama Jurusan</label>
        <input type="text" name="nama_jurusan">

        <label>Kode Jurusan</label>
        <input type="text" name="kode_jurusan">

        <label>Keterangan</label>
        <input type="text" name="keterangan">

        <button type="submit">simpan</button>

    </form>
</body>
</html>
