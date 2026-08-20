<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    
    <p id="notif"></p>

    <h1>Daftar Akun</h1>

    <form id="registerPage">

        <p>Pilih Role: </p>
        <select id="role">
            <option value="siswa">Siswa</option>
            <option value="guru">Guru</option>
            <option value="admin">Admin</option>
            <option value="superadmin">Super Admin</option>
        </select>

        <p>Nama: </p>
        <input id="nama" placeholder="Nama..." type="text">
        <p id="errorNama"></p>

        <p>Email: </p>
        <input id="email" placeholder="Email..."  type="email">
        <p id="errorEmail"></p>

        <p>Password: </p>
        <input id="password" placeholder="Password..." type="password">
        <p id="errorPassword"></p>

        <button type="submit">Register</button>

    </form>

    <form action="/loginPage">
        <button>Login</button>
    </form>

    @vite('resources/js/app.js')




    
</body>
</html>