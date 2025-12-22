<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informazioni - Tomaso Zanardi</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/cv.css">
    <link rel="icon" type="image/x-icon" href="../favic.png">
</head>
<body>
    <div class="night-mode-toggle">
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
            <input type="checkbox" onchange="window.location.href = this.checked ? '../en/CV/about_page.php' : '../CV/about_page.php'">
            <span class="slider round"></span>
        </label>
        <span>🇬🇧</span>
    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <img src="../immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="../index.php">Home</a>
                <a href="../Biblioteca/login.html">Biblioteca</a>
                <a href="../Blog/blog2.php">Blog</a>
                <a href="../contatti/FORMA.php">Contatti</a>
                <a href="../Donazioni/Donazioni.php">Donazioni</a>
            </div>
        </div>
    </nav>

    <header class="about-header">
        <h1>Tomaso Zanardi</h1>
        <p>Filosofo • Scienziato Cognitivo • Ricercatore</p>
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
                        <h2>Benvenuto</h2>
                        <p>Benvenuto nel mio sito personale. Mi chiamo Tomaso, sono uno scienziato cognitivo e ricercatore al Social Intelligence Lab, presso la Humboldt Universität di Berlino.</p>
                        <p>Sono appassionato di filosofia della mente, neuroscienze e tecnologia, per quanto questo sia un sito personale qui puoi trovare il mio Curriculum Vitae e altre informazioni su di me, qualora possa interessarti una collaborazione scientifica o professionale.</p>
                        <p>La mia ricerca verte primariamente sui meccanismi di formazione delle intenzioni ed i loro correlati fisiologici, in particolare microsaccadi e pupillometria.</p>
                        <p>Ho anche un interesse per le tecnologie immersive come la realtà virtuale e gli stati alterati di coscienza indotti da sostanze psichedeliche. Inoltre sono un meditatore con una mente scientifica sciettica e da un paio di anni collaboro con la Yogalife Foundation, con la quale stiamo sviluppando esperimenti per misurare gli effetti cognitivi, propriocettivi e interocettivi dello yoga sulla mente umana.</p>
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
                    <p>Scarica il mio background accademico e professionale completo</p>
                    <div class="cv-download">
                        <a href="cv/CV_[YourName].pdf" download class="cv-btn">
                            <span class="download-icon">⬇️</span>
                            Scarica CV (PDF)
                        </a>
                        <div class="cv-info">
                            <small>Ultimo aggiornamento: [Date] • Dimensione: ~[Size]KB</small>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Research Interests -->
            <section class="interests-section">
                <h2>Interessi di Ricerca</h2>
                <div class="interests-grid">
                    <div class="interest-item">
                        <h4>� Libero Arbitrio</h4>
                        <p>Prospettive filosofiche e neuroscientifiche su azione e processo decisionale</p>
                    </div>
                    <div class="interest-item">
                        <h4>💭 Formazione delle Intenzioni</h4>
                        <p>Come le intenzioni emergono e guidano l'azione nei sistemi cognitivi</p>
                    </div>
                    <div class="interest-item">
                        <h4>🍄 Psichedelici</h4>
                        <p>Stati alterati di coscienza e il loro potenziale terapeutico</p>
                    </div>
                    <div class="interest-item">
                        <h4>🥽 Realtà Virtuale</h4>
                        <p>Tecnologie immersive e il loro impatto su percezione e cognizione</p>
                    </div>
                    <div class="interest-item">
                        <h4>🧘 Meditazione</h4>
                        <p>Pratiche contemplative e i loro effetti su mente e coscienza</p>
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
                    <h2>Collaboriamo</h2>
                    <p>Interessato a lavorare insieme o a discutere opportunità di ricerca?</p>
                    <a href="../contatti/FORMA.php" class="cta-btn">Mettiti in Contatto</a>
                </div>
            </section>
        </div>
    </main>
    <script src="../night-mode.js"></script>
</body>
</html>