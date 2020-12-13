<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
	
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../style/style.css">
	<link rel="stylesheet" href="../../style/page_style.css">

	<title>FMBteka</title>
	<link rel="shortcut icon" type="image/x-icom" href="images/bg.png">
	<!-- <link rel="stylesheet" href="../../css/style.css" media="all"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
</head>
<body>
<header>

	<!-- Image and text -->
<!-- 	navbar navbar-light bg-light 
	pos-f-t
 --><nav class="shapka">
	  <a class="logotype" href="http://fmbteka.local/">
	    FMBteka
	  </a>

	  <form method="GET" id="poisk" class="form-inline poisk">
	    <input class="form-control mr-sm-2" type="text" name="poisk-text" placeholder="Search" aria-label="Search">
	    <button type="search" name="search" class="btn vvod my-2 my-sm-0"><img src="../../img/search5.png"></button>
	  </form>

	  <span class="vhod">
	  	<!-- <button type="button" class="btn btn-warning"><h5>Вход</h5></button> -->

	  	<?php
	  			include $_SERVER['DOCUMENT_ROOT'] . '/register/register.php';

				include $_SERVER['DOCUMENT_ROOT'] . '/register/login.php';
				
				if(isset($_COOKIE["polzovatel_id"])) {
					$sql = "SELECT * FROM polzovateli WHERE id=" . $_COOKIE["polzovatel_id"];
					$result = mysqli_query($connect, $sql);
					$polzovatel = mysqli_fetch_assoc($result);
				?>
					<a href="#" class="perehod_profil"><?php echo $polzovatel["name"];?></a>
				
					<a href="/register/exit.php" id="exit-login" type="button" class="btn button_y">Выйти</a>
				<?php
				} else {
				?>
					<!-- выпадающий список -->
					<div class="btn-group">
					  <button type="button" class="btn button_y dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Вход
					  </button>
					  <div class="dropdown-menu">

					  	<!-- Button trigger modal -->
						<button type="button" class="btn button_y" data-toggle="modal" data-target="#exampleModal">
						  Регистрация
						</button>
					    
						<!-- Button trigger modal -->
						<button type="button" class="btn button_y" data-toggle="modal" data-target="#exampleModalCenter">
						  Войти
						</button>

					    <div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="http://fmbteka.local/admin/index.php">Админ</a>
					  </div>
					</div>

						<?php
						include $_SERVER['DOCUMENT_ROOT'] . '/register/register_modal.php';
						?>

						<?php
						include $_SERVER['DOCUMENT_ROOT'] . '/register/login_modal.php';
						?>
						
				<?php	
				}
				?>

	  </span> <!-- <span class="vhod"> -->

	  
	</nav>

</header>
