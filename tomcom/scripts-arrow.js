document.addEventListener('DOMContentLoaded', function() {
    const scrollArrow = document.querySelector('.scroll-arrow');
    
    if (scrollArrow) {
        // Hide arrow on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                scrollArrow.classList.add('hidden');
            } else {
                scrollArrow.classList.remove('hidden');
            }
        });

        // Scroll to content when arrow is clicked
        scrollArrow.addEventListener('click', function() {
            const contentSection = document.querySelector('.content-row');
            if (contentSection) {
                contentSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});
