<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Faker</title>
</head>
<body>
    <div style="display: flex;">
        <div>
            <img src="<?= $faker->imageUrl(120, 180); ?>" alt="Ieva"/>
        </div>
    <div>
        <ul style="list-style-type: none;font-size: 20px;align-content: flex-start">
            <li><?= $faker->firstName(); ?></li>
            <li><?= $faker->lastName(); ?></li>
            <li><?= $faker->randomNumber(2); ?></li>
            <li><?= $faker->email(); ?></li>
            <li><?= $faker->phoneNumber(); ?></li>
            <li><?= $faker->address(); ?></li>
        </ul>
    </div>
    </div>
</body>
</html>

