<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <p id="notif"></p>
    <p id="notifLogout"></p>
    <p id="notifPassword"></p>

    <img id="fotoProfile" alt="Profile">


    <div>

        <h1 id="namaUser"></h1>
        <p id="roleUser"></p>

    </div>


    <button id="formPassword">Change Password</button>


    <dialog id="bentukPassword">
        <h2>Change Password:</h2>

        <form id="ubahPassword">
            <p>New Password: </p>
            <input id="password" placeholder="Password Baru..." type="password">

            <p>Confirmation Password: </p>
            <input id="confirm_password" placeholder="Ulangi Password..." type="password">
            <p id="errorPassword"></p>

            <button type="submit">Ubah Password</button>
            <button type="button" id="batal">Batal Ubah</button>


        </form>

    
    </dialog>

    <button id="formEdit">Edit Profile</button>

    <form id="logoutSistem">

        <button type="button">Logout</button>

    </form>
    

    <dialog id="bentukProfile">

        <h2>Edit Profile:</h2>

        <form id="profileForm">

            <p>Foto Profile: </p>
            <input id="file"  type="file" accept=".jpg,.jpeg,.png">

            <p>Nama: </p>
            <input id="nama" placeholder="Nama" type="text">

            <p>Email: </p>
            <input id="email" placeholder="email" type="email">

            <button type="submit">Edit</button>
            <button type="button" id="batal_change">Batal</button>

        </form>

    </dialog>

    <form action="/dashboard_siswa">
        <button>Dashboard</button>
    </form>


    @vite('resources/js/profile.js')



    
</body>
</html>