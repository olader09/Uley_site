<!DOCTYPE html>
<html>
<div class=img align=center>
	<?php 
include('db.php');
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['email'];$region=$_POST['region'];
$password=$_POST['password'];
$password2=$_POST['repassword'];

if (empty($name)){print "<strong><font color=red size=4>Вы не ввели ФИО!</strong>";echo '<meta http-equiv="Refresh" content="2;URL=register.html">'; exit();}if (empty($region)){print "<strong><font color=red size=4>Вы не ввели свой регион!</strong>";echo '<meta http-equiv="Refresh" content="2;URL=register.html">'; exit();}
if (empty($phone)){print "<strong><font color=red size=4>Вы не ввели номер телефона!</strong>";echo '<meta http-equiv="Refresh" content="2;URL=register.html">'; exit();}
if (empty($password)){print "<strong><font color=red size=4>Вы не ввели пароль!</strong>";echo '<meta http-equiv="Refresh" content="2;URL=register.html">'; exit();}
if (empty($password2)){print "<strong><font color=red size=4>Вы не ввели повторно пароль!</strong>";echo '<meta http-equiv="Refresh" content="2;URL=register.html">'; exit();}

if (strlen($name) < 5) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Имя должно быть больше 2 символов!</strong>");
}

if (strlen($name) > 50) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Имя должно быть меньше 50 символов!</strong>");
}

if (strlen($mail) > 300) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Почта должна быть меньше 50 символов!</strong>");
}

if (strlen($phone) < 3) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Логин должен быть больше 3 символов!</strong>");
}

if (strlen($phone) > 17) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Логин должен быть меньше 17 символов!</strong>");
}

if (strlen($password) < 5) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Пароль должен быть не менее 5 символов!</strong>");
}

/*if (!preg_match('#^[A-Za-z0-9]+$#',$phone)){
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Цифры и без пробелов!</strong>");
}*/

if (strlen($password) > 50) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Пароль должен меньше 30 символов!</strong>");
}

if (($password) !== ($password2)) {
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Пароли не совпадают!</strong>");
}
//капча
session_start();
if($_POST['kapcha'] != $_SESSION['rand_code']){
echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
exit ("<strong><font color=red size=4>Код с картинки введён не верно!</strong>");
}


$name = stripslashes($name);
$name = htmlspecialchars($name);

//$phone = stripslashes($phone);
//$phone = htmlspecialchars($phone);


//удаляем лишние пробелы
//$phone = trim($phone);



$result = mysql_query("SELECT name FROM users_rabota WHERE phone='$phone'",$db);
$myrow = mysql_fetch_array($result);
if (mysql_num_rows($result) != 0) {
	print "<strong><font color=red size=4>Этот номер телефона уже используется!</strong>";
	echo '<meta http-equiv="Refresh" content="3;URL=register.html">';
	exit();
}$password = md5($password);
	  

$sql="INSERT INTO users_rabota(name,mail,phone,region,password) VALUES ('$name','$mail','$phone','$region','$password')";
$res=mysql_query($sql);
if ($res=='TRUE'){
	print "<strong><font color=green size=4>Спасибо за регистрацию! Теперь вы можете войти под своим логином <strong><font color=red><ins>$login</strong></font></ins> и паролем!</strong>";
	echo '<meta http-equiv="Refresh" content="5;URL=login.php">';
}
?>	
	</div>
</html>