<!<!doctype html>
<html lang="en"
        <head>
        <meta charset="UTF-8">
        <title> About Us</title>
        <link rel="stylesheet" href="style.css"
    </head>
    <body>
<?php include 'header.php';?>
      <title> Teddy Bear Shop</title>  
        <?php
        session_start();
        include 'config.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        $username = $_POST['username'];
        $password = $_POST ['password'];
        $stmt = $conn->prepare("SELECT *FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $username;
        header("Location: add_product.php");
        exit();
        } else {
        $error = "Incorrect password";
        } else {
        $error = "User not found";
        }
        }
        }
        ?>
        <?php include 'includes/header.php'; ?>
        <main>

            <h1> Member Login</h1>
            <?php
            if (isset($error)){
            echo "<p style= color:red;'>$error;</p>";
            }
            ?>

            <form method="POST">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" required><br><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" required><br><br>

                <button type="submit">Login</button>
            </form>
        </main>

        <?php include 'includes/footer.php'; ?>



    </form>



</main>
</body>
</html>
