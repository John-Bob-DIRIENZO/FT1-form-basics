<?php

$user = $_POST['username'] ?? null;
$pwd = $_POST['password'] ?? null;

$gender = match ($_POST['gender']) {
    "F" => "femme",
    "H" => "homme",
    default => "genre non indiqué",
};

$transport = $_POST['transport'] ?? [];
$animal = $_POST['animal'] ?? null;

$acceptedCred = [
    [
        'username' => "admin",
        "password" => "admin",
    ],
    [
        'username' => "francis",
        "password" => "password",
    ],
];

$match = array_filter($acceptedCred, function ($credPair) use ($user, $pwd) {
    return ($credPair['username'] === $user && $credPair['password'] === $pwd);
});

if ($match) :
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>Salut <?= $user; ?>, il semble que tu sois un(e) <?= $gender; ?></h1>
    <p>Tu me dis aussi te déplacer avec :</p>
    <ul>
        <?php
        foreach ($transport as $trans) {
            echo "<li>$trans</li>";
        }
        ?>
    </ul>

    <p>Et que ton annimal préféré soit le <span><?= $animal; ?></span></p>

    <a href="/">Recommencer</a>

    </body>
    </html>


<?php
else :
    include_once "go-away.php";
endif;
