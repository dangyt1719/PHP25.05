<head>

		<?php
		require "db.php";
		?>
		
		
	<style type="text/css" media="all">
			<?php include "style/style.css" ?>
	
	</style>
		
</head>

<body id = "telo4">
</body>

<?php
require "db.php";
$data=$_POST;
$cook=$_COOKIE;
if(isset($_COOKIE['login']))
{
	header('Location: auth.php');
}
if(!isset($_COOKIE['login']))
{
if(isset($data['do_aut']))
{
	$username_aut = mysqli_real_escape_string($dbc, trim($data['Login']));
	$password_aut = mysqli_real_escape_string($dbc, trim($data['Password']));
	$errors=array();
	if(trim($data['Login'])=='')
	{
	$errors[]='Введите логин';	
	}
	if($data['Password']==''&& $data['Password']==' ')
	{
	$errors[]='Введите пароль';	
	}
	$pwrd=crypt('$password_aut', 'r1');
	$query = "SELECT login FROM `signup` WHERE login = '$username_aut'";
		$data1 = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data1)== 0) 
		{
			$errors[]='ТАКОГO ПОЛЬЗОВАТЕЛЯ НЕТ';
		}
	$query11 = "SELECT password FROM `signup` WHERE password = '$pwrd'";
	$data12 = mysqli_query($dbc, $query11);
		if(mysqli_num_rows($data12)== 0) 
		{
			$errors[]='Не правильный пароль';
		}
	if(!empty($username_aut) && !empty($password_aut))
		{
			$pwrd=crypt('$password_aut','r1');
			//$log=$data['Login'];
			//$pas=$data['Password'];
			$query="SELECT * FROM `signup` WHERE login='$username_aut' AND password='$pwrd'";
			$query2="SELECT id_user,login, role FROM `signup` WHERE login='$username_aut' ";
			$data1=mysqli_query($dbc, $query);	
			if(mysqli_num_rows($data1)!=0)
			{
				$row=mysqli_fetch_assoc($data1);
				setcookie('id_user', $row['id_user'], time() +(60*60*24*30));
				setcookie('login', $row['login'], time() +(60*60*24*30));
				setcookie('password', $row['password'], time() +(60*60*24*30));
				setcookie('role', $row['role'], time() +(60*60*24*30));
			}
			else
			{
				$errors[]='Такого пользователя нет';
				printf("%s", $username_aut);
				printf("%s", $password_aut);
			}
		}
	if(empty($errors))
	{
		
				header('Location: auth.php');
	}
	else
	{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
	
}
}

?>


	<form action="/aut.php" method="POST">
	<p>
	<p><strong style="color:white">Введите логин:</strong>:</p>
		<input type="text"  name="Login" value="<?php echo @$data['
		Login'];?>">
	</p>
	<p>
	<p><strong style="color:white">Введите пароль:</strong>:</p>
		<input type="password" name="Password" value="<?php echo @$data[
		'Password'];?>">
	</p>
	<p><p>
		<button  style="color:green" type="submit" name="do_aut">Войти</button>
	</p></p>
	<div style="color: green;">Вы зарегистрированы <br/><a href="/"HOME>На главную страницу</div><hr>
	</form>


