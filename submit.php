<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data (sanitize and handle it)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Example success processing - This is where you would save the data in a database
    // For now, just redirect with success=true
    header('Location: index.html?success=true');
    exit(); // Make sure to stop further execution
}
?>
