<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OldNewGen Gaming Center</title>
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
        <section class="login">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 OldNewGen Gaming Center</p>
    </footer>
</body>
</html>