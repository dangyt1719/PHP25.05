<head>

		<?php
		require "db.php";
		?>
		
		
	<style type="text/css" media="all">
			<?php include "style/style.css" ?>
	
	</style>
		
</head>

<body id = "telo1">
</body>

<?php
require "db.php";
$data=$_POST;
if(isset($_COOKIE['login']))
{
	header('Location: auth.php');
}
if(isset($data['do_signup']))
{
	$username = mysqli_real_escape_string($dbc, trim($data['Login']));
	$password1 = mysqli_real_escape_string($dbc, trim($data['Password']));
	$password2 = mysqli_real_escape_string($dbc, trim($data['Password2']));
	$errors=array();
	if(trim($data['Login'])=='')
	{
	$errors[]='Введите логин';	
	}
	if($data['Password']=='')
	{
	$errors[]='Введите пароль';
	}
	if ($data['Password2']!=$data['Password'])
	{
	$errors[]='Введите пароль еще раз'	;
	}
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) 
	{
		$query = "SELECT * FROM `signup` WHERE login = '$username'";
		$data1 = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data1) != 0) 
		{
			$errors[]='Логин уже существует';
		}
	}
	if(empty($errors))
	{
		
		$pwrd=crypt('$password2','r1');
		$dbc->query("INSERT INTO signup(login, password,role) VALUES ('$username','$pwrd', 'user')");
		//$dbc->query("INSERT INTO signup(login, password) VALUES ('$username','$password2')");
		
		echo '<div style="color: green;">Вы зарегистрированы <br/> Go to home list <a href="/"HOME>glavnaya</div><hr>';
	}
	else
	{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
	
	
}
if(isset($data['do_before']))
	{
		header('Location:/ ');
	}
?>



<form action="/signup.php" method="POST">

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
	
	<p>
	<p><strong style="color:white">Введите пароль еще раз:</strong>:</p>
		<input type="password" name="Password2">
	</p>
	
	<p>
	
		<button  style="color:green" type="submit" name="do_signup">Зарегистрироваться</button>
	</p>
		<p>
	
		<button  style="color:green" type="submit" name="do_before">На главную</button>
		</p>
</form>

