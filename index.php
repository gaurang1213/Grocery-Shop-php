<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Shop - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Online Grocery Shop</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="catalogue.php">Catalogue</a>
            <?php if(isset($_SESSION['user'])): ?>
                <span>Hello, <?php echo $_SESSION['user']; ?></span>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <h2>Fresh groceries delivered to your door!</h2>
        <p>Browse our catalogue and shop the best products.</p>
        <img src="assets/images/grocery.jpg" alt="Groceries" style="width:100%;max-width:400px;">
    </main>
</body>
</html>
