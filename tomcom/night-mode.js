// Night Mode Toggle Functionality

document.addEventListener('DOMContentLoaded', function() {
    const nightModeToggle = document.getElementById('nightModeToggle');
    
    // Check for saved night mode preference
    const savedNightMode = localStorage.getItem('nightMode');
    if (savedNightMode === 'enabled') {
        document.body.classList.add('night-mode');
        if (nightModeToggle) {
            nightModeToggle.checked = true;
        }
    }
    
    // Toggle night mode
    if (nightModeToggle) {
        nightModeToggle.addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.add('night-mode');
                localStorage.setItem('nightMode', 'enabled');
            } else {
                document.body.classList.remove('night-mode');
                localStorage.setItem('nightMode', 'disabled');
            }
        });
    }
});
