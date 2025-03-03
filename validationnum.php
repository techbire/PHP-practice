<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validator</title>
</head>
<body>
    <form action="" method="post">
       Number Batao: <input type="float" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php


        $url = $_POST['number'];
        if (filter_var($url, FILTER_VALIDATE_FLOAT)) {
            echo "This is a valid Number.<br>";
        } else {
            echo "Kuch aur h.<br>";
        }
    ?>
</body>
</html>
