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
<body>    <div class="night-mode-toggle">
        <span>☀️</span>
        <label class="switch">
            <input type="checkbox" id="nightModeToggle">
            <span class="slider round"></span>
        </label>
        <span>🌙</span>
    </div>
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
                        <p>Welcome to my personal website. My name is Tomaso, I am a cognitive scientist and researcher at the Social Intelligence Lab, Humboldt University of Berlin.</p>
                        <p>I am passionate about philosophy of mind, neuroscience, and technology. Although this is a personal website, here you can find my Curriculum Vitae and other information about me, in case you are interested in scientific or professional collaboration.</p>
                        <p>My research primarily focuses on the mechanisms of intention formation and their physiological correlates, particularly microsaccades and pupillometry.</p>
                        <p>I also have an interest in immersive technologies such as virtual reality and altered states of consciousness induced by psychedelic substances. Additionally, I am a meditator with a scientific skeptical mind, and for a couple of years I have been collaborating with the Yogalife Foundation, with which we are developing experiments to measure the cognitive, proprioceptive, and interoceptive effects of yoga on the human mind.</p>
                    </div>
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
    <script src="../../night-mode.js"></script>
</body>
</html>
