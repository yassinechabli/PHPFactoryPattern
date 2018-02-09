<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 01/02/2018
 * Time: 14:47
 */

class Phone
{

    private $mark ;
    private $name ;

    /**
     * Phone constructor.
     * @param $mark
     * @param $name
     */
    public function __construct($mark, $name)
    {
        $this->mark = $mark;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * @param mixed $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}