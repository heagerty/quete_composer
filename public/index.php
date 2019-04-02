<?php






require_once('../vendor/autoload.php');




$talk = new App\Wcs\Hello();
echo $talk->talk();



$hello = new HelloWorld\SayHello();
echo $hello->world();

