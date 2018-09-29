<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 27/09/18
 * Time: 13:19
 */



require '../src/wcs/hello.php';



$bonjour = new Hello();
$helloWorld = new \HelloWorld\SayHello();

var_dump($bonjour);
var_dump($helloWorld);