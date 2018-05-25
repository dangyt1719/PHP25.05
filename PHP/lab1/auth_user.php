<head>

		<?php
		require "db.php";
		?>
		
		
	<style type="text/css" media="all">
			<?php include "style/style.css" ?>
	
	</style>
		
</head>


<body id = "telo2">
</body>

<?php
if(isset($_COOKIE['login']))
{
echo '<div style="color: green;">Здравствуйте</div><hr>';
}
else
{
	header('Location: /aut.php');
}
?>
<p><a href="exit.php">Выйти(<?php echo $_COOKIE['login']; ?>)</a></p>