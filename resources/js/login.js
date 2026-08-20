const loginPage = document.getElementById('loginPage');

loginPage.addEventListener('submit', async function (e) {

    e.preventDefault();


    const email = document.getElementById('email').value
    const password = document.getElementById('password').value

    const response = await fetch('/login', {

        method: 'POST',

        headers: {
            'Content-Type' : 'application/json',
            'Accept' : 'application/json',

            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
        },

        body: JSON.stringify({

            email: email,
            password: password
        })
    });


    const jawaban = await response.json();

    if (jawaban.ok) {
        
        localStorage.setItem('token',jawaban.token);
        document.getElementById('notif').textContent = "login berhasil!!"

        window.location.href = '/dashboard_siswa';
        
    }else {

        if (jawaban.errors?.email) {

            document.getElementById('errorEmail').textContent = jawaban.errors.email

        }

        if (jawaban.errors?.password) {
            
            document.getElementById('errorPassword').textContent = jawaban.errors.password

        }

        document.getElementById('notif').textContent = "login gagal coba ulangi"

    }


})