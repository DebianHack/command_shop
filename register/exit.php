<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';

if(isset($_COOKIE["polzovatel_id"])) {

	setcookie("polzovatel_id", "", 0, "/");
	header("Location: /");
} else {
	echo "<h2>Ошибка. Свяжитесь с владельцами сайта &#9742</h2>";
}

?>