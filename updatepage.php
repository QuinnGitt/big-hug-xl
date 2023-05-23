<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
    <h1>Update Page</h1>

    <form method="POST" action="/pdo/pdo.php">
        <label for="page_ID">Select a page:</label>
        <select name="page_ID" id="page_ID">
            <?php foreach ($pages as $page) { ?>
                <option value="<?php echo $page['ID']; ?>"><?php echo $page['ID']; ?></option>
            <?php } ?>
        </select>

        <br><br>

        <label for="new_text">New text:</label>
        <textarea name="new_text" id="new_text" rows="5" cols="40"></textarea>

        <br><br>

        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>