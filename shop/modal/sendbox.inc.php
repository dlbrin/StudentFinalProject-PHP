<!-- if you send a box -->
<?php
include '../includes/config.php';
if(isset($_POST['sendbox'])){
	$boxnum = sec($_POST['boxnum']);
	$place = sec($_POST['place']);
	$datecome = sec($_POST['datecome']);
	$weight = sec($_POST['weight']);
	$daterecived = sec($_POST['daterecived']);

	$SendQuery = mysqli_query($db , "INSERT INTO `sendbox`(`numofbox`,`place`,`dateofcome`,`weightofgoods`,`dateofrecived`) VALUES('$boxnum' , '$place', '$datecome', '$weight' , '$daterecived')");
	if($SendQuery){
		header('Location: ../sendbox.php');
	}
}

?>