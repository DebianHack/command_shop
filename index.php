<?php
include $_SERVER["DOCUMENT_ROOT"] . "/parts/header.php";
?>

<div class="container-fluid menu">
  <div class="row centered mt-16">
  	<div class="col-4 FILMS">
	  	<a href="/media/films/index.php">
	  	  <img src="img/film.png">
	  	  <h2 id="f">ФИЛЬМЫ</h2>
	    </a>
	</div>
	<div class="col-4">
	  	<a href="/media/music/index_music.php">
		  <img src="img/2music.png">
		  <h2>МУЗЫКА</h2>
		</a>
	</div>
	<div class="col-4">
	  	<a href="/media/books/index_books.php">
	  	  <img src="img/1book.png">
	  	  <h2>КНИГИ</h2>
	  	</a>
	</div>
  </div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/parts/footer.php";
?>