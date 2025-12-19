<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomaso Zanardi</title>
    <link rel="stylesheet" href="CSS/dstyles.css">
    <link rel="icon" type="image/x-icon" href="favic.png">
</head>
<body>
    <div class="lang-switch">
        <span>🇬🇧</span>
        <label class="switch">
            <input type="checkbox" onchange="window.location.href = this.checked ? 'ita/indexita.html' : '/'">
            <span class="slider round"></span>
        </label>
        <span>🇮🇹</span>
    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <img src="immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="CV/about_page.php">Curriculum Vitae</a>
                <a href="Biblioteca/login.html">Biblioteca</a>
                <a href="Blog/blog2.php">Blog</a>
                <a href="contatti/FORMA.php">Contatti</a>
                <a href="Donazioni/Donazioni.php">Donazioni</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="row">
            <div class="logone">
                <div class="overlapping-images">
                    <!--img src="immagini/OI000043.JPG" alt="Bottom Image" class="overlapped-image"-->
                    <img src="immagini/Ahimsa.png" alt="Top Image" class="overlapped-image2" style="width: 10%;">
                </div>
                <div class="scroll-arrow">
                    <div class="arrow-down"></div>
                </div>
            </div>
        </div>
        
        <div class="row content-row">
            <div class="side">
                <div class="about-section">
                    <h2>Un po' di informazioni su di me</h2>
                    <div class="authors-container">
                        <div class="about-preview">
                            <img src="immagini/OI000043.JPG" alt="Tomaso Zanardi" class="profile-img">
                            <p class="preview-text">'The industrial revolution and its consequences have been a disaster for the human race...'<span class="expand-button">+</span></p>
                        </div>
                    </div>
                    <!-- Second Author -->
                        <!--div class="about-preview">
                            <img src="assets/second-author.jpeg" alt="Second Author" class="profile-img">
                            <p class="preview-text">un altro viz molto cviz che fa cose cose cose cose che...<span class="expand-button">+</span></p>
                        </div>
                    </div-->
                    
                    <div class="about-full" id="author1-modal">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <img src="immagini/OI000043.JPG" alt="Tomaso Zanardi" class="profile-img-large">
                            <h2>About Me</h2>
                            <p>'The industrial revolution and its consequences have been a disaster for the human race...'</p>
                            <p>(I do not condone by any mean Ted Kazinsky's actions, but I believe his analisis of the destructive impact of technology to be more true by the day)</p>
                        </div>
                    </div>
                    
                    <!--p>Qui sotto qualche altra foto mia (nel bosco e non), e degli sfondi per il desktop rilassanti.</p>
                    <h3><a href="galleria_personale/galleria.html">Immagini rilassanti e foto di uno scoppiato:</a></h3>
                    <div class="lightbox-gallery">
                        <a class="lightbox" href="#a">
                            <img src="immagini/OI000044.JPG" width="204" height="153" alt="foresta della lama, primi di aprile 2019" />
                        </a>
                        <div class="lightbox-target" id="a">
                            <img src="immagini/OI000044.JPG"/>
                            <a class="lightbox-close" href=""></a>
                        </div>
                        <a class="lightbox" href="#c">
                            <img src="immagini/OI000051.JPG" width="153" height="204" alt="io nella lama" />
                        </a>
                        <div class="lightbox-target" id="c">
                            <img src="immagini/OI000051.JPG"/>
                            <a class="lightbox-close" href=""></a>
                        </div>
                        <a class="lightbox" href="#e">
                            <img src="immagini/OI000056.JPG" width="204" height="153" alt="lago di Brayes, agosto 2020" />
                        </a>
                        <div class="lightbox-target" id="e">
                            <img src="immagini/OI000056.JPG"/>
                            <a class="lightbox-close" href=""></a>
                        </div>
                    </div-->
                </div>
            </div>

            <div class="main">
                <section class="featured-section">
                    <h2>I miei interessi</h2>
                    
                    <img src="immagini/LOGO_banner_ita_orig.jpg" alt="FILOSOFIA NATURALE" class="featured-img">
                    <h3>FILOSOFIA NATURALE</h3>
                    <h6>In progress...</h6>
                    <p>un progetto che cominciero' a breve, dedicato alla comunicazione e alla divulgaione scientifica e alla diffusione della pratica della meditazione <abbr title="dal Pali 'Vipassana' ('Visione profonda'/'vedere le cose realmente')">vipassana</abbr>. Pratica spirituale, pensiero filosofico e attitudine scientifica possono essere tutt'uno in armonia e senza frizione.</p>
                </section>
                
                <section class="articles-section">
                    <h2>Latest Content</h2>
                    <?php
                    require_once 'content-handler.php';
                    
                    $directories = array(
                        'Blog/POSTS',
                        'Podcast/POSTS',
                        'Projectorium/POSTS'
                    );
                    
                    $latestPosts = getLatestPosts($directories);
                    
                    foreach ($latestPosts as $post) {
                        echo '<article>';
                        echo '<h3><a href="' . $post['file'] . '">' . htmlspecialchars($post['title']) . '</a></h3>';
                        echo '<p>' . htmlspecialchars($post['preview']) . '</p>';
                        echo '<small>Posted: ' . date('F j, Y', $post['date']) . '</small>';
                        echo '</article>';
                    }
                    ?>
                </section>
                <!--section class="articles-section">
                    <img src="immagini/BANNER_BUSHCRAFT.png" alt="BUSHCRAFT" class="featured-img">
                    <h3>BOSCHI, ALPINISMO, BUSHCRAFTING...</h3>
                    <h6>In progress...</h6>
                    <p>...E altre cose lontane dalla tecno-distopia contemporanea...</p>
                    <p>Se volete consigliarmi escursioni, prodotti da campeggio, o libri sul rapporto tra essere umano e natura (o anche su altri temi), oppure se volete mandarmi attrezzatura da escursione (coltelli, fornelli, tende etc.) prodotti dalla vostra azienda da recensire, non esitate a contattarmi a:</p>
                    
                    <img src="immagini/BANNER_TOM_FITNESS.png" alt="FITNESS" class="featured-img">
                    <h3><a href="tomstrong/strongindex.html">ALCUNI PROGRAMMI PER LO SVILUPPO DELLA FORZA.</a></h3>
                    <p>Alcuni programmi per mantenersi in forma, uno per principianti, fatto da me (split classico spingi-tira-gambe), uno molto popolare sviluppato dal powerlifter Johnny Candito, tradotto in Italiano da me, e alcuni consigli di nutrizione.</p>
                </section-->
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="social-links">
            <a href="https://x.com/TomasoZanardi" class="social-link" target="_blank">
                <svg class="social-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                <span class="social-text">Twitter</span>
            </a>
            <a href="https://instagram.com/giacomo_piselli_fioroni" class="social-link" target="_blank">
                <svg class="social-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
                <span class="social-text">Instagram</span>
            </a>
            <a href="https://open.spotify.com/user/yourusername" class="social-link" target="_blank">
                <svg class="social-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                </svg>
                <span class="social-text">Spotify</span>
            </a>
        </div>
        <br>
        <br>
        <div>
            <p style="text-align: center;">Copyleft Tomaso Zanardi: <a href="tomasozanardi.com" style="color: lightgreen;">www.tomasozanardi.com</a></p>
        </div>
    </footer>
    <script src="scripts.js"></script>
    <script src="scripts-arrow.js"></script>
</body>
</html>