<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/homepage.css">
    <title>Home</title>
</head>
<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bighug";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch the text from the database
$sql = "SELECT `TEXT` FROM `pages` WHERE `ID` = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$text = $stmt->fetchColumn();

// Close the database connection
$conn = null;
?>

<body>
    <?php include "header.php" ?>
    <div class="home_banner">
        <img class="home_banner" src="img/home_banner.jpg" alt="">
        <h1><strong>Welkom</strong></h1>
    </div>

    <div class="home_divider">
        <p>Homepage</p>
    </div>

    <div class="home-tekst">
        <h1>Wat is de Big Hug?</h1>
        <p>
            <?php echo $text;
            ?>
        </p>

    </div>
    <?php include "footer.php" ?>
</body>

</html>