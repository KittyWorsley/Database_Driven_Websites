<!<!Doctype html>
<html lang="en"
        <head>
        <meta charset="UTF-8">
        <title> About Us</title>
        <link rel="stylesheet" href="style.css"
    </head>
 <?php include 'header.php'; ?>
    <body>
<main>
    <h1>Contact Us</h1>
    <p>Send Email</p>

    <form name="contactForm" action="contact.php" method="post" onsubmit="return validateForm()">
        
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="email" placeholder="Your Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>

        <button type="submit" name="submit">Send Email</button>
    </form>
</main>
    </body>

<script>
function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;

    if (name === "" || email === "" || message === "") {
        alert("Please fill in all required fields");
        return false;
    }
}
</script>

<?php include 'footer.php';

