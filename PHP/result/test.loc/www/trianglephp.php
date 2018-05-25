<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/css.css" type="text/css"
    </head>
    <body >
       <div class="container4">
           <img src="img/2.png">
           <form  method="POST">
            <h2 align="center">Please, enter the data of the triangle </h2>
            <div class="s_input">
                <input type="text" name="Ax" placeholder="Enter the point Ax">.
                <input type="text" name="Ay" placeholder="Enter the point Ay">
            </div>
             <div class="s_input">
                <input type="text" name="Bx" placeholder="Enter the point Bx">
                <input type="text" name="By" placeholder="Enter the point By">
            </div>
             <div class="s_input">
                <input type="text" name="Cx" placeholder="Enter the point Cx">
                <input type="text" name="Cy" placeholder="Enter the point Cy">
            </div>           
            <br/>
            <div >
                <input class="s_submit" type="submit" name="submit" value="Enter">
            </div>
            <div >
                <br>
                <a class="s_href" href="/index.php" >Home</a>  <br>
            </div>
            </div>
            
           </form>
       </div>
     
    </body>

</html>

<?php

include 'TriangleClass.php';
//$db=new SQLite3("figure.db");
//$db = new SQLiteDatabase('figure.db');
 $db = new PDO('sqlite:figure.db');
            if($db){echo "connected";}
            if (!$db) {exit("could not create database or open");}
   
       if (isset($_POST['submit']))
         {
           
           //if(isset($_POST['Ax'])&& isset($_POST['Ay'])&& isset($_POST['Bx'])&& isset($_POST['By']) && isset($_POST['Cx'])&& isset($_POST['Cy']))
           {
              
           $Ax=$_POST['Ax'];
           $Ay=$_POST['Ay'];
           $Bx=$_POST['Bx'];
           $By=$_POST['By'];
           $Cx=$_POST['Cx'];
           $Cy=$_POST['Cy'];
           $A=$Ax.";".$Ay;
           $B=$Bx.";".$By;
           $C=$Cx.";".$Cy;
           $Triangle_Class=new TriangleClass();
           $Triangle_Class->GetT($Ax, $Ay, $Bx, $By, $Cx, $Cy);
           
          $sS= $Triangle_Class->S();
          
           
        $db->exec("INSERT INTO S_figure(type, S) VALUES ('Triangle', $sS)");  
        $db->exec("INSERT INTO figure(id, type) VALUES ('3','Triangle')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('3', 'point1', '$A')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('3', 'point2', '$B')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('3', 'point3', '$C')");
	$db=null;
       // exit();
           }
        
         }
        
         ?>
           