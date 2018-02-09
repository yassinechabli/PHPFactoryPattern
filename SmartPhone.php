<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 01/02/2018
 * Time: 15:03
 */

include_once 'Phone.php';
class SmartPhone extends Phone
{
     private $os;

    /**
     * SmartPhone constructor.
     */
    public function __construct($mark , $name , $os)
    {
        parent::__construct($mark,$name);
        $this->os=$os;

    }

}