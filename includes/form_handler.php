<?php
$message_status = "";

// Handle basic form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    // In a real app, you would send an email or save to DB here.
    $message_status = "<div class='success-msg'>Thanks $name! We will get back to you at $email shortly.</div>";
}
