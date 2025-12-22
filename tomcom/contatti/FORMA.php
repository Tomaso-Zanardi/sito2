<?php
session_start();

// Generate random numbers for math captcha
function generateMathCaptcha() {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $_SESSION['math_captcha_result'] = $num1 + $num2;
    return array($num1, $num2);
}

// Only generate new captcha if not submitted
if (!isset($_POST['submit'])) {
    list($num1, $num2) = generateMathCaptcha();
} else {
    $num1 = $_SESSION['math_captcha_num1'] ?? 0;
    $num2 = $_SESSION['math_captcha_num2'] ?? 0;
}

$_SESSION['math_captcha_num1'] = $num1;
$_SESSION['math_captcha_num2'] = $num2;

$message_sent = false;
$error_message = "";

if(isset($_POST['submit'])) {
    // Check if the honeypot field is empty (should be empty for real users)
    if(empty($_POST['website'])) {
        // Verify math captcha
        $user_answer = isset($_POST['math_answer']) ? intval($_POST['math_answer']) : 0;
        $correct_answer = isset($_SESSION['math_captcha_result']) ? $_SESSION['math_captcha_result'] : 0;

        if($user_answer === $correct_answer) {
            // Form validations
            if(isset($_POST['email']) && $_POST['email'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                // Submit the form
                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $messageSubject = $_POST['subject'];
                $message = $_POST['message'];

                $to = "zanardit@hu-berlin.de";
                $body = "";

                $body .= "Da: ".$userName. "\r\n";
                $body .= "Email: ".$userEmail. "\r\n";
                $body .= "Oggetto: ".$messageSubject. "\r\n";
                $body .= "Messaggio: ".$message. "\r\n";

                mail($to, $messageSubject, $body);
                $message_sent = true;
                
                // Generate new captcha after successful submission
                list($num1, $num2) = generateMathCaptcha();
                $_SESSION['math_captcha_num1'] = $num1;
                $_SESSION['math_captcha_num2'] = $num2;
            } else {
                $error_message = "Si prega di inserire un indirizzo email valido.";
            }
        } else {
            $error_message = "La risposta al problema matematico non è corretta. Riprova.";
        }
    } else {
        // Honeypot was filled - likely a bot
        // We'll show success but not actually send the email
        $message_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
    <link rel="icon" type="image/x-icon" href="../immagini/favic.png">
    <link rel="stylesheet" href="../CSS/global.css" media="all">
    <link rel="stylesheet" href="../CSS/2.css" media="all">
    <style>
        body {
            display: block !important;
            height: auto !important;
            min-height: 100vh;
            margin: 0 !important;
            padding: 0 !important;
        }
        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 80px);
            background: linear-gradient(to right, #f7ae6b, #61c4db);
            padding: 2rem 0;
        }
    </style>
</head>
<body>
    <div class="lang-switch">
        <span>�🇹</span>
        <label class="switch">
            <input type="checkbox" onchange="window.location.href = this.checked ? '../en/contatti/FORMA.php' : '../contatti/FORMA.php'">
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
                <a href="../Donazioni/Donazioni.php">Donazioni</a>
            </div>
        </div>
    </nav>
    
    <div class="form-wrapper">
        <div class="container">
        <?php if($message_sent): ?>
            <div class="success-message">
                <p>Grazie! Il tuo messaggio è stato inviato con successo.</p>
            </div>
        <?php endif; ?>
        
        <?php if($error_message): ?>
            <div class="error-message">
                <p><?php echo $error_message; ?></p>
            </div>
        <?php endif; ?>
        
        <?php if(!$message_sent): ?>
            <form action="FORMA.php" method="POST" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Nome</label>
                    <input style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" type="text" class="form-control" id="name" name="name" placeholder="Nome" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Indirizzo Email</label>
                    <input style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" type="email" class="form-control" id="email" name="email" placeholder="la_tua_mail@blablabla.it" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Oggetto</label>
                    <input style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" type="text" class="form-control" id="subject" name="subject" placeholder="Ciao Tomaso,..." tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Messaggio</label>
                    <textarea style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Scivi qui il tuo messaggio..." tabindex="4" required></textarea>
                </div>
                
                <!-- Honeypot field - invisible to humans but bots will fill it -->
                <div class="form-group honeypot">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website" autocomplete="off">
                </div>
                
                <!-- Math captcha -->
                <div class="form-group captcha-section">
                    <!-- Use a paragraph instead of label to avoid the form-label class styles -->
                    <p class="captcha-question">Verifica di sicurezza: Quanto fa <strong><?php echo $num1; ?> + <?php echo $num2; ?></strong>?</p>
                    <input style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" type="number" class="form-control" id="math_answer" name="math_answer" placeholder="Inserisci la risposta" tabindex="5" required>
                </div>
                
                <div>
                    <button type="submit" name="submit" class="btn" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Invia il messaggio!</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
    </div>
</body>
</html>