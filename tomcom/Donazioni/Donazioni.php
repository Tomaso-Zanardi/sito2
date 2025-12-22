<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sostieni la Nostra Ricerca - Donazioni</title>
    <link rel="stylesheet" href="../CSS/global.css">
    <link rel="stylesheet" href="../CSS/donations.css">
    <link rel="icon" type="image/x-icon" href="../favic.png">
</head>
<body>
    <div class="lang-switch">
        <span>🇮🇹</span>
        <label class="switch">
            <input type="checkbox" onchange="window.location.href = this.checked ? '../en/Donazioni/Donazioni.php' : '../Donazioni/Donazioni.php'">
            <span class="slider round"></span>
        </label>
        <span>🇬🇧</span>
    </div>

    <nav class="navbar">
        <div class="navbar-container">
            <img src="../immagini/Ahimsa.png" alt="Navbar Logo" class="navbar-logo">
            <div class="navbar-links">
                <a href="../index.php">Home</a>
                <a href="../CV/about_page.php">Curriculum Vitae</a>
                <a href="../Biblioteca/login.html">Biblioteca</a>
                <a href="../Blog/blog2.php">Blog</a>
                <a href="../contatti/FORMA.php">Contatti</a>
            </div>
        </div>
    </nav>

    <header class="donation-header">
        <h1>Sostieni la Nostra Ricerca</h1>
        <p>Il tuo contributo aiuta la mia ricerca e la mia opera di divulgazione scientifica</p>
    </header>

    <main class="donation-content">
        <div class="donation-container">
            <div class="donation-intro">
                <h2>Fai la Differenza</h2>
                <p>Sostieni i nostri progetti di ricerca. Ogni contributo, indipendentemente dalla dimensione, ha un impatto significativo.</p>
            </div>

            <div class="donation-methods">
                <!-- PayPal Donation -->
                <div class="donation-option">
                    <div class="donation-card paypal-card">
                        <div class="card-header">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" alt="PayPal" class="payment-logo">
                            <h3>Donazione PayPal</h3>
                        </div>
                        <p>Donazione rapida e sicura tramite PayPal</p>
                        <button class="donation-btn paypal-btn" onclick="window.open('https://www.paypal.com/donate/?business=YOUR_PAYPAL_EMAIL&no_recurring=0&currency_code=EUR', '_blank')">
                            Dona con PayPal
                        </button>
                    </div>
                </div>

                <!-- Bank Transfer -->
                <div class="donation-option">
                    <div class="donation-card bank-card">
                        <div class="card-header">
                            <div class="bank-icon">🏦</div>
                            <h3>Bonifico Bancario</h3>
                        </div>
                        <p>Bonifico bancario diretto tramite IBAN</p>
                        <div class="iban-details">
                            <strong>IBAN:</strong>
                            <div class="iban-code" id="ibanCode">DE40 1001 2345 0694 4444 11</div>
                            <button class="copy-btn" onclick="copyIBAN()">Copia IBAN</button>
                        </div>
                        <div class="bank-info">
                            <p><strong>Intestatario:</strong> Nome/Organizzazione</p>
                            <p><strong>Banca:</strong> Nome della Banca</p>
                            <p><strong>Causale:</strong> Donazione Ricerca</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="donation-footer">
                <p>Grazie per aver sostenuto la mia ricerca! La tua generosità mi permette di continuare il mio lavoro.</p>
                <div class="contact-info">
                    <p>Per domande sulle donazioni, <a href="../contatti/FORMA.php">contattaci</a>.</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        function copyIBAN() {
            const ibanCode = document.getElementById('ibanCode').textContent;
            navigator.clipboard.writeText(ibanCode.replace(/\s/g, '')).then(() => {
                const btn = document.querySelector('.copy-btn');
                const originalText = btn.textContent;
                btn.textContent = 'Copiato!';
                btn.style.backgroundColor = '#27ae60';
                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.style.backgroundColor = '';
                }, 2000);
            });
        }
    </script>
</body>
</html>
