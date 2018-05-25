<head>
	<style type="text/css" media="all">
			<?php include "style/style.css" ?>
	</style>		
</head>
<body id="telo4" >

</body>

<?php
//require "test.js";

/*$data=$_POST;
$bl='false';


	if($bl=='false')
	{
	echo "X:"; echo $m=mt_rand(1000, 9999) . "\n <br>"; 
	
echo	$m1=(($m/1000)%10). "\n " ;
echo	$m2=(($m/100)%10)."\n " ;
echo	$m3=(($m/10)%10)."\n " ;
echo	$m4=($m%10)."\n <br>" ;
	echo	$test=$m1+$m2+$m3+$m4;
	$bl=true;
	}
	else 
	{
		$bl='false';
		};

	
if(isset($data['do_sign']))
	{
		
		
		if($data['Y']==$test)
		{
			header('Location: signup.php');
		}
		else
		{
			echo 'suka';
		}
		//sleep(4);
		
		
	}
/*if(isset($data['do_sign']))
{
	
	
	
if($test==$data['Y'])
{
	header('Location: signup.php');
}
else
{
		echo 'suka';
}
	
}*/
/*if(isset($data['do_gen']))
{
$m=mt_rand(1000, 9999);

echo $data['X']=$m;
$m1=(($m/1000)%10);
$m2=(($m/100)%10);
$m3=(($m/10)%10);
$m4=($m%10);
	$test=$m1+$m2+$m3+$m4;
	sleep(4);
	
}*/

//set_time_limit(0);
//$m=10;//минуты
/*$tm=5;
$time=time()+$tm;
while(true)
{
if($time<time())
{    exit;   }
else
{
	
}
}
echo 'Прошло:'.($tm/60).' мин.';*/

/*	<p><strong style="color:red">:</strong>:</p>
		<input type="hidden"  name="Y" value="<?php $tm=5;
													$time=time()+$tm;
													while(true)
														{
															if($time<time())
															{    exit;   }
														}
														echo 'Прошло:'.($tm/60).' мин.';?>" ></p>*/

/*<p><a href="exit.php">Выйти(<?php echo $_COOKIE['user']; ?>)</a></p>*/

if(isset($_COOKIE['user']))
{
	header('Location: aut.php');
}
?>


<form action="/signup.php" method="POST">

		<p><strong style="color:white">Авторизация</strong></p>
		
		
		
		<p>
		<p><strong style="color:red"></strong></p>
		<input type="text" value="<?php echo mt_rand(1000, 9999)?>" name="question">
		</p>
		<p>
	
		
		<p>
	<p><strong style="color:red"></strong></p>
		<input type="text"  name="Y" >
		</p>
		<p>

		
		<p>
		<button  style="color:green" type="submit" name="do_sign">GO</button>
		</p>
</form>

	