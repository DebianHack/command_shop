<div class="container-fluid noPading glavField">
	<div class="row glavField">
  		<div class="col-2_5 spisoc">

<?php 
include $_SERVER["DOCUMENT_ROOT"] . '/parts/select_iscustvo.php';
?>

<div id="selectmovie2">
		<a href="index.php"><h3>Все</h3></a>
	<?php
		$sql = "SELECT * FROM `categories`";
		$result = mysqli_query($connect, $sql);

		while ($comp = mysqli_fetch_assoc($result)) {
	?>
		<a href="category.php?id=<?php echo $comp['id'];?>"><h2><?php echo $comp['genre'] ?></h2></a>
	<?php
		}
	?>
</div>

</div> <!-- <div class="col-2"> -->
