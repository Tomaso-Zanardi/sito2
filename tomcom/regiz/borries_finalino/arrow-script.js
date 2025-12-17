// Add this to your scripts.js file
document.addEventListener('DOMContentLoaded', function() {
    const scrollArrow = document.querySelector('.scroll-arrow');
    const logoneSection = document.querySelector('.logone');

    // Hide arrow on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Adjust this value as needed
            scrollArrow.classList.add('hidden');
        } else {
            scrollArrow.classList.remove('hidden');
        }
    });

    // Optional: Scroll to content when arrow is clicked
    scrollArrow.addEventListener('click', function() {
        const contentSection = document.querySelector('.content-row');
        contentSection.scrollIntoView({ behavior: 'smooth' });
    });
});
