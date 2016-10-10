<?php 
if (isset($_COOKIE['grdd']) and isset($_COOKIE['prdd'])) {
echo '<meta http-equiv="Refresh" content="0;URL=cabinet.php">';
exit();
}
	include ('db.php');
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	$password=md5($password);
	
	$result = mysql_query("SELECT name FROM users_rabota WHERE phone='$phone' and password='$password'",$db);
	$myrow = mysql_fetch_array($result);
	if (mysql_num_rows($result) != 0) {
		echo '1';

		} else {
			echo '0';
		//Ошибка авторизации
		exit ("'$phone','$password'");
	}
?> 