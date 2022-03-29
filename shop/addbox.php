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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>زیادکرندنی بۆکس</title>
</head>
<body>
    <center>
      <div>
        <div class="addbox">
            <form method="POST" action="modal/addbox.inc.php">
                <h1>ژمارەی بۆکس</h1>
                <input type="text" name="name" placeholder="ژمارەی بۆکس بنووسە بە نووسین">
                <button name="addbox">زیادکردن</button>
            </form>
        </div>
    </center>
    <?php
  if(isset($_SESSION['add'])){?>
    <script>
      swal({
        title: "<?php echo $_SESSION['add']; ?>",
        icon: "success",
        button: "باشە",
      });
    </script>
    <?php unset($_SESSION['add']); } ?>
</body>
</html>

