<?php
//require "libs/rb.php";
//R::setup( 'mysql:host=127.0.0.1; port=3307; dbname=lab1','root', 'encrypt1719' ); //for both mysql or mariaDB

 /* $db = mysql_connect("localhost","root","encrypt1719");
 
  mysql_select_db("lab1" ,$db);*/
  /* $mysqli = @new mysqli('localhost', 'root', 'encrypt1719', 'lab1');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }*/
  $dbc=mysqli_connect('localhost','root','encrypt1719','lab1');


?>