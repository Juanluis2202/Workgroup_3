<?php
session_start(); // Avvia la sessione

include 'functions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php printHeader();  ?>
    <?php render_header()?>
</head>
<body class="sub_page">
    <!-- Contenuto della pagina -->
    <?php
    // Mostra i dati inviati in una nuova pagina
    echo "<h1>L'iscrizione alla nostra newsletter è avvenuta con successo.</h1>";

    if (isset($_SESSION['confirmation_message'])) {
        echo "<p>" . $_SESSION['confirmation_message'] . "</p>";
        unset($_SESSION['confirmation_message']); 
    }

    echo "<p>Full Name: " . (isset($_SESSION['full_name']) ? $_SESSION['full_name'] : '') . "</p>";
    echo "<p>Email: " . (isset($_SESSION['email']) ? $_SESSION['email'] : '') . "</p>";
    echo "<p>Phone Number: " . (isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : '') . "</p>";
    echo "<p>Message: " . (isset($_SESSION['message']) ? $_SESSION['message'] : '') . "</p>";
    ?>
    
    <?php printFooterAndScripts()?>
    
</body>
</html>
