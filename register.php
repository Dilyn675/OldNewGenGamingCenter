<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - OldNewGen Gaming Center</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>OldNewGen Gaming Center</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="games.php">Games</a></li>
            <li><a href="consoles.php">Consoles</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
    <main>
        <section class="register">
            <h2>Register</h2>
            <form action="register_process.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                <button type="submit">Register</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 OldNewGen Gaming Center</p>
    </footer>
</body>
</html>