// Mobile Menu Toggle Functionality

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navbarLinks = document.getElementById('navbarLinks');
    
    if (menuToggle && navbarLinks) {
        menuToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navbarLinks.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        const links = navbarLinks.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', function() {
                menuToggle.classList.remove('active');
                navbarLinks.classList.remove('active');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!menuToggle.contains(event.target) && !navbarLinks.contains(event.target)) {
                menuToggle.classList.remove('active');
                navbarLinks.classList.remove('active');
            }
        });
    }
});
