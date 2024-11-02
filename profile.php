<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>About</h1>";
    if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["date"]) && isset($_GET["tel"])) {
        echo "<p>Hello, " . htmlspecialchars($_GET["name"]) . " (" . htmlspecialchars($_GET["email"]) . ")!</p>";
        echo "<p>You were born on " . htmlspecialchars($_GET["date"]) . "</p>";
        echo "<p>Your phone: " . htmlspecialchars($_GET["tel"]) . "</p>";
        echo "<p>Your password: " . htmlspecialchars($_GET["pass"]) . "</p>";
    }
    else  {
        echo "<p>Hello, " . htmlspecialchars($_POST["name"]) . " (" . htmlspecialchars($_POST["email"]) . ")!</p>";
        echo "<p>You were born on " . htmlspecialchars($_POST["date"]) . "</p>";
        echo "<p>Your phone: " . htmlspecialchars($_POST["tel"]) . "</p>";
        echo "<p>Your password: " . htmlspecialchars($_POST["pass"]) . "</p>";
    }
    ?>
</body>
</html>