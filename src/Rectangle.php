<?php
/**
 *  Class:   csci409sp21
 *  User:    mrlink
 *  Date:    2/5/21
 *  Time:    1:34 PM
 */

require_once "Shape.php";

class Rectangle extends Shape {
    const SHAPE_TYPE = 2;

    public function getFullDescription() {
        return "Rectangle<#" . $this->getId() . ">: " . $this->name .  " – " . $this->length . " x " . $this->width;
    }
}