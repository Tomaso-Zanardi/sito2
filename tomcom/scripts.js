document.addEventListener('DOMContentLoaded', function() {
    const aboutPreviews = document.querySelectorAll('.about-preview');
    const aboutFulls = document.querySelectorAll('.about-full');
    const closeButtons = document.querySelectorAll('.close-button');

    // Handle opening modals
    aboutPreviews.forEach((preview, index) => {
        preview.addEventListener('click', function() {
            aboutFulls[index].classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    // Handle closing modals
    closeButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const modal = this.closest('.about-full');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });

    // Close modal when clicking outside
    aboutFulls.forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    });
});
