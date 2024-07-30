<?php
session_start(); // Inizia la sessione
ob_start(); // Inizia il buffering di output

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['full_name'] = $_POST['full_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone_number'] = $_POST['phone_number'];
    $_SESSION['message'] = $_POST['message'];


    $_SESSION['confirmation_message'] = "Grazie, " . $_SESSION['full_name'] . ", verifica i dati inseriti.";


    header("Location: newsletter.php");
    exit;
}

ob_end_flush(); 
?>
