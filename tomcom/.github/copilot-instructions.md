# Copilot Instructions for tomasozanardi.com

## Project Overview
Personal website for Tomaso Zanardi built with PHP, HTML, CSS, and vanilla JavaScript. No framework or build process - files are served directly. The site is bilingual (English/Italian) with manual language switching.

## Architecture & Structure

### Page Organization
- **Root**: Main entry point at [index.php](../index.php)
- **Sections**: Each major section is a directory (Blog/, CV/, Biblioteca/, Donazioni/, contatti/)
- **Shared resources**: CSS files in `/CSS/`, images in `/immagini/`

### Content Management System (Blog/Podcast)
The site uses a simple file-based CMS:
- Blog posts are static HTML files in `Blog/POSTS/`
- PHP scans directories and extracts metadata from HTML structure:
  - `<title>` for post title
  - First `<p>` tag for excerpt
  - File modification time for date
- Pinned posts: Add `<!-- PINNED -->` comment at the start of HTML file
- Homepage shows latest 3 posts from multiple directories via [content-handler.php](../content-handler.php)

Example post structure:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Your Post Title</title>
</head>
<body>
    <h1>Your Post Title</h1>
    <p>First paragraph becomes excerpt on blog listing page.</p>
    <p>Additional content...</p>
</body>
</html>
```

### Navigation Pattern
All pages use a consistent navbar structure linking to:
- Home (index.php or indexita.html)
- CV (CV/about_page.php)
- Biblioteca (Biblioteca/login.html)
- Blog (Blog/blog2.php)
- Contatti (contatti/FORMA.php)
- Donazioni (Donazioni/Donazioni.php)

Use relative paths (`../`) when linking from subdirectories.

## Styling Conventions

### CSS Organization
- **Per-section stylesheets**: Each section has dedicated CSS (e.g., `about_styles.css`, `bstyle.css`)
- **Global styles**: [CSS/dstyles.css](../CSS/dstyles.css) for main layout, [CSS/styled.css](../CSS/styled.css) for components
- **Primary color palette**: Teal/green (`#155d52`, `#61c4db`), Dark gray (`#2c3e50`, `#34495e`)
- **Typography**: Default to `'Segoe UI', Tahoma, Geneva, Verdana, sans-serif`

### Common UI Patterns
- **Modal system**: `.about-preview` triggers `.about-full` modal (see [scripts.js](../scripts.js))
- **Language switch**: Fixed position toggle at top-right using checkbox input
- **Scroll arrow**: `.scroll-arrow` with `.arrow-down` for homepage navigation

## Forms & Validation

Contact forms ([contatti/FORMA.php](../contatti/FORMA.php)) include:
- **Anti-spam**: Honeypot field (`name="website"`) and math CAPTCHA using PHP sessions
- **Validation**: Server-side email validation with `filter_var(..., FILTER_VALIDATE_EMAIL)`
- **Mail delivery**: Uses PHP's `mail()` function to send to `zanardit@hu-berlin.de`

When creating forms, always implement both honeypot and math CAPTCHA patterns.

## Key Development Practices

### Adding New Blog Posts
1. Create HTML file in `Blog/POSTS/` following the structure above
2. File will be auto-discovered by [blog2.php](../Blog/blog2.php) scandir logic
3. To pin post, add `<!-- PINNED -->` comment at top
4. Images in posts should use relative paths from the POSTS directory

### Creating Bilingual Pages
1. English version in main directory (e.g., `index.php`)
2. Italian version in `ita/` subdirectory with similar naming (e.g., `ita/indexita.html`)
3. Language toggle links to counterpart: `window.location.href = this.checked ? 'ita/indexita.html' : '/'`
4. Adjust asset paths with `../` prefix in Italian versions

### Working with PHP Includes
- Use `require_once` for shared functionality (see [content-handler.php](../content-handler.php))
- PHP sessions for form state management (CAPTCHA, validation)
- No database - all content is file-based

## Special Directories
- **tomstrong/**: Fitness programs section (standalone HTML)
- **galleria_personale/**: Personal photo gallery (lightbox implementation)

## Common Tasks

**Add a blog post:** Create HTML in `Blog/POSTS/` with proper title/paragraph structure  
**Update navbar:** Modify `.navbar-links` in each PHP/HTML file  
**Change color scheme:** Update CSS variables in [CSS/dstyles.css](../CSS/dstyles.css) (search for `#155d52`, `#61c4db`)  
**Add form field:** Include in both HTML and PHP validation logic, maintain tabindex sequence

## Notes
- No build step or package manager - edit files directly
- Test forms locally requires PHP mail configuration
- Image assets can be large - use `immagini/` directory consistently
- The site structure allows for future sections (Podcast, Projectorioum) with same CMS pattern
