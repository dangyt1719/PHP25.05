<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CircleClass
 *
 * @author 1068181
 */
include 'AbstractClass.php';
class CircleClass extends AbstractClass
{
    private $center;
    private $radius;
    private $S;
    
    public function GetCenter($value)
    {
        $this->center=$value;
    }
     public function GetRadius($value)
    {
        $this->radius=$value;
        
    }
    
    public function S()
    {
        return $this->S=(3.14*pow($this->radius, 2));
    }
    
}