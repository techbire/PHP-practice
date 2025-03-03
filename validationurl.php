<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validator</title>
</head>
<body>
    <form action="" method="post">
        Website Batao: <input type="url" name="url" required>
        <button type="submit">Check</button>
    </form>

    <?php


        $url = $_POST['url'];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo "This is a valid URL.<br>";
        } else {
            echo "Kuch aur h.<br>";
        }
    ?>
</body>
</html>
