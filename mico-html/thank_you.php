<?php
session_start(); 
include 'functions.php'; 

render_header(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Appuntamento</title>
</head>
<body class="sub_page">
    <?php printHeader(); ?>
 
    <h1>Conferma dell'appuntamento</h1>
    <?php
    if (isset($_SESSION['confirmation_message'])) {
        echo "<p>" . htmlspecialchars($_SESSION['confirmation_message']) . "</p>";
        unset($_SESSION['confirmation_message']); 
    }
    echo "<p>Doctor: " . htmlspecialchars(isset($_SESSION['doctor_name']) ? $_SESSION['doctor_name'] : '') . "</p>";
    echo "<p>Department: " . htmlspecialchars(isset($_SESSION['department_name']) ? $_SESSION['department_name'] : '') . "</p>";
    echo "<p>Phone Number: " . htmlspecialchars(isset($_SESSION['phone_number']) ? $_SESSION['phone_number'] : '') . "</p>";
    echo "<p>Symptoms: " . htmlspecialchars(isset($_SESSION['symptoms']) ? $_SESSION['symptoms'] : '') . "</p>";
    echo "<p>Appointment Date: " . htmlspecialchars(isset($_SESSION['appointment_date']) ? $_SESSION['appointment_date'] : '') . "</p>";
    ?>
    
    <footer>
    <?php printFooterAndScripts()?>
    </footer>
</body>
</html>
