<head>

	<style type="text/css" media="all">
			<?php include "style/style.css" ?>
	</style>		
</head>
<body id="telo3">
 <body>
 </body>
</body>
<?php

$data=$_POST;
/*if(isset($_COOKIE['user']))
{
	header('Location: aut.php');
}*/


if(isset($data['do_sign']))
{
	
	$m=$data['question']. "\n <br>";
	 $m1=(($m/1000)%10). "\n ";
	 $m2=(($m/100)%10). "\n ";
	 $m3=(($m/10)%10). "\n ";
	 $m4=($m%10). "\n <br>";
	 $test=((($m1*$m2)+($m3*$m4))-$m1);
	// echo $test=(($m1+$m2+$m3+$m4)%($m1+$m2+$m3+$m4))+($m1+$m2+$m3+$m4);
	 // echo $test=(($m1+$m2+$m3))$m4;
	if($data['Y']=='')
	{
		$errors[]='Введите пароль';
	}
		if(!empty($errors))
		{
			echo 'Вы не прошли авторизацию: '; echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	if(($test==$data['Y']))
	{
	
		setcookie('user', $data['name'], time() +(60*60*24*30));
				header('Location: aut.php');
	}
	else
	{
		header('Location: error.php');
	}
		
	
		
		//header('Location:aut.php');
	//	echo 'Добро пожаловать  '.  $data['name'];
		//echo '<img src="/img/gif.gif" /alt="Письма мастера дзен">';
		
	
	
}
else
{
	header('Location: /');
}


?>
<p>
<a href="/" style="color: green;">На главную</a> <br>
</p>