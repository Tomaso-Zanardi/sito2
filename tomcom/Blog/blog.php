<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Blog</title>
    <link rel="stylesheet" href="blog-styles.css">
    <link rel="icon" type="image/x-icon" href="../favic.png">
</head>
<body>
    <!--header class="blog-header">
        <h1>Science Blog</h1>
    </header-->
    <nav class="navbar">
        <div class="navbar-container">
            <img src="../immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="../index.php">Home</a>
                <a href="../CV/about_page.php">Curriculum Vitae</a>
                <a href="../Biblioteca/login.html">Biblioteca</a>
                <a href="../contatti/FORMA.php">Contatti</a>
                <a href="../Donazioni/Donazioni.php">Donazioni</a>
            </div>
                <!--a href="Blog/blog.php">Blog</a-->
                <a href="../contatti/FORMA.php">Contact</a>
            </div>
        </div>
    </nav>

    <main class="blog-content">
        <?php
        $posts = [];
        $postsDir = 'POSTS/';

        $files = scandir($postsDir);
        foreach($files as $file) {
            if($file != '.' && $file != '..' && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                $content = file_get_contents($postsDir . $file);
                
                preg_match('/<title>(.*?)<\/title>/s', $content, $titleMatch);
                preg_match('/<p>(.*?)<\/p>/s', $content, $excerptMatch);
                
                $posts[] = [
                    'file' => $file,
                    'title' => $titleMatch[1] ?? 'Untitled',
                    'excerpt' => $excerptMatch[1] ?? '',
                    'date' => date('F d, Y', filemtime($postsDir . $file))
                ];
            }
        }

        usort($posts, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        foreach($posts as $post): ?>
            <article class="blog-preview">
                <h2><a href="<?php echo $postsDir . $post['file']; ?>"><?php echo $post['title']; ?></a></h2>
                <div class="post-meta">Posted on <?php echo $post['date']; ?></div>
                <p><?php echo $post['excerpt']; ?></p>
            </article>
        <?php endforeach; ?>
    </main>
</body>
</html>
