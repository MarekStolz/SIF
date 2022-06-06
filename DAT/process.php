<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $weapon = $_POST['weapon'];
	 $studio = $_POST['studio'];
	 $sql = "INSERT INTO charact (name,weapon,studio_id)
	 VALUES ('$name','$weapon','$studio')";
	 if (mysqli_query($connect, $sql)) {
		echo "Uspěšně přidáno!";
	 } else {
		echo "Chyba: " . $sql . "
" . mysqli_error($connect);
	 }
	 mysqli_close($connect);
}
?>