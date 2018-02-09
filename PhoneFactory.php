<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 01/02/2018
 * Time: 14:49
 */
include_once 'Phone.php';

class PhoneFactory
{

    public static function create($mark = null, $name = null)
    {
        if (!empty($mark) && !empty($name)) {
            return new Phone($mark, $name);
        } else {
            throw  new InvalidArgumentException("les arguments ne sont pas corrects");
        }

    }

    public static function load($name ,$params)
    {
        $classePath = $name . "Phone.php";
        $classeName = $name . 'Phone';
        if (file_exists($classePath)) {
            require $classePath;
            return new  $classeName($params[0],$params[1],$params[2]);
        }
        else{
            throw new Exception("class not found");
        }
    }

}