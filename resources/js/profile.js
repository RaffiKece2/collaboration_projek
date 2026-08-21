const token = localStorage.getItem('token');


const response = await fetch('/profile/data', {

    method: 'GET',

    headers: {
        'Accept' : 'application/json',

        'Authorization' : `Bearer ${token}`
    }


})

const editPage = document.getElementById('formEdit');
const editModel = document.getElementById('bentukProfile');
const batal = document.getElementById('batal_change');

editPage.addEventListener('click', () => {

    editModel.showModal();

});

batal.addEventListener('click', () => {

    editModel.close();

});

console.log(token)


const jawaban = await response.json();

const startEdit = document.getElementById('profileForm');

const startLogout = document.getElementById('logoutSistem');

const startPassword = document.getElementById('formPassword');
const changeModel = document.getElementById('bentukPassword');
const batalUbah = document.getElementById('batal');

const FotoProfile = document.getElementById('FotoProfile');
const cancelFoto = document.getElementById('cancelFoto');
const FotoModel = document.getElementById('FotoModel');

const startFoto = document.getElementById('ubahProfile');


FotoProfile.addEventListener('click', () => {

    FotoModel.showModal();
})

cancelFoto.addEventListener('click', () => {

    FotoModel.close();
})









startPassword.addEventListener('click', () => {

    changeModel.showModal();

});

batalUbah.addEventListener('click', () => {
    changeModel.close();

});

const startChange = document.getElementById('ubahPassword');

if (jawaban.ok) {

    document.getElementById('namaUser').textContent = jawaban.user.name
    document.getElementById('roleUser').textContent = `Role: ${jawaban.user.role}`
    document.getElementById('fotoProfile').src = `storage/${jawaban.user.gambar}`


    startFoto.addEventListener('submit', async function (e) {

        e.preventDefault();

        const file = document.getElementById('foto').files[0];

        const formData = new FormData();

        formData.append('_method', 'PATCH');
        formData.append('foto', file);

        const responseFoto = await fetch('change_profile', {

            method: 'POST',

            headers: {
                'Accept' : 'application/json',

                'Authorization' : `Bearer ${token}`,

                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
            },

            body: formData

        });

        const jawabFoto = await responseFoto.json();

        if (jawabFoto.ok) {

            document.getElementById('notif').textContent = "foto profile berhasil diubah"

        }else {
            document.getElementById('notif').textContent = "foto profile gagal diubah"
        }



    })






    startChange.addEventListener('submit', async function (e) {

        e.preventDefault();

        const passwordBaru = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;

        if (passwordBaru != confirmPassword) {

            document.getElementById('errorPassword').textContent = "Password anda tidak sesuai"

            return;

        }

        document.getElementById('errorPassword').textContent = "";


        const changeResponse = await fetch('/change_password', {

            method: 'PATCH',

            headers: {
                'Content-Type' : 'application/json',
                'Accept' : 'application/json',

                'Authorization' : `Bearer ${token}`,

                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
            },

            body: JSON.stringify({
                password : passwordBaru

            })

        })

        const jawabanPassword = await changeResponse.json();

        if (jawabanPassword.ok) {

            document.getElementById('notifPassword').textContent = "pengubahaan password berhasil!"
        }else {
            document.getElementById('notifPassword').textContent = "password gagal"

        }

    



    })



    




    startLogout.addEventListener('click', async function (e) {

        e.preventDefault();

        const logoutRespons = await fetch('/logout', {

            method: 'POST',

            headers: {
                'Accept' : 'application/json',

                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content,

                'Authorization' : `Bearer ${token}`
            }



        });

        const logoutJawaban = await logoutRespons.json();

        if (logoutJawaban.ok) {

            window.location.href = '/';

            document.getElementById('notifLogout').textContent = "Logout Berhasil"

        }else {

            document.getElementById('notifLogout').textContent = "Logout Gagal"

        }

        



    });


    


    startEdit.addEventListener('submit', async function (e) {

        e.preventDefault();

        const nama = document.getElementById('nama').value;
        const email = document.getElementById('email').value;



        const editResponse = await fetch(`/edit_profile`,{

            method: 'PATCH',

            headers: {
                'Content-Type': 'application/json',
                'Accept' : 'application/json',
                'Authorization' : `Bearer ${token}`,

                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
            },
            

            body: JSON.stringify({

                nama: nama,
                email: email

            })

        });



        const editJawab = await editResponse.json();

        if (editJawab.ok) {
            document.getElementById('notif').textContent = "edit profile berhasil"
            document.getElementById('fotoProfile').src =  `storage/${jawaban.user.gambar}`

        }else {
            document.getElementById('notif').textContent = "edit gagal diedit"
        }

    })





}


