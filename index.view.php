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

    <!-- First Way -->
    <ul>
    <?php foreach ($students as $student) {
        echo "<li>$student</li>";
    }?>
    </ul>

    <!-- Second Way -->
    <ul>
    <?php foreach ($students as $student) : ?>
        <li><?= $student ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>