<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ParallelogrammClass
 *
 * @author 1068181
 */
include 'AbstractClass.php';
class ParallelogramClass extends AbstractClass
{
    private $t1x;
    private $t2x;
    private $t3x;
    private $t1y;
    private $t2y;
    private $t3y;
     private $t1z;
    private $t2z;
    private $t3z;
    private $S;
    public function GetT($value1, $value2,  $value3, $value4, $value5,  $value6, $value7, $value8,  $value9)
    {
        $this->t1x=$value1;
        $this->t1y=$value2;
        $this->t1z=$value3;
        $this->t2x=$value4;
        $this->t2y=$value5;
        $this->t2z=$value6;
        $this->t3x=$value7;
        $this->t3y=$value8;
        $this->t3z=$value9;
        
    }
    public function S()
    {
        $abx=$this->t2x-$this->t1x; //значение х вектора аб
        $aby=$this->t2y-$this->t1y;
        $abz=$this->t2z-$this->t1z;
        $acx=$this->t3x-$this->t1x;
        $acy=$this->t3y-$this->t1y;
        $acz=$this->t3z-$this->t1z;
        $i=($aby*$acz)-($acy*$abz);
        $j=($abx*$acz)-($acx*$abz);
        $k=($abx*$acy)-($acx*$aby);
        $c= sqrt(pow($i, 2)+pow($j, 2)+pow($k, 2));
        return $this->S=$c;
    }
    
}