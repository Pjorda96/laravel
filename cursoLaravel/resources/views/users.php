<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Listado de usuarios - Pablo</title>
</head>
<body>
    <h1>Usuarios</h1>

    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>