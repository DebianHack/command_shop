<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';


if( empty($_POST["name"]) && empty($_POST["year"]) && empty($_POST["author"]) && empty($_POST["description"]) && 
empty($_POST["country"]) && empty($_POST["categories_books_content_id"]) )

	{
		echo "<h2>Заполните поля</h2>";
		
	}
	else
	{
	$sql = "INSERT INTO books (name, year, author, description,country, categories_books_content_id) 
	VALUES('".$_POST["name"]."', '".$_POST["year"] ."' , '".$_POST["author"]."', '".$_POST["description"]."',
'".$_POST["country"]."','".$_POST["categories_books_content_id"]."')";
var_dump($sql);
	if(mysqli_query($connect, $sql))
	{
		header("Location: http://fmbteka.local/admin/books.php");
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
 <title>Добавление книги</title>
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

 <h1 class="text-center">Добавление книги</h1>

 
<div id="content">
	<form  method="POST">
		<p>
			Введите название книги:<br/>
		<input type="text" name="name">
		</p>
		<p>
			Введите год:<br/>
		<input type="text" name="year">
		</p>

		<p>
			Введите автора:<br/>
		<input type="text" name="author">
		</p>
		<p>
			Введите аннотацию к книге:<br/>
		<input type="text" name="description">
		</p>
		<p>
			Введите страну:<br/>
		<input type="text" name="country">
		</p>
		<p>
			Введите жанр:<br/>
		<input type="text" name="categories_books_content_id">
		</p>

		<p>
			<button type="add">Добавить</button>
		</p>
	</form>
<form action="http://klien.local/admin/books.php">
			<button>На книги</button>
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