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
 if(isset($_SESSION['iduser'])){
  $iduser = $_SESSION['iduser'];
}
?>
<?php
$UserQuery = mysqli_query($db , "SELECT * FROM `usertable` WHERE `id` = '$iduser'");
while($UserRow = mysqli_fetch_assoc($UserQuery)){?>
	<div class="profile-all">
		
    <div class="profile-card">
      <div class="imgname">
        <img src="assets/userimages/<?php echo sec($UserRow['image']);?>">
        <h1><?php echo sec($UserRow['name']);?></h1>
      </div>
      <div class="phonecity">
        <h2>ژ. مۆبایل: <?php echo sec($UserRow['phone']);?></h2>
        <h2>شار: <?php echo sec($UserRow['country']);?></h2>
        <h2>رەگەز: <?php echo sec($UserRow['gender']);?></h2>
      </div>
      
    </div>
  </div>


  <center>
      <div class="backbtn">
        <div>
          <a href="index.php">بگەڕێوە سەرەتا</a>
        </div>
        <div>
          <form method="POST" action="modal/usercontrol.inc.php">
            <input type="hidden" name="userbox" value="<?php echo sec($UserRow['box_num']);?>">
            <button name="deletbox">بۆکسەکە بەتاڵ بکە</button>
          </form>
        </div>
      </div>
    <table id="customers" style="direction: rtl; text-align: center;">
      <tr>
        <th>ژمارەی بۆکس</th>
        <th>ناونیشانی ناردن</th>
        <th>بەرواری هاتن</th>
        <th>وەزنی کاڵا</th>
        <th>بەرواری وەرگرتن</th>
      </tr>
      <?php
      $boxnum = sec($UserRow['box_num']);
      $BoxQuery = mysqli_query($db , "SELECT * FROM `sendbox` WHERE `numofbox` = '$boxnum'");
      if(mysqli_num_rows($BoxQuery) >= 1){
      while($BoxRow = mysqli_fetch_assoc($BoxQuery)){?>
        <tr>
          <td><?php echo sec($BoxRow['numofbox']);?></td>
          <td><?php echo sec($BoxRow['place']);?></td>
          <td><?php echo sec($BoxRow['dateofcome']);?></td>
          <td><?php echo sec($BoxRow['weightofgoods']);?></td>
          <td><?php echo sec($BoxRow['dateofrecived']);?></td>
        </tr>
      <?php } }else{ ?>
        <td colspan="5">هیچ بۆکسێک  نە هاتووە</td>
      <?php } ?>
    </table>
  </center>
<?php } ?>
</body>
</html>