<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?= "Hello " . $name ?>
    </h1>
    <!-- http://localhost:8000/?name=RarZar -->

    <ul>
    <?php foreach ($students as $student) {
        echo "<li>$student</li>";
    }?>
    </ul>

    <?php foreach ($works as $key => $value) : ?>
        <li><?= $key . "-" . $value ?></li>
    <?php endforeach ?>

    <ul>
        <li><?= $works['title'] ?></li>
        <li><?= $works['time'] ?></li>
        <li><?= $works['complete'] ? 'complete' : 'incomplete' ?></li>
    </ul>
</body>
</html>