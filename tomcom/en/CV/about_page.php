<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Tomaso Zanardi</title>
    <link rel="stylesheet" href="../../CSS/global.css">
    <link rel="stylesheet" href="../../CSS/cv.css">
    <link rel="icon" type="image/x-icon" href="../../favic.png">
</head>
<body>
    <div class="lang-switch">
        <span>🇮🇹</span>
        <label class="switch">
            <input type="checkbox" checked onchange="window.location.href = this.checked ? '../CV/about_page.php' : '../../CV/about_page.php'">
            <span class="slider round"></span>
        </label>
        <span>🇬🇧</span>
    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <img src="../../immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="../index.php">Home</a>
                <a href="../Biblioteca/login.html">Library</a>
                <a href="../Blog/blog2.php">Blog</a>
                <a href="../contatti/FORMA.php">Contact</a>
                <a href="../Donazioni/Donazioni.php">Donations</a>
            </div>
        </div>
    </nav>

    <header class="about-header">
        <h1>Tomaso Zanardi</h1>
        <p>Philosopher • Cognitive Scientist • Researcher</p>
    </header>

    <main class="about-content">
        <div class="about-container">
            <!-- Profile Section -->
            <section class="profile-section">
                <div class="profile-content">
                    <div class="profile-image">
                        <!-- Replace with your actual photo -->
                        <img src="profile-photo.jpg" alt="Tomaso Zanardi" class="profile-photo">
                    </div>
                    <div class="profile-text">
                        <h2>Welcome</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </section>

            <!-- CV Download Section -->
            <section class="cv-section">
                <div class="cv-card">
                    <div class="cv-header">
                        <div class="cv-icon">📄</div>
                        <h3>Curriculum Vitae</h3>
                    </div>
                    <p>Download my complete academic and professional background</p>
                    <div class="cv-download">
                        <a href="cv/CV_[YourName].pdf" download class="cv-btn">
                            <span class="download-icon">⬇️</span>
                            Download CV (PDF)
                        </a>
                        <div class="cv-info">
                            <small>Last updated: [Date] • Size: ~[Size]KB</small>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Research Interests -->
            <section class="interests-section">
                <h2>Research Interests</h2>
                <div class="interests-grid">
                    <div class="interest-item">
                        <h4>⚖ Free Will</h4>
                        <p>Philosophical and neuroscientific perspectives on agency and decision-making</p>
                    </div>
                    <div class="interest-item">
                        <h4>💭 Intention Formation</h4>
                        <p>How intentions arise and guide action in cognitive systems</p>
                    </div>
                    <div class="interest-item">
                        <h4>🍄 Psychedelics</h4>
                        <p>Altered states of consciousness and their therapeutic potential</p>
                    </div>
                    <div class="interest-item">
                        <h4>🥽 Virtual Reality</h4>
                        <p>Immersive technologies and their impact on perception and cognition</p>
                    </div>
                    <div class="interest-item">
                        <h4>🧘 Meditation</h4>
                        <p>Contemplative practices and their effects on mind and consciousness</p>
                    </div>
                </div>
            </section>

            <!-- Quick Facts -->
            <!--section class="facts-section">
                <h2>Quick Facts</h2>
                <div class="facts-grid">
                    <div class="fact-item">
                        <div class="fact-number">[X]</div>
                        <div class="fact-label">Years of Research</div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-number">[X]</div>
                        <div class="fact-label">Publications</div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-number">[X]</div>
                        <div class="fact-label">Projects Completed</div>
                    </div>
                    <div class="fact-item">
                        <div class="fact-number">[X]</div>
                        <div class="fact-label">Collaborations</div>
                    </div>
                </div>
            </section-->

            <!-- Contact CTA -->
            <section class="contact-cta">
                <div class="cta-content">
                    <h2>Let's Collaborate</h2>
                    <p>Interested in working together or discussing research opportunities?</p>
                    <a href="../contatti/FORMA.php" class="cta-btn">Get in Touch</a>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
