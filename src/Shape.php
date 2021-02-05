<?php
/**
 *  Class:   csci409sp21
 *  User:    mrlink
 *  Date:    2/5/21
 *  Time:    1:19 PM
 */

class Shape {
    const SHAPE_TYPE = 1;

    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid();
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public static function getTypeDescription() {
        return "Type: " + static::SHAPE_TYPE;
    }

    public function getFullDescription() {
        return "Shape<#" + $this->id + ">: " + $this->name +  " – " + $this->length + " x " + $this->width;
    }



}