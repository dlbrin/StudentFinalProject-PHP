<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <?php
  if(isset($_SESSION['BookSuccess'])){?>
    <script>
      swal({
        title: "<?php echo $_SESSION['BookSuccess']; ?>",
        icon: "success",
        button: "باشە",
      });
    </script>
    <?php unset($_SESSION['BookSuccess']); } ?>
    <div class="header">
      <div class="header-img">
        <img src="assets/WebImages/Barcode-bro.png">
      </div>
      <div class="header-text">
        <h1>پۆست ئوفیسی شار</h1>
      </div>
    </div>
    <div class="header-nav">
      <a href="index.php">بۆکسەکان</a>
      <a href="localcountry.php">ناوخوی وڵات</a>
      <a href="outcountry.php">دەرەوەی وڵات</a>
      <a href="countrycode.php">کۆدی شارەکان</a>
    </div>
    <div class="search">
      <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <button><i class="fas fa-search"></i></button>
        <input type="text" name="search" placeholder="گەران بەدوای بۆکس ...">
      </form>
    </div>

    <!-- Search For Box -->
    <?php
    if(isset($_GET['search'])){
      $data = sec($_GET['search']);
      $SearchQuery = mysqli_query($db , "SELECT * FROM `ourbox` WHERE `box_number` = '$data'");
      if(mysqli_num_rows($SearchQuery) > 0){?>
        <div class="kartakan">
         <?php
         while($SearchRow = mysqli_fetch_assoc($SearchQuery)){
          $Scapturedtext = sec($SearchRow['captured_or_no']);
          $BoxNymber = sec($SearchRow['box_number']);
          if($Scapturedtext == 'گیراوە'){
            $SendQuery = mysqli_query($db , "SELECT * FROM `sendbox` WHERE `numofbox` = '$BoxNymber'");
            if(mysqli_num_rows($SendQuery) >= 1){?>
              <div class="kart" style="background-color: #34495e;">
            <?php }else{?>
              <div class="kart">
            <?php } ?>
              <a href="boxlogin.php?boxnum=<?php echo sec($SearchRow['box_number']);?>">
                <div class="capturedst">
                  <h4><?php echo sec($SearchRow['captured_or_no']);?></h4>
                </div>
                <h1><?php echo sec($SearchRow['box_number']);?></h1>
              </a>
            </div>
          <?php  }else{?>
            <div class="kart">
              <div class="capturedst" style="background-color: green;">
                <h4><?php echo sec($SearchRow['captured_or_no']);?></h4>
              </div>
              <h1><?php echo sec($SearchRow['box_number']);?></h1>
            </div>
          <?php } } ?>
        </div>
        <div class="searchback">
          <a href="index.php" style="text-align: center;>">بگەڕێوە</a>
        </div>
      <?php }else{?>
        <div class="noresult">
          <h1>هیچ بۆکسێک نە دوزرایەوە</h1>
          <a href="index.php" style="text-align: center;>">بگەڕێوە</a>
        </div>
        
      <?php } 
        exit();
      } ?>


      <div class="kartakan">
        <?php
        $BoxQuery = mysqli_query($db , "SELECT * FROM `ourbox`");
        while($BoxRow = mysqli_fetch_assoc($BoxQuery)){
          $capturedtext = sec($BoxRow['captured_or_no']);
          $BoxNymber = sec($BoxRow['box_number']);
          if($capturedtext == 'گیراوە'){
            $SendQuery = mysqli_query($db , "SELECT * FROM `sendbox` WHERE `numofbox` = '$BoxNymber'");
            if(mysqli_num_rows($SendQuery) >= 1){?>
              <div class="kart" style="background-color: #34495e;">
            <?php }else{?>
              <div class="kart">
            <?php } ?>
              <a href="boxlogin.php?boxnum=<?php echo sec($BoxRow['box_number']);?>">
                <div class="capturedst">
                  <h4><?php echo sec($BoxRow['captured_or_no']);?></h4>
                </div>
                <h1><?php echo sec($BoxRow['box_number']);?></h1>
              </a>
            </div>
          <?php }else{ ?>
            <div class="kart">
              <div class="capturedst" style="background-color: green;">
                <h4><?php echo sec($BoxRow['captured_or_no']);?></h4>
              </div>
              <h1><?php echo sec($BoxRow['box_number']);?></h1>
            </div>
          <?php } }?>
        </div>
        <div class="binin">
          <a href="">بۆ بینینی هەموو بۆکسەکان</a>
        </div>
        <div class="getbox">
          <form method="POST" action="modal/usercontrol.inc.php">
            <div class="getbox-title">
              <i class="fas fa-hand-point-down"></i>
              <h1>داوای بۆکس بکە لێرە</h1>
            </div>
            <div class="getbox-email">
              <input type="email" name="email" placeholder="ئیمێل">
            </div>
            <div class="getbox-email">
              <select name="boxnum">
                <option>ژمارەی بۆکس</option>
                <?php
                $BoxQuery = mysqli_query($db , "SELECT * FROM `ourbox` WHERE `captured_or_no` = 'بەتاڵە'");
                while($BoxRow = mysqli_fetch_assoc($BoxQuery)){?>
                  <option><?php echo sec($BoxRow['box_number']);?></option>
                <?php } ?>
              </select>
            </div>
            <div class="getbox-btn">
              <button name="instuser">تۆمارکردن</button>
            </div>
          </form>
        </div>
      </body>
      </html>