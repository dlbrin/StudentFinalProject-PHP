<?php include 'includes/config.php'; 
if($adminid == false){
    header('Location: adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>بەشی بەڕێوبەر</title>
</head>
<body>
    <div class="alladmin">
        <a href="infodetail.php">
            <div class="admin-card">
                <img src="assets/WebImages/accbox.png" alt="">
                <h1>وەرگرتنی بۆکس</h1>
            </div>
        </a>
        <a href="sendbox.php">
            <div class="admin-card">
                <img src="assets/WebImages/sendbox.png" alt="">
                <h1>ناردنی بۆکس</h1>
            </div>
        </a>
        <a href="addbox.php">
            <div class="admin-card">
                <img src="assets/WebImages/addbox.png" alt="">
                <h1>زیادکرندنی بۆکس</h1>
            </div>
        </a>
    </div>
    <div class="logoutbtn">
        <a href="?adminlogout">چوونە دەرەوە</a>
    </div>
</body>
</html>