<!<!octype html>
<html lang="en"
      <head>
        <meta charset="UTF-8">
        <title> About Us</title>
        <link rel="stylesheet" href="style.css.css"
    </head>

    <<body>
        <?php include 'header.php'; ?>
        <<main>
            <<h2>Our Teddy Bears</h2>
            <<p>Explore our collection of soft and cuddly teddy bears</p>
            <?php
            $conn = new mysqli("localhost", "root", "", "teddybearshop");
            if ($conn->connect_error) {
                die("Connection failed:" . $conn->connect_error);
            }
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "div class = 'card>";
                    echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                    echo "<p>Price:£" . htmlspecialchars($row['price']) . "</p>";
                    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<P> No teddy bears found.</p>";
            }
            $conn->close();
            ?>

            <<h3>Our classic brown teddy bear</h3>
            <P>Price:£12.00</P>
            <p>A classical teddy bear that loves cuddles</p>

            <<h3>Giant Elephant teddy bear</h3>
            <p>Price:£25.00</p>
            <p>A big fluffy teddy bear perfect for hugs!</p>

            <<h3>Mini pocket teddy bear</h3>
            <p>Price:£8.00</p>
            <p>A teddy bear you can take on your adventures</p>

            <<h3>Marry me teddy bear</h3>
            <p>Price:£10.00</p>
            <p>A soft cuddly teddy bear full of love!</p>
        </main>
    <body/>
</html>

<?php
include 'footer.php';
