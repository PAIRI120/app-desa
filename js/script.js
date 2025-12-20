document.addEventListener('DOMContentLoaded', function() {
    // Ambil semua tombol toggle untuk submenu
    const submenuToggles = document.querySelectorAll('.submenu-toggle');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            // Cegah link agar tidak pindah halaman
            e.preventDefault();

            // Cari elemen li induk (yang memiliki class 'submenu')
            const parentSubmenu = this.parentElement;

            // Tutup submenu lain yang sedang terbuka
            submenuToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    otherToggle.parentElement.classList.remove('active');
                }
            });

            // Toggle class 'active' untuk membuka/tutup submenu ini
            parentSubmenu.classList.toggle('active');
        });
    });
});