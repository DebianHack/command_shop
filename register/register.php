<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';

//если кнопка отправки формы нажата
if(isset($_POST["register_inp"])) {
//проверять, если все поля заполнены и пароль совпадает с подтверждением пароля
if (isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["password"])
 && isset($_POST["repassword"])
	&& ($_POST["email"] != "" && $_POST["name"] != "" && $_POST["password"] != "" && $_POST["repassword"] != "" && $_POST["password"] == $_POST["repassword"])) {
	//выполнять проверку; если данная почта уже занесена в БД, выводить сообщение
	$sql = "SELECT * FROM `polzovateli` WHERE `email` = '" . $_POST["email"] . "' ";
	$result = mysqli_query($connect, $sql);
	$num = mysqli_fetch_assoc($result);

	if ($num != null) {
		// var_dump($result);
		echo "<h2>Этот email уже используется. Введи другой email адрес</h2>";
	} else {
		//выполнять проверку; если введенный логин уже занесен в БД, выводить сообщение
		$sql = "SELECT * FROM `polzovateli` WHERE `name` = '" . $_POST["name"] . "' ";
		$result = mysqli_query($connect, $sql);
		$num = mysqli_fetch_assoc($result);

		if ($num != null) {
			echo "<h2>Этот логин уже используется. Попробуй ввести другой</h2>";
		} else {

			// Вставить в таблицу !название таблицы!() Добавить пользователя
			$sql ="INSERT INTO polzovateli (email, name, password) VALUES ('" . $_POST["email"] . "','" . $_POST["name"] . "','" . $_POST["password"] . "')";
			//если пользователь добавлен сохранять пользователя
			if ($result = mysqli_query($connect, $sql)) {
				var_dump($result);

				$col_polzovateley = mysqli_num_rows($result);
				var_dump($col_polzovateley);
				$polzovatel = mysqli_fetch_assoc($result);
				var_dump($polzovatel);
				// создаем куки для хранения данных пользователя на указаное время (30 дней)
				setcookie("polzovatel_id", $polzovatel["id"], time() + 2592000, "/");
			//иначе выводить ошибку 
			} else {
				echo "<h2>Ошибка. Свяжитесь с владельцами сайта</h2>". mysqli_error($connect); 
			}
			

		} // если введенный логин уже занесен в БД, выводить сообщение
	 } //если почта уже занесена в БД, выводить сообщение

//ЕСЛИ данные не введены
} else {
	echo "<h2>пароль и подтверждение пароля не совпадают</h2>";
}

} //if(isset($_POST["submit"]))

?>


