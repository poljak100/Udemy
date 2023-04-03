<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visibility</title>
</head>

<body>
    <?php
    require_once 'FileReader.php';
    require_once 'CsvFileReader.php';

    $show = new FileReader();
    echo $show->getData() . '<br>';
    echo $show->GetMata() . '<br>';
    echo $show->getLolo() . '<br>';
    echo $show->getNesto() . '<br>';


    ?>

</body>

</html>