<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<title></title>
</head>
<body>
	<?php
	$BoxNum = sec($_GET['boxnum']);?>
	<div class="form">
		<div class="container">
			<div class="formtitle"><h1>چونەژوورەوە</h1></div>
			<form method="POST" action="modal/usercontrol.inc.php">
				<div class="inputs">
					<input type="hidden" name="boxnums" value="<?php echo sec($BoxNum);?>">
					<label>ئیمێل</label>
					<input class="inputform" type="email" name="email" placeholder="ئیمێلی خۆت داخیل بکە" />
					<label>پاسوورد</label>
					<input class="inputform" type="text" name="password" placeholder=" پاسوورد داخیل بکە" />
					<button name="loginbox">داخیل بوون</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>