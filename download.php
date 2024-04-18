<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - OldNewGen Gaming Center</title>
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
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>
    <main>
        <section class="download">
            <h2>Download Your Game</h2>
            <p>Click the button below to download your purchased game:</p>
            <a href="download_process.php?game_id=<?php echo $_GET['game_id']; ?>" class="download-button">Download</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 OldNewGen Gaming Center</p>
    </footer>
</body>
</html>