<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>


    <?php

    require_once 'PremiumCheckingAccount.php';


    $PremiumCheckingAccount = new PremiumCheckingAccount();

    echo $PremiumCheckingAccount->minimumbalance . '<br>';

    $PremiumCheckingAccount->deposit(20);
    $PremiumCheckingAccount->withdraw(10);
    $PremiumCheckingAccount->Transfer(700);


    ?>
</body>

</html>