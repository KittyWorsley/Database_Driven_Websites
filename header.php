
<?php
if(session_status()=== PHP_SESSION_NONE){
    session_start();
}
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>Teddy Bear Shop</title>
        <link rel="stylesheet" href="style,css.css"
    </head>
    <body>
        <header>
            <h2> Teddy Bear Shop</h2>
             <nav>
        <a href="index.php">Home</a> 
        <a href="about.php">About</a> 
        <a href="products.php">Bears</a> 
        <a href="contact.php">Contact</a> 
        <a href="login.php">Login</a>
    </nav>
        </header>
    </body>
</html>
