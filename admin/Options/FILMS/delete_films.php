<?php
include $_SERVER['DOCUMENT_ROOT'] . '/db.php';

if(isset($_GET["id"] ))
{
	
	$sql = "DELETE FROM films WHERE id = '".$_GET["id"] ."' " ;
	var_dump($sql);
	if(mysqli_query($connect,$sql))
		{
			header("Location: http://fmbteka.local/admin/film.php");
		}
	else
	{
		echo "<h2>Ошибка</h2>". mysqli_error($connect); 
	}
}
?>
