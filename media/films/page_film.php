<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';
include $_SERVER["DOCUMENT_ROOT"] . "/parts/header.php";
include "spisok_category.php";
?>

<?php

if(isset($_GET['id'])){
	$sql = "SELECT * FROM films WHERE id = '". $_GET['id'] ."' ";
	$result = mysqli_query($connect, $sql);

	$comp = mysqli_fetch_assoc($result);

if($comp['baner'] != "") {
?>
<div class="col-9_5">
	<img class="kartinka" src="<?php echo $comp['baner']; ?>">
<?php
} else {
?>
<div class="col-9_5">
		<img class="kartinka" src="mage/zastavka_kamera3.png.png">
<?php
}
?>

			<p class="Film">
			<b>Название: </b><?php echo $comp['name'];?><br>
			<b>Год: </b><?php echo $comp['year']; ?><br>
			<b>Страна: </b><?php echo $comp['country']; ?><br>
			<b>Режиссер: </b><?php echo $comp['director']; ?><br>
			<b>Актеры: </b><?php echo $comp['actors']; ?><br>
			<b>Жанр: </b><?php echo $comp['category_id'];
			// $sqli = "SELECT genre FROM categories WHERE id = '"  "' "
			 ?>
			</p>

			<p class="description"><?php echo $comp['description']; ?></p>
		<!-- <img src="../images/09.jpg">
		<img src="../images/batman5_64.jpg">
		<img src="../images/163136.jpg"> -->

		<video poster="" src="mage/video/1.mov" muted width="350" height="180" controls preload="none"></video>



    <!-- ====================ОЦЕНКА================== -->
    <?php
    //ЕСЛИ ПОЛЬЗОВАТЕЛЬ авторезировался, он может просматривать оценку и писать комментарии
    if (isset($_COOKIE['polzovatel_id'])) {
    include $_SERVER['DOCUMENT_ROOT'] . '/comments/rating.php';
    ?>

    <!--=========== ТОРРЕНТ===================== -->
		<a class="torrentLink" href="<?php echo $comp['torrent']; ?>" download ><h2>Скачать торрент</h2></a>
		

<?php
if (isset($_POST["submit"]) && isset($_POST["user"]) && isset($_POST["content"]) && $_POST["user"] != "" && $_POST["content"] != "") {

  $sql = "INSERT INTO `comments` (`user`,`komu`, `content`, `rate`) VALUES ('" . $_POST["user"] . "','" . $_POST["komu"] . "', '" . $_POST["content"] . "', '" . $_POST["rate"] . "')";
    $connect->query($sql); 
}

?>
<div>
    <h5>Добавить комментарий</h5>
</div>

<form id="form" method="POST">
  <div id="pole">
      <input type="hidden" name="user" value="<?php echo $_COOKIE['polzovatel_id']; ?>">
      <input type="hidden" name="komu" value="<?php echo $_GET['id']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Сделайте оценку</label>
    <select id="ocenka" name="rate" required class="form-control">
      <option disabled selected hidden>Выберите свой вариант</option>
      <option id="rec">Рекомендую</option>
      <option>Не рекомендую</option>
      
      <!-- <option>4</option>
      <option>5</option> -->
    </select>
  </div>
  
  <div class="form-group">
    <label id="cont" for="exampleFormControlTextarea1">Напиши что ты думаешь</label>
    <textarea id="content" name="content" title="Введите текст комментария" required maxlength="100" class="form-control" rows="3"></textarea>
  </div>
  <button id="submit" name="submit" type="submit" class="btn button_y">Добавить отзыв</button>
</form>

   <!--  <a class="torrentLink" href="<?php// echo $comp['torrent']; ?>" download ><h2>Скачать торрент</h2></a>   -->



<?php
  } /*if (isset($_COOKIE['polzovatel_id']))*/ else {
  ?>

    <h4>Чтобы скачать торрент(без вирусов), оставлять комментарии, делать оценку - авторизируйтесь</h4>

  <?php
  }

//вывод комментариев
include $_SERVER['DOCUMENT_ROOT'] . '/comments/comment_field.php';
?>

  </div> <!-- <div class="col-10"> -->

<?php
}
?>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/parts/footer.php";
?>