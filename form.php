<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Die Benutzereingabe aus dem Formular wird in der Variable $eingabe gespeichert
    $eingabe = $_POST["eingabe"];

    // Jetzt können Sie die Variable $eingabe in Ihrem PHP-Code verwenden
    echo "Ihre Eingabe: " . $eingabe;
}
?>
