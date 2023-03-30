

    <?php

    use user as GlobalUser;

    class user
    {
        //create properties

        public $name;
        public $username;
        public $followerCount;
        public $country;
    }

    $DinoObject = new user();

    $DinoObject->name = 'Dino';
    $DinoObject->username = 'Po';
    $DinoObject->followerCount = '200000';
    $DinoObject->country = 'CRO';


    echo '<pre/>';

    print_r($DinoObject);


    $KataObject = new user();
    $KataObject->name = 'Katarina';
    $KataObject->username = 'kata123';
    $KataObject->followerCount = '10000';
    $KataObject->country = 'CRO';
    echo '<pre/>';

    print_r($KataObject);

    $denis = new user();
    $denis->name = 'Denis';
    $denis->username = 'DEKA';
    $denis->followerCount = '8929';
    $denis->country = 'CRO';

    echo '<pre/>';
    print_r($denis);

    class Dino
    {
        public $name;
        public $username;
        public $country;
    }

    $Dinonesto = new Dino();
    $Dinonesto->name = 'Dino';
    $Dinonesto->username = 'Poljak';
    $Dinonesto->country = 'Croatia';

    echo '<pre/>';

    print_r($Dinonesto);



    ?>
