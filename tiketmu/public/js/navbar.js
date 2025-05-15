
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const navbarContent = document.getElementById('navbar-content');
        
        if (window.scrollY > 50) {
            // Saat scroll lebih dari 50px, kecilkan navbar
            navbarContent.classList.replace('py-6', 'py-2');
            navbar.querySelector('.logo').classList.replace('text-3xl', 'text-xl');
        } else {
            // Kembali ke ukuran asli saat di atas
            navbarContent.classList.replace('py-2', 'py-6');
            navbar.querySelector('.logo').classList.replace('text-xl', 'text-3xl');
        }
    });

