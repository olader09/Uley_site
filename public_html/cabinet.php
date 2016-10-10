<!DOCTYPE html>
<?php
if (!isset($_COOKIE['grdd']) or !isset($_COOKIE['prdd'])) {
echo '<meta http-equiv="Refresh" content="0;URL=login.html">';
}
else{
	include('cabinet.html');
}
 ?>