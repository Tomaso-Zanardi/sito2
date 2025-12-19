<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Our Research - Donation</title>
    <link rel="stylesheet" href="donation_styles.css">
    <link rel="icon" type="image/x-icon" href="../favic.png">
</head>
<body>
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
        <h1>Support Our Research</h1>
        <p>Your contribution helps advance scientific discovery and innovation</p>
    </header>

    <main class="donation-content">
        <div class="donation-container">
            <div class="donation-intro">
                <h2>Make a Difference</h2>
                <p>Support our ongoing research projects and help us continue pushing the boundaries of scientific knowledge. Every contribution, no matter the size, makes a meaningful impact.</p>
            </div>

            <div class="donation-methods">
                <!-- PayPal Donation -->
                <div class="donation-option">
                    <div class="donation-card paypal-card">
                        <div class="card-header">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" alt="PayPal" class="payment-logo">
                            <h3>PayPal Donation</h3>
                        </div>
                        <p>Quick and secure donation via PayPal</p>
                        <button class="donation-btn paypal-btn" onclick="window.open('https://www.paypal.com/donate/?business=YOUR_PAYPAL_EMAIL&no_recurring=0&currency_code=EUR', '_blank')">
                            Donate with PayPal
                        </button>
                    </div>
                </div>

                <!-- Bank Transfer -->
                <div class="donation-option">
                    <div class="donation-card bank-card">
                        <div class="card-header">
                            <div class="bank-icon">🏦</div>
                            <h3>Bank Transfer</h3>
                        </div>
                        <p>Direct bank transfer via IBAN</p>
                        <div class="iban-details">
                            <strong>IBAN:</strong>
                            <div class="iban-code" id="ibanCode">IT00 X000 0000 0000 0000 0000 000</div>
                            <button class="copy-btn" onclick="copyIBAN()">Copy IBAN</button>
                        </div>
                        <div class="bank-info">
                            <p><strong>Account Holder:</strong> Your Name/Organization</p>
                            <p><strong>Bank:</strong> Your Bank Name</p>
                            <p><strong>Reference:</strong> Research Donation</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="donation-footer">
                <p>Thank you for supporting scientific research! Your generosity enables us to continue our important work.</p>
                <div class="contact-info">
                    <p>For questions about donations, please <a href="../contatti/FORMA.php">contact us</a>.</p>
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
                btn.textContent = 'Copied!';
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
