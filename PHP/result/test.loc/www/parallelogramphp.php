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
       <div class="container3">
           <img src="img/2.png">
           <form method="POST">
                <h2 align="center">Please, enter the data of the parallelogram </h2>
                    <div class="s_input">
                        <input type="text" name="Ax" placeholder="Enter the point Ax">
                        <input type="text" name="Ay" placeholder="Enter the point Ay">
                        <input type="text" name="Az" placeholder="Enter the point Az">
                    </div>
                    <div class="s_input">
                        <input type="text" name="Bx" placeholder="Enter the point Bx">
                        <input type="text" name="By" placeholder="Enter the point By">
                        <input type="text" name="Bz" placeholder="Enter the point Bz">
                   </div>
                    <div class="s_input">
                        <input type="text" name="Cx" placeholder="Enter the point Cx">
                        <input type="text" name="Cy" placeholder="Enter the point Cy">
                        <input type="text" name="Cz" placeholder="Enter the point Cz">
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
include 'ParallelogrammClass.php';
//$db=new SQLite3("figure.db");
//$db = new SQLiteDatabase('figure.db');
 $db = new PDO('sqlite:figure.db');
            if($db){echo "connected";}
            if (!$db) {exit("could not create database or open");}

        if (isset($_POST['submit']))
         {
           if(isset($_POST['Ax'])&& isset($_POST['Ay'])&& isset($_POST['Az'])&& isset($_POST['Bx'])&& isset($_POST['By'])&& isset($_POST['Bz'])&& isset($_POST['Cx'])&& isset($_POST['Cy'])&& isset($_POST['Cz']))
           {
                $Ax=$_POST['Ax'];
                $Ay=$_POST['Ay'];
                $Az=$_POST['Az'];
                $Bx=$_POST['Bx'];
                $By=$_POST['By'];
                $Bz=$_POST['Bz'];
                $Cx=$_POST['Cx'];
                $Cy=$_POST['Cy'];
                $Cz=$_POST['Cz'];
                $A=$Ax.";".$Ay.";".$Az;
                $B=$Bx.";".$By.";".$Bz;
                $C=$Cx.";".$Cy.";".$Cz;
                $Parallelogram_Class=new ParallelogramClass();
                $Parallelogram_Class->GetT($Ax, $Ay, $Az, $Bx, $By, $Bz, $Cx, $Cy, $Cz);

                $sS= $Parallelogram_Class->S();
           }
        $db->exec("INSERT INTO S_figure(type, S) VALUES ('Parallelogram', $sS)");  
        $db->exec("INSERT INTO figure(id, type) VALUES ('2','Parallelogramm')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('2', 'point1', '$A')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('2', 'point2', '$B')");
        $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('2', 'point3', '$C')");
	$db=null;
        exit();
         }
         ?>
           
      
     
       
        
        