document.addEventListener('DOMContentLoaded', function() {
    const aboutPreview = document.querySelector('.about-preview');
    const aboutFull = document.querySelector('.about-full');
    const closeButton = document.querySelector('.close-button');

    aboutPreview.addEventListener('click', function() {
        aboutFull.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    closeButton.addEventListener('click', function(e) {
        e.stopPropagation();
        aboutFull.classList.remove('active');
        document.body.style.overflow = 'auto';
    });

    aboutFull.addEventListener('click', function(e) {
        if (e.target === aboutFull) {
            aboutFull.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
});
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

