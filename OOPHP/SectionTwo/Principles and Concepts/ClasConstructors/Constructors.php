<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require_once 'Comment.php';

    $comment = new Comment('Moje je ime Dino, ', 29, 'i dolazim iz Hrvatske');

    ?>

    <?php echo $comment->name ?> Imam <?php echo $comment->age ?> godina ,<?php echo $comment->country ?>


</body>

</html>