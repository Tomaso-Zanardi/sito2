<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
     <link rel="stylesheet" href="../../CSS/global.css">
    <link rel="stylesheet" href="../../CSS/blog.css">
    <link rel="icon" type="image/x-icon" href="../../favic.png">
</head>
<body>
    <div class="lang-switch">
        <span>🇮🇹</span>
        <label class="switch">
            <input type="checkbox" checked onchange="window.location.href = this.checked ? '../Blog/blog2.php' : '../../Blog/blog2.php'">
            <span class="slider round"></span>
        </label>
        <span>🇬🇧</span>
    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <img src="../../immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="../index.php">Home</a>
                <a href="../CV/about_page.php">Curriculum Vitae</a>
                <a href="../Biblioteca/login.html">Library</a>
                <a href="../contatti/FORMA.php">Contact</a>
                <a href="../Donazioni/Donazioni.php">Donations</a>
            </div>
        </div>
    </nav>

    <!-- Primary Banner -->
    <!-- To add background image: add class "with-image" and make sure banner-image.jpg exists -->
    <header class="blog-header with-image">
        <h1>Blog</h1>
    </header>

    <!-- Secondary Banner - Easy to show/hide by commenting out -->
    <div class="secondary-banner">
        <div class="secondary-banner-content">
            <p><strong>Latest Update:</strong> Welcome to our updated blog! Check out our latest research findings.</p>
        </div>
    </div>
    <!-- End Secondary Banner -->

    <main class="blog-content">
        <?php
        $posts = [];
        $pinnedPosts = [];
        $regularPosts = [];
        $postsDir = 'POSTS/';

        $files = scandir($postsDir);
        foreach($files as $file) {
            if($file != '.' && $file != '..' && pathinfo($file, PATHINFO_EXTENSION) == 'html') {
                $content = file_get_contents($postsDir . $file);
                
                // Extract title
                preg_match('/<title>(.*?)<\/title>/s', $content, $titleMatch);
                
                // Extract first paragraph for excerpt
                preg_match('/<p>(.*?)<\/p>/s', $content, $excerptMatch);
                
                // Check for pinned status (look for <!-- PINNED --> comment at the beginning)
                $isPinned = strpos($content, '<!-- PINNED -->') !== false;
                
                // Extract first image
                preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $content, $imageMatch);
                $imageUrl = $imageMatch[1] ?? null;
                
                // If image URL is relative, make it relative to the blog directory
                if($imageUrl && !preg_match('/^https?:\/\//', $imageUrl)) {
                    $imageUrl = $postsDir . $imageUrl;
                }
                
                $postData = [
                    'file' => $file,
                    'title' => $titleMatch[1] ?? 'Untitled',
                    'excerpt' => $excerptMatch[1] ?? '',
                    'image' => $imageUrl,
                    'date' => date('F d, Y', filemtime($postsDir . $file)),
                    'timestamp' => filemtime($postsDir . $file)
                ];
                
                if($isPinned) {
                    $pinnedPosts[] = $postData;
                } else {
                    $regularPosts[] = $postData;
                }
            }
        }

        // Sort both arrays by date (newest first)
        usort($pinnedPosts, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });
        
        usort($regularPosts, function($a, $b) {
            return $b['timestamp'] - $a['timestamp'];
        });

        // Display pinned posts first
        if(!empty($pinnedPosts)): ?>
            <section class="pinned-section">
                <h2 class="section-title">📌 Pinned Posts</h2>
                <?php foreach($pinnedPosts as $post): ?>
                    <article class="blog-preview pinned-post">
                        <h3><a href="<?php echo $postsDir . $post['file']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                        <div class="post-meta">📌 Pinned • Posted on <?php echo $post['date']; ?></div>
                        
                        <?php if($post['image']): ?>
                            <div class="post-image">
                                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
                            </div>
                        <?php endif; ?>
                        
                        <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>

        <!-- Display regular posts -->
        <?php if(!empty($regularPosts)): ?>
            <section class="regular-posts">
                <?php if(!empty($pinnedPosts)): ?>
                    <h2 class="section-title">Recent Posts</h2>
                <?php endif; ?>
                
                <?php foreach($regularPosts as $post): ?>
                    <article class="blog-preview">
                        <h3><a href="<?php echo $postsDir . $post['file']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
                        <div class="post-meta">Posted on <?php echo $post['date']; ?></div>
                        
                        <?php if($post['image']): ?>
                            <div class="post-image">
                                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy">
                            </div>
                        <?php endif; ?>
                        
                        <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>

        <?php if(empty($pinnedPosts) && empty($regularPosts)): ?>
            <div class="no-posts">
                <p>No blog posts found. Check back soon for new content!</p>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
