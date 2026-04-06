<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php include 'includes/header.php'; ?>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Contact Us</title>
    </head>
    <body>
        <main>
            <<h1>Contact us</h1>  
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                if (!empty($name) && !empty($email) && !empty($message)) {
                    echo '<p> Thank you,$name. Your message has been sent</p>';
                } else {
                    echo '<P> Plesde complete all fields.</p>';
                }
                ?>

            <form method ='POST'>
                <label for='name'>Name:</label><br
                    input type='text' name='name' id='name' required><br><br>

                <label for='email'>Email:</label><br>
                <input type='email' name='email' id='email' required><br><br>

                <label for='message'>Message:</label><br>
                <textarea name='message' id='message' required><br><br>

                <button type='submit'> Send Message</button>
            </form>
        </main>
</html>
