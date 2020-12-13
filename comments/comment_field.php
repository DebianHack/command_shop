<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php'; 
?>

<div id="spisok-comment">
	<ul>
	<?php
	if (isset($_COOKIE['polzovatel_id'])) {
		if (isset($_GET['id'])) {
		$sql = "SELECT * FROM `comments` WHERE `comments`.`komu` = " . $_GET['id'] . " ";
		$result = mysqli_query($connect, $sql);
		$col_comments = mysqli_num_rows($result);

		$i = 0;
		while ($i < $col_comments) {
			$comment = mysqli_fetch_assoc($result);

			$sql2 = "SELECT name FROM polzovateli WHERE id ='" . $comment["user"] . "' ";
			$result2 = mysqli_query($connect, $sql2);

			$comment2 = mysqli_fetch_assoc($result2);
	?>	
			<li>
				<h5><?php echo $comment2["name"]; ?></h5>
				<h5><?php echo $comment["rate"]; ?></h5>
				<p><?php echo $comment["content"]; ?></p>
				<div id="time"><?php echo $comment["time"]; ?></div>
			</li>						
	<?php
				$i = $i + 1;
			}			
		}	
	}
 
	?>
	</ul>			
</div>
 
<?php
/*
if (isset($_COOKIE["polzovatel_id"])) {
?>
	<input id="add" type="button" value="Добавить комментарий" onClick='location.href="http://fmbteka.local/comments/add_comment.php?id=<?php $comp['id'] ?>"'>	

<?php
}
?>
*/