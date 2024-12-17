<!-- File: process.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Submitted Successfully!</h2>
        <h3>Your Details:</h3>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $gender = htmlspecialchars($_POST['gender']);
                $comments = htmlspecialchars($_POST['comments']);

                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Phone:</strong> $phone</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "<p><strong>Comments:</strong> $comments</p>";
            } else {
                echo "<p>Error processing form.</p>";
            }
        ?>
        <a href="index.php" style="display: inline-block; margin-top: 20px;">Go Back</a>
    </div>
</body>
</html>