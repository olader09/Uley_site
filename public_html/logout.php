<!DOCTYPE html>
<html>
<head>
<title>logout</title>
</head>
<body>
<?php 
if (isset($_COOKIE['grdd']) and isset($_COOKIE['prdd'])) {
echo '<script>
		function deleteCookie(name) {
        var date = new Date(); // Берём текущую дату
        date.setTime(date.getTime() - 1); // Возвращаемся в "прошлое"
        document.cookie = name += "=; expires=" + date.toGMTString(); // Устанавливаем cookie пустое значение и срок действия до прошедшего уже времени
        }
	deleteCookie("grdd");
    deleteCookie("prdd");		
</script>';
echo '<meta http-equiv="Refresh" content="0;URL=index.html">';
}
else{
echo '<meta http-equiv="Refresh" content="0;URL=index.html">';
}
?> 
</body>
</html>