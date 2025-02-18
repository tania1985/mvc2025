<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Actores</title>
</head>
<body>
    <h1>Lista de Actores</h1>
    
    <ul>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $actor): ?>
                <li><?php echo htmlspecialchars($actor->first_name . " " . $actor->last_name); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay actores registrados.</li>
        <?php endif; ?>
    </ul>

    <a href="/actor/new">Agregar nuevo actor</a>
</body>
</html>
