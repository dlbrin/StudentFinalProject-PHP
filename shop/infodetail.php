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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>وەرگرتنی بۆکس</title>
</head>
<body>
    <div class="admin-body">
        <table id="customers" style="direction: rtl; text-align: center;">
            <tr>
                <th style="background-color: tomato;">ژمارەی کەسی</th>
                <th style="background-color: tomato;">ئیمێل</th>
                <th style="background-color: tomato;">ژمارەی بۆکس</th>
                <th style="background-color: tomato;">باری</th>
                <th style="background-color: tomato;">کردار</th>
            </tr>
            <?php
            $UserQuery = mysqli_query($db , "SELECT * FROM `usertable` WHERE `pending/accept` = 'چاوەڕوانی'");
            while($UserRow = mysqli_fetch_assoc($UserQuery)){?>
                <tr>
                    <form method="POST" action="modal/usercontrol.inc.php">
                        <input type="hidden" name="userid" value="<?php echo sec($UserRow['id']);?>">
                        <input type="hidden" name="useremail" value="<?php echo sec($UserRow['email']);?>">
                        <input type="hidden" name="userbox_num" value="<?php echo sec($UserRow['box_num']);?>">
                        <td><?php echo sec($UserRow['id']);?></td>
                        <td><?php echo sec($UserRow['email']);?></td>
                        <td><?php echo sec($UserRow['box_num']);?></td>
                        <td><?php echo sec($UserRow['pending/accept']);?></td>
                        <td><button name="agreebtn">رازیم</button></td>
                    </form>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>