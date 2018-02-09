<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 01/02/2018
 * Time: 14:51
 */

include_once 'PhoneFactory.php';


$phone1 = PhoneFactory::create("sumsung","sumsung S8");
print_r($phone1);
try{
$phone2 = PhoneFactory::create("iphone");
}catch (InvalidArgumentException $exception){
    echo $exception->getMessage();
}

$smart=PhoneFactory::load('Smart',array('Sumsung', 'S7','android'));
$dump=PhoneFactory::load('Dump',array('nokia', '33','3053'));

print_r($smart);
print_r($dump);

