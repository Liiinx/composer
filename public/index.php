<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 27/09/18
 * Time: 13:19
 */

require "../vendor/autoload.php";



$helloWorld = new HelloWorld\SayHello();
$a = new App\wcs\hello();
echo $a->talk();
echo $helloWorld->world();

