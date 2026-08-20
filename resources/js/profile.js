const token = localStorage.getItem('token');


const response = await fetch('/profile/data', {

    method: 'GET',

    headers: {
        'Accept' : 'application/json',

        'Authorization' : `bearer ${token}`
    }


})

const jawaban = await response.json();

if (jawaban.ok) {

    document.getElementById('namaUser').textContent = jawaban.user.name
    document.getElementById('roleUser').textContent = `Role: ${jawaban.user.role}`

}