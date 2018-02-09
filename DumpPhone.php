<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 01/02/2018
 * Time: 15:09
 */

include_once 'Phone.php';

class DumpPhone extends  Phone
{

    private $serie ;

    public function __construct($mark , $name , $serie)
    {

        parent::__construct($mark , $name);
        $this->serie = $serie;
    }

    /**
     * @return mixed
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param mixed $serie
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
    }



}