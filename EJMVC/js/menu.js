function toggleDropdown(id) {
    // Oculta todos los menús desplegables
    const dropdowns = document.querySelectorAll('.dropdown-content');
    dropdowns.forEach(dropdown => {
        if (dropdown.id !== id) dropdown.style.display = 'none';
    });

    // Muestra/oculta el menú correspondiente
    const dropdown = document.getElementById(id);
    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    } else {
        dropdown.style.display = 'block';
    }
}

// Cierra el menú al hacer clic fuera
window.addEventListener('click', (event) => {
    if (!event.target.matches('button')) {
        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            dropdown.style.display = 'none';
        });
    }
});