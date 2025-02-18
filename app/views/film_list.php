<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Películas</title>
</head>
<body>
    <h1>Lista de Películas</h1>

    <ul>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $film): ?>
                <li><?php echo htmlspecialchars($film->title . " (" . $film->release_year . ")"); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay películas registradas.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
