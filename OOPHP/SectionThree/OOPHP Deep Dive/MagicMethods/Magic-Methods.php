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
    require_once 'Connection.php';
    $connection1 = new Connection();

    ?>

    <p><?php echo 'Im connection to: ' . $connection1->getCount() ?></p>
</body>

</html>