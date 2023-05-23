<?php
$host = 'localhost';
$dbname = 'bighug';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}

if (isset($_POST['submit'])) {
    $pageId = $_POST['page_ID'];
    $newText = $_POST['new_TEXT'];

    try {
        $stmt = $pdo->prepare("UPDATE pages SET TEXT = :TEXT WHERE ID = :ID");
        $stmt->bindValue(':TEXT', $newText);
        $stmt->bindValue(':ID', $pageId);
        $stmt->execute();

        echo "Text updated successfully.";
    } catch (PDOException $e) {
        echo "Error updating text: " . $e->getMessage();
    }
}

try {
    $stmt = $pdo->query("SELECT ID, text FROM pages");
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error retrieving pages: " . $e->getMessage());
}

include '../updatepage.php';

?>