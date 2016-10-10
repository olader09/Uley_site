<!DOCTYPE html>
<?php
if (isset($_COOKIE['grdd']) and isset($_COOKIE['prdd'])) {
echo '<meta http-equiv="Refresh" content="0;URL=login2.php">';
exit();
}?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Сброс пароля</title>
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
						<a class="order" href="/login.php">Вход</a>
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
<form id="reset" method="POST" name="reset" action="reset_act.php">
    <h1>Сброс пароля</h1><br>
    <fieldset id="inputs">
 		<input name="email"  id="email" type="email" placeholder="mail@examle.com"  required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Отправить">

       <a href="register.html">Регистрация</a>
    </fieldset>
</form>
<script type="text/javascript">
jQuery(function($){
   $("#phone").mask("+7 999 999 99 99",{placeholder:" "});
});
</script>
<div id="result"></div>
			</div>
		</div>
	</div>
</body>
</html>
