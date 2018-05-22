<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Listado de usuarios - Pablo</title>
</head>
<body>
    <h1><?= e($title) ?></h1>

    <ul>
        <?php foreach ($users as $user): ?>
        <!--para escapar el codigo html-->
            <li><?= e($user) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>