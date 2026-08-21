const token = localStorage.getItem('token');

const response = await fetch('/dashboard_data', {

    method: 'GET',
    
    headers: {
        'Accept' : 'application/json',
        'Authorization' : `Bearer ${token}`
    }
});

const jawaban = await response.json();

if (jawaban.ok) {

    document.getElementById('judul').textContent = `Halo ${jawaban.user.name}`
}


