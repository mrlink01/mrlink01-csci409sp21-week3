<?php
/**
 *  Class:   csci409sp21
 *  User:    mrlink
 *  Date:    2/5/21
 *  Time:    1:53 PM
 */
require_once "Shape.php";

class Octagon extends Shape {
    const SHAPE_TYPE = 4;

    protected $side;

    function __construct($side) {
        $this->side = $side;
        parent::__construct(0,0);
    }

    function area() {
        $tmp = 1 + sqrt(2);
        return 2 * $tmp * pow($this->side, 2);
    }

    public function getFullDescription() {
        return "Octagon<#" . $this->getId() . ">: " . $this->name .  " – " . $this->side;
    }
}