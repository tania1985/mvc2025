<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
    <h1>Actor List</h1>

    <?php
        foreach ($data as $key => $actor) {
            echo $actor->first_name."<br>";
        }
    ?>
</body>
</html>