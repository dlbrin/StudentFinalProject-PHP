<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>چوونە ژوورەوە</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color: #ecf0f3;">
    <div class="lg-container">
        <div class="lg-row">
            <div class="lg-row-logo">
                <img src="assets/WebImages/technical-support.svg" alt="">
            </div>
            <div class="lg-row-header">
                <h1><i class="fas fa-lock"></i>چوونە ژوورەوە</h1>
            </div>
            <form class="lg-row-inp" method="POST" action="modal/login.inc.php">
                <input type="email" name="email" placeholder="ئیمێلی خۆت داخیل بکە">
                <input type="password" name="password" placeholder=" پاسوورد داخیل بکە">
                <button name="adm_log">چوونە ژوورەوە</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_SESSION['AdminEmpty'])){?>
        <script>
            swal({
                title: "<?php echo $_SESSION['AdminEmpty']; ?>",
                icon: "error",
                button: "باشە",
            });
        </script>
        <?php unset($_SESSION['AdminEmpty']); } ?>
        <?php
        if(isset($_SESSION['AdminWrong'])){?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['AdminWrong']; ?>",
                    icon: "error",
                    button: "باشە",
                });
            </script>
            <?php unset($_SESSION['AdminWrong']); } ?>
        </body>
        </html>