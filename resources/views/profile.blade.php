<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <div>

        <h1 id="namaUser"></h1>
        <p id="roleUser"></p>

    </div>

    <form action="/dashboard_siswa">
        <button>Dashboard</button>
    </form>


    @vite('resources/js/profile.js')






    
</body>
</html>