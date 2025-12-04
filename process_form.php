<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Form Submission Result</h1>
    </header>
    
    <main>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name'] ?? 'Anonymous');
            $email = htmlspecialchars($_POST['email'] ?? 'No email provided');
            $message = htmlspecialchars($_POST['message'] ?? 'No message');
            
            echo "<h2>Thank you for your submission, $name!</h2>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Your Message:</strong> $message</p>";
            echo "<p><strong>Submitted at:</strong> " . date('Y-m-d H:i:s') . "</p>";
            
            echo "<p><em>Note: In a real application, this would be saved to a database.</em></p>";
        } else {
            echo "<p>No form submission detected. Please go back to the form.</p>";
        }
        ?>
        
        <p><a href="index.php">← Back to Form</a></p>
    </main>
    
    <footer>
        <small>&copy; 2025 PHP Demo Site</small>
    </footer>
</body>
</html>
