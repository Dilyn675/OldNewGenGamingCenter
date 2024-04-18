<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consoles - OldNewGen Gaming Center</title>
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
        <section class="consoles">
            <h2>Consoles</h2>
            <?php
            // Include database connection file
            include_once 'db_connection.php';

            // Fetch consoles from the database
            $query = "SELECT * FROM consoles";
            $result = mysqli_query($conn, $query);

            // Display consoles
            if (mysqli_num_rows($result) > 0) {
                echo '<ul>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li>';
                    echo '<h3>' . $row['ConsoleName'] . '</h3>';
                    echo '<p>Age: ' . $row['ConsoleAge'] . '</p>';
                    echo '<p>Price: $' . $row['ConsolePrice'] . '</p>';
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo 'No consoles available';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 OldNewGen Gaming Center</p>
    </footer>
</body>
</html>