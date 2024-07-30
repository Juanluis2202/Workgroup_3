<?php
session_start(); // Inizia la sessione
ob_start(); // Inizia il buffering di output

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['patient_name'] = $_POST['patient_name'];
    $_SESSION['doctor_name'] = $_POST['doctor_name'];
    $_SESSION['department_name'] = $_POST['department_name'];
    $_SESSION['phone_number'] = $_POST['phone_number'];
    $_SESSION['symptoms'] = $_POST['symptoms'];
    $_SESSION['appointment_date'] = $_POST['appointment_date'];


    $_SESSION['confirmation_message'] = "Grazie, " . $_SESSION['patient_name'] . ", Abbiamo ricevuto il tuo appuntamento.";

    header("Location: thank_you.php");
    exit;
}

ob_end_flush(); 
?>
