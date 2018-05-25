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
       <div class="container2">
           <img src="img/2.png">
           <form action='circlephp.php' method="POST">
            <h2 align="center">Please, enter the data of the circle </h2>
                <div class="s_input">
                    <input type="text" name="t_center" placeholder="Enter the center">
                </div>
                <div class="s_input">
                    <input type="text" name="radius" placeholder="Enter the radius">
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

include 'CircleClass.php';
//$db=new SQLite3("figure.db");
//$db = new SQLiteDatabase('figure.db');
 $db = new PDO('sqlite:figure.db');
            if($db){echo "connected";}
                 if (!$db) {exit("could not create database or open");}
                 
        if (isset($_POST['submit']))
         {
           if(isset($_POST['t_center'])&& isset($_POST['radius']))
           {
                $center=$_POST['t_center'];
                $radius=$_POST['radius'];
                $Circle_Class=new CircleClass();
                $Circle_Class->GetRadius($radius);
                $sS=$Circle_Class->S($radius);
           }
                $db->exec("INSERT INTO S_figure(type, S) VALUES ('Circle', $sS)");  
                $db->exec("INSERT INTO figure(id, type) VALUES ('1','Circle')");
                $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('1', 'Center', $center)");
                $db->exec("INSERT INTO params(id_figure, type, id_value) VALUES ('1', 'Radius', $radius)");
                $db=null;
                exit();  
         }        
?>