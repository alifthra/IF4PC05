document.addEventListener('DOMContentLoaded', () => {

    const openButtons = document.querySelectorAll('[data-modal-open]');
    const closeButtons = document.querySelectorAll('[data-modal-close]');

    openButtons.forEach(button => {
        button.addEventListener('click', () => {

            const modalId = button.dataset.modalOpen;

            document
                .getElementById(modalId)
                .style.display = 'flex';
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {

            button
                .closest('.modal')
                .style.display = 'none';
        });
    });

});