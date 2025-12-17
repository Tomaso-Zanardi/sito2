<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Communication Hub</title>
    <link rel="stylesheet" href="CSS/dstyles.css">
    <head>
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon2.png">
    </head>
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

    <!--header class="header">
        <div class="header-content">
            <img src="logo_omini.png" alt="Logo" class="logo">
            <div class="header-content">
                <img src="logo_scritta.png" alt="Logo" class="logo-text">
                <div class="header-text">
                    <h1></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </header-->

    <nav class="navbar">
        <div class="navbar-container">
            <img src="assets/transparent_logo.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="#X/about">About</a>
                <a href="#Projectorium/xxx.html">Projectorium</a>
                <a href="Blog/blog.php">Blog</a>
                <a href="contatti/FORMA.php">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="row">
            <div class="logone">
                <div class="overlapping-images">
                    <img src= "assets/foto3.jpeg" alt="Bottom Image" class="overlapped-image">
                    <img src="assets/4.png" alt="Top Image" class="overlapped-image2">
                </div>
                <div class="scroll-arrow">
                    <div class="arrow-down"></div>
                </div>
            </div>
        </div>
        
        <div class="row content-row">
            <div class="side">
                <div class="about-section">
                    <h2>About the Authors</h2>
                    <div class="authors-container">
                        <!-- First Author -->
                        <div class="about-preview">
                            <img src="assets/ufoto2.jpeg" alt="First Author" class="profile-img">
                            <p class="preview-text">un viz molto cviz che fa cose cose cose cose che..<span class="expand-button">+</span></p>
                        </div>
                        <!-- Second Author -->
                        <div class="about-preview">
                            <img src="assets/second-author.jpeg" alt="Second Author" class="profile-img">
                            <p class="preview-text">un altro viz molto cviz che fa cose cose cose cose che...<span class="expand-button">+</span></p>
                        </div>
                    </div>
                    
                    <!-- First Author Modal -->
                    <div class="about-full" id="author1-modal">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <img src="assets/ufoto2.jpeg" alt="First Author" class="profile-img-large">
                            <h2>About the First Author</h2>
                            <p>un viz molto cviz che fa cose cose cose cose che Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet feugiat nulla. Nunc nec mollis nisl. Nullam semper aliquet ligula vitae semper. Aenean ac consectetur velit. Aliquam sit amet condimentum tellus. Morbi ultricies molestie neque, a bibendum risus congue nec. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque placerat malesuada sapien, quis commodo risus venenatis in. Sed mollis rutrum urna, a iaculis ante dapibus tempor. Aliquam sed vulputate tortor, et aliquet mi. Proin eleifend a turpis a pretium.</p>
                            <p>Phasellus et risus ac erat lobortis venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus sagittis urna vitae diam faucibus, vel congue nibh congue. Donec vitae sagittis urna. Ut et est sapien. Nulla auctor molestie magna mollis ultrices. Ut hendrerit quam quis lobortis tempor. Integer cursus sem id lacus vehicula, ut viverra mauris pellentesque. Mauris at magna eget mauris porta aliquet laoreet a libero. Nulla a est pharetra enim cursus commodo ac non nulla. Morbi vitae nisl eu mauris vestibulum rutrum at eu massa. Quisque interdum dictum erat. Quisque sed est ac tellus euismod rhoncus. Maecenas lectus magna, fringilla nec augue et, lacinia fermentum urna.</p>
                        </div>
                    </div>
                    
                    <!-- Second Author Modal -->
                    <div class="about-full" id="author2-modal">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <img src="assets/second-author.jpeg" alt="Second Author" class="profile-img-large">
                            <h2>About the Second Author</h2>
                            <p>un altro viz molto cviz che fa cose cose cose cose che Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet feugiat nulla. Nunc nec mollis nisl. Nullam semper aliquet ligula vitae semper. Aenean ac consectetur velit. Aliquam sit amet condimentum tellus. Morbi ultricies molestie neque, a bibendum risus congue nec. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque placerat malesuada sapien, quis commodo risus venenatis in. Sed mollis rutrum urna, a iaculis ante dapibus tempor. Aliquam sed vulputate tortor, et aliquet mi. Proin eleifend a turpis a pretium.</p>
                            <p>Phasellus et risus ac erat lobortis venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus sagittis urna vitae diam faucibus, vel congue nibh congue. Donec vitae sagittis urna. Ut et est sapien. Nulla auctor molestie magna mollis ultrices. Ut hendrerit quam quis lobortis tempor. Integer cursus sem id lacus vehicula, ut viverra mauris pellentesque. Mauris at magna eget mauris porta aliquet laoreet a libero. Nulla a est pharetra enim cursus commodo ac non nulla. Morbi vitae nisl eu mauris vestibulum rutrum at eu massa. Quisque interdum dictum erat. Quisque sed est ac tellus euismod rhoncus. Maecenas lectus magna, fringilla nec augue et, lacinia fermentum urna.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main">
                <section class="featured-section">
                    <h2>Featured Research</h2>
                    <img src="assets/logo_scritta.png" alt="Research Image" class="featured-img">
                    <p>Exploring the intersection of science, nature, and human understanding.</p>
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
    <!--This whole site, its scripts, css, and markup are released under "the Tom Licence" The tom License states that you can do the fuck you want with any code that you find here
    and if you make softawre with it must stay free-->

</body>
</html>
