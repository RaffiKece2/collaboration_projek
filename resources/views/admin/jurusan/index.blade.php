<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Jurusan</title>
</head>
<body>
    <h1>Halaman Jurusan</h1>
    <a href= "{{ route('jurusan.create') }}" >+ Tambah jurusan </a>

    <table border="1">
        <tr>
            <th>nama jurusan</th>
            <th>kode jurusan</th>
            <th>keterangan</th>
        </tr>

        @foreach ($jurusans as $jurusan)
        <tr>
            <td>{{ $jurusan->nama_jurusan}}</td>
            <td>{{ $jurusan->kode_jurusan}}</td>
            <td>{{ $jurusan->keterangan}}</td>
            <td>
                <a href="{{ route('jurusan.edit', $jurusan->id) }}">Edit</a>

                <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>

</body>
</html>
