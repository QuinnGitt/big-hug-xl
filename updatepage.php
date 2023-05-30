<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<?php
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

$sql = "SELECT `TEXT` FROM `pages` WHERE `ID` = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$text = $stmt->fetchColumn();

// Update the database
if (isset($_POST['submit'])) {
    $updatedText = $_POST['text'];

    $updateSql = "UPDATE `pages` SET `TEXT` = :text WHERE `ID` = 1";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':text', $updatedText);
    $updateStmt->execute();
    echo "updated succesfully";

    // Redirect to the update page again to show the updated text
    header("Refresh:3","Location: updatepage.php");
    exit();
}

// Close the database connection
$conn = null;
?>

<body>
    <h1>Update Page</h1>
    <form method="POST" action="updatepage.php">
        <textarea name="text"><?php echo $text; ?></textarea>
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>