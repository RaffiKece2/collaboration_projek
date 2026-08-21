<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit jurusan</title>
</head>
<body>
    <h1>Edit Jurusan</h1>

    <form action="{{route ('jurusan.update', $jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Jurusan</label>
        <input type="text" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}">

        <label>Kode Jurusan</label>
        <input type="text" name="kode_jurusan" value="{{$jurusan->kode_jurusan}}">

        <button type="submit">update</button>
    </form>
</body>
</html>
