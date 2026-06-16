window.openModalTambahProduk = function () {
    const modal = document.getElementById('modalTambahProduk');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
};

window.closeModalTambahProduk = function () {
    const modal = document.getElementById('modalTambahProduk');
    modal.classList.remove('flex');
    modal.classList.add('hidden');
};

window.toggleCatatanDropdown = function() {
    const dropdown = document.getElementById('catatanDropdown');
    if (dropdown) dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
};

window.toggleSidebar = function() {
    document.querySelector('.sidebar').classList.toggle('collapsed');
};

window.toggleDropdown = function() {
    const dropdown = document.getElementById('dropdown');
    if (dropdown) dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
};

window.toggleCardDropdown = function(id) {
    document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
        if (el.id !== id) el.style.display = 'none';
    });
    const dropdown = document.getElementById(id);
    if (dropdown) dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
};

document.addEventListener('click', function(e) {
    // Tutup user dropdown
    if (!e.target.closest('.user-menu')) {
        const userDropdown = document.getElementById('dropdown');
        if (userDropdown) userDropdown.style.display = 'none';
    }

    if (!e.target.closest('.sidebar')) {
        const catatanDropdown = document.getElementById('catatanDropdown');
        if (catatanDropdown) catatanDropdown.style.display = 'none';
    }

    if (!e.target.closest('[id^="dropdown-"]') && !e.target.closest('button')) {
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.style.display = 'none');
    }
});