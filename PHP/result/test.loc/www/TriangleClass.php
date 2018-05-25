<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TriangleClass
 *
 * @author 1068181
 */
include 'AbstractClass.php';
class TriangleClass extends AbstractClass
{
    private $t1x;
    private $t1y;
    private $t2x;
    private $t2y;
    private $t3x;
    private $t3y;
    private $S;
    
    public function GetT($value1, $value2,  $value3,$value4, $value5,  $value6)
    {
        $this->t1x=$value1;
        $this->t1y=$value2;
        $this->t2x=$value3;
        $this->t2y=$value4;
        $this->t3x=$value5;
        $this->t3y=$value6;
        
    }
    public function S()
    {
        $k1=$this->t1x-$this->t3x;
        $k2=$this->t1y-$this->t3y;
        $k3=$this->t2x-$this->t3x;
        $k4=$this->t2y-$this->t3y;
        $m=($k1*$k4)-($k3*$k2);
        $c=0.5*abs($m);
        return $this->S=$c;
    }
}