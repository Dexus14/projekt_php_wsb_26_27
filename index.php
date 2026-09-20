<?php

require_once 'Classes/Student.php';
require_once 'Classes/Teacher.php';

$student1 = new Student('Jan', 18, 'ZSK');
$student2 = new Student('Anna', 16, 'ZSŁ');
$teacher = new Teacher('Piotr', 35, 'ZSK', 'Programowanie');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - OOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Uczniowie</h1>
    <h2>Informacje o użytkownikach</h2>

    <?php
    echo $student1->getInfo() . '<br>';
    echo $student2->getInfo() . '<br>';
    ?>

    <h2>Informacje HTML - HEREDOC</h2>

    <?php
    echo $student1->getHtml();
    echo $student2->getHtml();
    ?>

    <h1>Nauczyciel</h1>
    <?php
    echo $teacher->getInfo() . '<br>';
    ?>

    <h2>Informacje nauczyciel HTML - HEREDOC</h2>

    <?php
    echo $teacher->getHtml();
    ?>
</body>
</html>
