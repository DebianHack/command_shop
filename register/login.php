<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';

// if (isset($_COOKIE['polzovatel_id'])) {
// 	echo "<h2>Куки есть</h2>";
// } else {

//если нажата кнопка на окне логина (не регистрации) выполнять запрос
if(isset($_POST['login_inp'])) {
	if (
		isset($_POST["email"]) && isset($_POST["password"])
		&& ($_POST["email"] != "" && $_POST["password"] != "")
		) {
		// сделать sql запрос из бд чтобы найти пользователя с таким же email и password
		$sql = "SELECT * FROM `polzovateli` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] . "'";

		$result = mysqli_query($connect, $sql);
		$col_polzovateley = mysqli_num_rows($result);

		if ($col_polzovateley == 1) {

			$polzovatel = mysqli_fetch_assoc($result);

			// создаем куки для хранения данных пользователя на указаное время (30 дней)
			setcookie("polzovatel_id", $polzovatel["id"], time() + 2592000, "/");
		} else {
			 echo "<h2>Логин или пароль введены неверно!</h2>";
		}
	}
}
// } // if (isset($_COOKIE['polzovatel_id']))
	
?>

