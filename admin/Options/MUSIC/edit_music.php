<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';



if( empty($_POST["name_album"]) && empty($_POST["authors_album"]) && empty($_POST["complement_album"]) && empty($_POST["year"]) && 
empty($_POST["country"]) && empty($_POST["categories_music_id"]) )

	{
		echo "<h2>Заполните поля</h2>";
		
	}
	else
	{
		$sql = "UPDATE music SET name_album = '".$_POST["name_album"]."', authors_album = '".$_POST["authors_album"] ."', complement_album = '".$_POST["complement_album"]."', year ='".$_POST["year"]."' ,country ='".$_POST["country"]."' , 
		categories_music_id = '".$_POST["categories_music_id"]."' WHERE id = '".$_GET["id"]."'" ; 

var_dump($sql);
	if(mysqli_query($connect, $sql))
	{
		header('Location: http://fmbteka.local/admin/music.php');
	}
	else
	{
		echo "<h2>Произошла ошибка</h2>" . mysqli_error($connect);
	}

	}



?>



<!DOCTYPE html>
<html>
 <head>
 <title>Редактирование музыки</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
 <link href='https://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css' rel='stylesheet' type='text/css'>
 </head>
 <body>

 <div class="container">

 <div class="row">

 <div class="col-lg-8 col-lg-offset-2">

 <h1 class="text-center">Редактирование музыки</h1>

 
<div id="content">
	<form  method="POST">
		<p>
			Введите название альбома:<br/>
		<input type="text" name="name_album">
		</p>
		<p>
			Введите автора альбома:<br/>
		<input type="text" name="authors_album">
		</p>

		<p>
			Введите состав альбома:<br/>
		<input type="text" name="complement_album">
		</p>
		<p>
			Введите год::<br/>
		<input type="text" name="year">
		</p>
		<p>
			Введите страну:<br/>
		<input type="text" name="country">
		</p>
		<p>
			Введите жанр:<br/>
		<input type="text" name="categories_music_id">
		</p>

		<p>
			<button type="edit">Редактировать</button>
		</p>
	</form>
<form action="http://klien.local/admin/music.php">
			<button>На музыку</button>
	</form>
 <form id="contact-form" method="POST"  role="form">

 

 <!-- <div class="controls">

 <div class="row">
 <div class="col-md-6">
 <form class="form-group" method="POST" >
 <label for="form_name">Title</label>
 <input type="text" name="title"  class="form-control" placeholder=""  data-error="Firstname is required.">
 <div class="help-block with-errors"></div>
 </form>
 </div>
 <div class="col-md-6">
 <div class="form-group">
 <label for="form_lastname">Categories</label>
 <input type="text" name="category_id"  class="form-control" placeholder=""  data-error="Lastname is required.">
 <div class="help-block with-errors"></div>
 </div>
 </div>
 </div>

 

 <div class="row">
 <div class="col-md-12">
 <div class="form-group">
 <label for="form_message">Description</label>
 <input type="text" name="description"  class="form-control" placeholder="" rows="4" required="required" data-error="Please,leave us a message.">
 <div class="help-block with-errors"></div>
 </div>
 </div>

 

 <div class="col-md-12">
 <button type="submit" name ="add" class="btn btn-success btn-send"> Добавить</button> 
 </div>

 </div>

 </div>

 </form> -->

 </div><!-- /.col-lg-8 col-lg-offset-2 -->

 </div> <!-- /.row-->

 </div> <!-- /.container-->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
 <script src="https://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
 <script src="https://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
 </body>
</html>
















<!-- UPDATE `products` SET `content` = 'Очень Крутая худи' WHERE `products`.`id` = 1; -->