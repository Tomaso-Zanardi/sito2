<?php
function getLatestPosts($directories) {
    $posts = array();
    
    foreach ($directories as $dir) {
        if (is_dir($dir)) {
            $files = glob($dir . "/*.html");
            
            foreach ($files as $file) {
                // Skip files in the 'en' folder
                if (strpos($file, '/en/') !== false) {
                    continue;
                }
                
                $content = file_get_contents($file);
                
                // Extract title and preview
                preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $content, $titleMatch);
                preg_match('/<meta\s+name="description"\s+content="([^"]+)"/i', $content, $descMatch);
                
                $posts[] = array(
                    'file' => $file,
                    'title' => isset($titleMatch[1]) ? $titleMatch[1] : basename($file),
                    'preview' => isset($descMatch[1]) ? $descMatch[1] : "Preview not available",
                    'date' => filemtime($file)
                );
            }
        }
    }
    
    // Sort by date, newest first
    usort($posts, function($a, $b) {
        return $b['date'] - $a['date'];
    });
    
    return array_slice($posts, 0, 3); // Return only the 3 most recent posts
}
?>