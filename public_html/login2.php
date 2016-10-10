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
		echo '<script>var ws=new Date();
ws.setMinutes(45+ws.getMinutes());  document.cookie="grdd='.$phone.';expires="+ ws.toGMTString();
'.'
document.cookie="prdd='.$password.';expires="+ ws.toGMTString();
</script>';
echo '<meta http-equiv="Refresh" content="0;URL=cabinet.php">';
		} else {
		echo'<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Вход</title>

	<link rel="stylesheet" href="css/login.css">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css" />

	

	<!-- Stylesheets -->

	<link href="css/reset.css" rel="stylesheet" />

	<link href="css/main.css" rel="stylesheet" />

	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />

	

	<!-- JavaScripts -->

	<script src="js/jquery.js" type="text/javascript"></script>

	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>

</head>



<body>

		<header>



					<a href="http://rnd-promo.esy.es/"><div class="logo"></div></a>

					<div class="description">Время! Простота! Контроль!</div>

					

					<div class="contact">

						

						<!-- Telephone -->

						<div class="telephone"> +7 905 45 67 505</div>

						<!-- END OF: Telephone -->

						<!-- Order -->

						<a class="order" href="/login.html">Вход</a>

						<!-- END OF: Order -->

						<a class="order" href="/register.html">Регистрация</a>

						<!--<a class="social" href="#">f</a>

						<a class="social" href="#">t</a>-->

						

					</div>

					<div class="clear"></div>

							<!--<div class="line"></div>-->

				</header>

	<div class="background_overlay">

		<div class="background">

			<div class="wrapper">

<form id="login" method="POST" name="login" action="login2.php">


   <fieldset id="inputs">


    </fieldset>

    <fieldset id="actions">

        <strong>Ошибка! Не верно введен логин/пароль!</strong>


    </fieldset>

</form>



			</div>

		</div>

	</div>

</body>

</html>';
		//Ошибка авторизации
		echo '<meta http-equiv="Refresh" content="2;URL=login.php">';
		exit ();
	}
?> 