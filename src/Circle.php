<?php
/**
 *  Class:   csci409sp21
 *  User:    mrlink
 *  Date:    2/5/21
 *  Time:    1:46 PM
 */
require_once "Shape.php";

class Circle extends Shape {

    const SHAPE_TYPE = 3;

    protected $radius;

    function __construct($radius) {
        $this->radius = $radius;
        parent::__construct(0, 0);
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function getFullDescription() {
        return "Circle<#" . $this->getId() . ">: " . $this->name .  " – " . $this->radius;
    }

}