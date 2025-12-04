<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>PHP Demo Site - InfinityFree</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        <h1>Welcome to Our PHP Demo Site</h1>
    </header>

    <main>
        <p>Current server time: <?php echo date('Y-m-d H:i:s'); ?></p>
        <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
        
        <h2>Contact Form</h2>
        <form action="process_form.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your message here..." rows="4" required></textarea>
            </div>
            <button type="submit">Submit Form</button>
        </form>
        
        <div id="response"></div>
    </main>

    <footer>
        <small>&copy; 2025 PHP Demo Site - Hosted on InfinityFree</small>
        <p>FTP Deployment Test</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
