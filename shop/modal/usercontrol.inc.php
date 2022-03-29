<!-- if you want a box -->
<?php
include '../includes/config.php';
if(isset($_POST['instuser'])){
	$email = sec($_POST['email']);
	$boxnum = sec($_POST['boxnum']);
	$cap = 'گیراوە';

	$UserQuery = mysqli_query($db , "INSERT INTO `usertable`(`email`,`box_num`,`pending/accept`) VALUES('$email' , '$boxnum', 'چاوەڕوانی')");
	if($UserQuery){
		$query = mysqli_query($db , "UPDATE `ourbox` SET `captured_or_no`='$cap' WHERE `box_number` ='$boxnum';");
		$_SESSION['BookSuccess'] = "داوا کاریەکەت نێردرا چاوەرێ بە";
		header('Location: ../index.php');
	}
}

// if Admin Accept your email
if(isset($_POST['agreebtn'])){
	$pass = rand(999999, 111111);
	$userid = sec($_POST['userid']);
	$useremail = sec($_POST['useremail']);
	$userbox_num = sec($_POST['userbox_num']);
	$UserChQuery = mysqli_query($db , "UPDATE `usertable` SET `password`='$pass', `pending/accept`='وەرگیرا' WHERE `id` ='$userid';");
	if($UserChQuery){
		$subject = "هەژمارەکەت وەرگیرا";
		$message = "پاسوردی هەژمارەکەت:$pass .\n
		ژمارەی بۆکسەکەت: :$userbox_num.
		";

		$headers .= "Reply-To: KurdBun Official <info@kurdbun.org>\r\n"; 
		$headers .= "Return-Path: KurdBun Official <info@kurdbun.org>\r\n"; 
		$headers .= "From: KurdBun Official <info@kurdbun.org>\r\n";  
		$headers .= "Organization: KurdBun Official\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
		mail($useremail, $subject, $message , $headers);
		header('Location: ../infodetail.php');
	}
}



// if user login her box
if(isset($_POST['loginbox'])){
	$boxnums = sec($_POST['boxnums']);
	$email = sec($_POST['email']);
	$password = sec($_POST['password']);

	if(empty($email) || empty($password)){
		$_SESSION['adminerror'] = 'هیڤیدارین هەمی خاڵان پر بکە.';
		header("Location:../boxlogin.php?boxnum=$boxnums");
	}else{
		$AdminQuery = mysqli_query($db , "SELECT * FROM `usertable` WHERE `email` = '$email' AND `password` = '$password' AND `box_num` = '$boxnums'");
		if(mysqli_num_rows($AdminQuery) == 1){
			while($AdminRow = mysqli_fetch_assoc($AdminQuery)){
				$recorded = $AdminRow['recorded'];
				$_SESSION['iduser'] = $AdminRow['id'];
				if($recorded == 'بەلێ'){
					header('Location: ../profile.php');
				}else{
				header('Location: ../info.php');
			}
			}
			die();
		}else{
			$_SESSION['adminerror'] = 'هیچ بەڕێوبەر ب ڤی ناڤی نینە.';
			header("Location:../boxlogin.php?boxnum=$boxnums");
		}
	}

}

// if user click recorded button
if(isset($_POST['rec'])){
	$iduser = sec($_POST['iduser']);
	$name = sec($_POST['name']);
	$phone = sec($_POST['phone']);
	$country = sec($_POST['country']);
	$gender = sec($_POST['gender']);
	$file = $_FILES['file'];
	$fileName = $file['name'];
	$fileType = $file['type'];
	$fileTmpName = $file['tmp_name'];
	$fileError = $file['error'];
	$fileSize = $file['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$fileAllowed = array('png' , 'jpg' , 'jpeg' , 'svg' , 'gif' , 'jfif');

	if(in_array($fileActualExt , $fileAllowed)){
		if($fileError === 0){
			if($fileSize < 10000000){

				$fileNewName = rand().".".$fileActualExt;
				$fileDestinition = "../assets/userimages/$fileNewName";
				move_uploaded_file($fileTmpName , $fileDestinition);
			}
		}
	}
	$RecordUserQuery = mysqli_query($db , "UPDATE `usertable` SET `name`='$name', `phone`='$phone' , `gender`='$gender', `country`='$country' , `image`='$fileNewName' , `recorded`='بەلێ' WHERE `id` = '$iduser'");
	if($RecordUserQuery){
		header("Location: ../profile.php");
	}


}

// if user delete a box
if(isset($_POST['deletbox'])){
	$userbox = sec($_POST['userbox']);
	$DeletQuery = mysqli_query($db , "DELETE FROM `usertable` WHERE `box_num` = '$userbox'");
	if($DeletQuery){
		$UpdateUserQuery = mysqli_query($db , "UPDATE `ourbox` SET `captured_or_no`='بەتاڵە' WHERE `box_number` = '$userbox'");
		$DeletSendQuery = mysqli_query($db , "DELETE FROM `sendbox` WHERE `numofbox` = '$userbox'");
		header("Location: ../index.php");
	}
}




?>