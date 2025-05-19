<?php
include 'db.php';
$sql = "SELECT * FROM Items";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Catalogue - Grocery Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Product Catalogue</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="catalogue.php">Catalogue</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </nav>
    </header>
    <main>
        <div class="catalogue">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="item">
                    <img src="assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <span>₹<?php echo $row['price']; ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>
