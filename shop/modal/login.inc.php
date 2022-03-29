<?php
include '../includes/config.php';

if(isset($_POST['adm_log'])){
	$email = sec($_POST['email']);
	$password = sec($_POST['password']);

	if(empty($email) || empty($password)){
		$_SESSION['AdminEmpty'] = "هەموو خاڵێک پربکەوە";
		header('Location: ../adminlogin.php');
	}else{
		$Encpassword = hash('gost', $password);
		$AdminQuery = mysqli_query($db , "SELECT * FROM `admin_table` WHERE `email` = '$email' AND `password` = '$Encpassword'");
		if(mysqli_num_rows($AdminQuery) > 0){
			while($AdminRow = mysqli_fetch_assoc($AdminQuery)){
				$_SESSION['adminid'] = sec($AdminRow['id']);
				header('Location: ../admin.php');
			}
		}else{
			$_SESSION['AdminWrong'] = "ناو یان ژمارەی نهێنی خەلەتە";
		    header('Location: ../adminlogin.php');
		}
	}
}

?>