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
  <div class="form">
    <div class="container">
      <div class="formtitle"><h1>تکایە زانیاریەکانت تۆمار بکە</h1></div>
      <div class="inputs">
        <form method="POST" action="modal/usercontrol.inc.php" enctype="multipart/form-data">
        <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
        <label>ناو</label>
        <input class="inputform" type="text" name="name" placeholder="ناوی خۆت داخیل بکە" />
        <label>ژمارەی موبایل</label>
        <input class="inputform" type="text" name="phone" placeholder="ژمارەی موبایل داخیل بکە" />
        <div class="downall">
          <div class="down">
            <select name="country">
              <option>شار</option>
              <option>هەولێر</option>
              <option>سلێمانی</option>
              <option>دهۆک</option>
              <option>کەرکوک</option>
            </select>
          </div>
          <div class="down">
            <select name="gender">
              <option>ڕەگەز</option>
              <option>نێر</option>
              <option>مێ</option>
            </select>
          </div>
        </div>
        <br>
        <input class="inputform" type="file" name="file" />
        <button name="rec">داخیل بوون</button>
      </form>
      </div>
    </div>
  </div>

</body>
</html>