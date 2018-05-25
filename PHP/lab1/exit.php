

<?php
require "db.php";
unset($_COOKIE['id_user']);
unset($_COOKIE['login']);
unset($_COOKIE['password']);
unset($_COOKIE['role']);
setcookie('id_user', '', -1, '/');
setcookie('login', '', -1, '/');
setcookie('password', '', -1, '/');
setcookie('role', '', -1, '/');
header('Location: /');
?>