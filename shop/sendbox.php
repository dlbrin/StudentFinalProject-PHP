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
	<title>ناردنی بۆکس</title>
</head>
<body>

  <center>
    <table id="customers" style="direction: rtl; text-align: center;">
      <tr>
        <th>ژمارەی بۆکس</th>
        <th>ناونیشانی ناردن</th>
        <th>بەرواری هاتن</th>
        <th>وەزنی کاڵا</th>
        <th>بەرواری وەرگرتن</th>
        <th>کردار</th>
      </tr>
      <tr>
        <form method="POST" action="modal/sendbox.inc.php">
          <td>
            <select name="boxnum">
              <?php
              $BoxQuery = mysqli_query($db , "SELECT * FROM `ourbox` WHERE `captured_or_no` = 'گیراوە'");
              while($BoxRow = mysqli_fetch_assoc($BoxQuery)){?>
                <option><?php echo sec($BoxRow['box_number']);?></option>
              <?php } ?>
            </select>
          </td>
          <td>
            <select name="place">
              <optgroup label="ناوخۆی">
                <option value="هەولێر">هەولێر</option>
                <option value="سلێمانی">سلێمانی </option>
                <option value="دهۆک">دهۆک </option>
                <option value="ڕانیە">ڕانیە  </option>
                <option value="چەمچەماڵ">چەمچەماڵ </option>
                <option value="زاخۆ">زاخۆ  </option>
                <option value="بەغداد">بەغداد  </option>
                <option value="کەرکوک">کەرکوک </option>
                <option value="هەلەبجە">هەلەبجە </option>
                <option value="قەلادزی">قەلادزی </option>
                <option value="بەسرە">بەسرە  </option>
                <option value="سەماوە">سەماوە  </option>
                <option value="تکریت">تکریت  </option>
              </optgroup>
              <optgroup label="دەرەوە">
                <option value="ئەمەریکا">ئەمەریکا   </option>
                <option value="ئەلمانیا">ئەلمانیا </option>
                <option value="ئێران">ئێران    </option>
                <option value="تورکیا">تورکیا   </option>
                <option value="فەرەنسا">فەرەنسا </option>
                <option value="سعودیە">سعودیە   </option>
                <option value="بەریتانیا">بەریتانیا  </option>
                <option value="ڕوسیا">ڕوسیا  </option>
                <option value="چین">چین  </option>
                <option value="ئیسپانیا">ئیسپانیا  </option>
                <option value="مسر">مسر  </option>
                <option value="کەنەدا">کەنەدا  </option>
                <option value="هۆڵەندا">هۆڵەندا  </option>
              </optgroup>
            </select>
          </td>
          <td><input type="date" name="datecome"></td>
          <td><input type="text" name="weight"></td>
          <td><input type="date" name="daterecived"></td>
          <td><button name="sendbox">ناردن</button></td>
        </form>
      </tr>
    </table>
  </center>
  <div class="archive">
    <h1>ئەرشیف</h1>
    <table id="customers" style="direction: rtl; text-align: center;">
      <tr>
        <th>ژمارەی بۆکس</th>
        <th>ناونیشانی ناردن</th>
        <th>بەرواری هاتن</th>
        <th>وەزنی کاڵا</th>
        <th>بەرواری وەرگرتن</th>
      </tr>
      <?php
      $BoxQuery = mysqli_query($db , "SELECT * FROM `sendbox`");
      while($BoxRow = mysqli_fetch_assoc($BoxQuery)){?>
        <tr>
          <td><?php echo sec($BoxRow['numofbox']);?></td>
          <td><?php echo sec($BoxRow['place']);?></td>
          <td><?php echo sec($BoxRow['dateofcome']);?></td>
          <td><?php echo sec($BoxRow['weightofgoods']);?></td>
          <td><?php echo sec($BoxRow['dateofrecived']);?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>