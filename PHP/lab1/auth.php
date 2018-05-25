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
echo '<div style="color: green;">Здравствуйте</div><hr>';
echo $_COOKIE['login'];
echo "<br/>";
if($_COOKIE['role']=='admin')
{
	if ($result = mysqli_query($dbc,'SELECT id_user, login, password, role FROM signup')) 
	{ 
		$row_cnt=$result->num_rows;
		printf("rows %d \n", $row_cnt);
		print("данные:\n <br>"); 
		/* Выборка результатов запроса */ 
				echo '<table border="1" >';
				echo '<thead>';
				echo '<tr>';
				echo '<th align="center">id_user</th>';
				echo '<th align="center">login</th>';
				echo '<th align="center">password</th>';
				echo '<th align="center">role</th>';
				echo '<th align="center">Delete this user</th>';
				echo '<th align="center" colspan="2">Изменить роль</th>';
				echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
			// выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
			while($row = mysqli_fetch_array($result))
				{ 
					echo '<tr>';
					echo '<td align="center">' . $row['id_user'] . '</td>';
					echo '<td >' . $row['login'] . '</td>';
					echo '<td >' . $row['password'] . '</td>';
					echo '<td align="center">' . $row['role'] . '</td>';
					echo "<td> <a name=\"delete\" href=\"auth.php?del=".$row["id_user"]."\">Удалить</a></td>\n";
					
				//	echo '<td align="center">' .'<input type="text" name="text"  >'. '</td>';
				/*	echo '<td align="center">' 
					.'<select> method="GET" name="sel_role" size="1"
					<option selected value="null"></option>
					<option value="admin">admin</option> 
					<option value="user">user</option> 
					</select> '. '</td>';*/
					echo "<td> <a name=\"rewrite_role\" href=\"auth.php?rewrite=".$row["id_user"]."\">admin</a></td>\n";
					echo "<td> <a name=\"rewrite_role2\" href=\"auth.php?rewrite2=".$row["id_user"]."\">user</a></td>\n";
					
					echo '</tr>';
					//<input type="submit" name="delete" value="Ok">
					//<input type="checkbox" name="check">
				}
				
					echo '</tbody>';
					echo '</table>';
				//	$del=$_GET['del'];
		//	$query="DELETE signup WHERE id_user=$del";
	} 

}
else
{
	header('Location: auth_user.php');
}
if(isset($_GET['del']))
{
	$delete=(int) $_GET['del'];
	$query="DELETE FROM `signup` WHERE `id_user`=$delete";
	mysqli_query($dbc, $query);
	
}

if(isset($_GET['rewrite']))
{
	$rewrite_role2=(int) $_GET['rewrite'];
	$query="UPDATE `signup` SET `role`='user' WHERE `id_user`=$rewrite_role2";
	mysqli_query($dbc, $query);
}
if(isset($_GET['rewrite2']))
{
	$rewrite_role2=(int) $_GET['rewrite2'];
	$query="UPDATE `signup` SET `role`='admin' WHERE `id_user`=$rewrite_role2";
	mysqli_query($dbc, $query);

	
}



?>
<p><a href="exit.php">Выйти(<?php echo $_COOKIE['login']; ?>)</a></p>
<p><a href="signup_adm.php">Добавить пользователя(<?php echo $_COOKIE['login']; ?>)</a></p>

