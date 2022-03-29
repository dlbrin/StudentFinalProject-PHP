<!-- if you add a box -->
<?php
include '../includes/config.php';
if(isset($_POST['addbox'])){
	$name = sec($_POST['name']);
	$empty = 'بەتاڵە';

	$AddQuery = mysqli_query($db , "INSERT INTO `ourbox`(`box_number`,`captured_or_no`) VALUES('$name' , '$empty')");
	if($AddQuery){
		$_SESSION['add'] = "زیادکرا";
		header('Location: ../addbox.php');
	}
}

?>