// Lógica para el Panel Administrador - Farmacia Cruz Azul
document.addEventListener('DOMContentLoaded', () => {
    setupAdminInteractions();
});

function setupAdminInteractions() {
    const addProductForm = document.getElementById('addProductForm');
    
    if (addProductForm) {
        addProductForm.addEventListener('submit', (e) => {
            // Confirmación antes de insertar en la instancia privada 10.0.2.79 [cite: 32]
            const confirmacion = confirm("¿Desea registrar este producto en la base de datos MariaDB?");
            if (!confirmacion) {
                e.preventDefault();
            }
        });
    }
}

// Función para confirmar eliminación de registros (Evidencia de control de acceso )
function confirmDelete(id) {
    if (confirm(`¿Está seguro de eliminar el producto ID: ${id}? Esta acción es irreversible en la BD.`)) {
        window.location.href = `eliminar.php?id=${id}`;
    }
}

// Notificaciones visuales para el usuario
function showNotification(message, type = 'success') {
    const modal = document.getElementById('notificationModal');
    const messageEl = document.getElementById('modalMessage');
    
    if (modal && messageEl) {
        messageEl.textContent = message;
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 3000);
    }
}