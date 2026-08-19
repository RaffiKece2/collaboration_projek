const registerPage = document.getElementById('registerPage');

registerPage.addEventListener('submit', async function (e) {

    e.preventDefault();

    await fetch('/sanctum/csrf-cookie', {
        credentials: 'include'
    })

    const nama = document.getElementById('nama').value
    const email = document.getElementById('email').value
    const password = document.getElementById('password').value
    const role = document.getElementById('role').value

    const response = await fetch('/register', {

        method: 'POST',

        headers: {
            'Content-Type' : 'application/json',
            'Accept' : 'application/json',

            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content

        },

        credentials: 'include',


        body : JSON.stringify({

            nama: nama,
            email: email,
            password: password,
            role : role

            
        })


    })


    const jawaban = await response.json();

    if (jawaban.ok) {
        document.getElementById('notif').textContent = "Register Berhasil"
    }else {

        document.getElementById('notif').textContent = "Register Gagal Tolong Register Kembali"

        if (jawaban.errors?.nama) {

            document.getElementById('errorNama').textContent = jawaban.errors.nama

        }

        if (jawaban.errors?.email) {
            document.getElementById('errorEmail').textContent = jawaban.errors.email
        }

        if (jawaban.errors?.password) {
            
            document.getElementById('errorPassword').textContent = jawaban.errors.password

        }

    }


})