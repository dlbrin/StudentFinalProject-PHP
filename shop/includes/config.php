<?php
session_start();
$db = mysqli_connect('localhost','root','','shop');
if(!$db){
	echo "داتابەیس نییە !";
}

// Security Conf
function sec($data){
    global $db;
    $data = mysqli_real_escape_string($db,htmlspecialchars($data));
    return $data;
}


if(isset($_SESSION['iduser'])){
    $iduser = $_SESSION['iduser'];
}

if(isset($_SESSION['adminid'])){
    $adminid = $_SESSION['adminid'];
}

if(isset($_GET['adminlogout'])){
    session_unset();
    unset($_SESSION['adminid']);
    session_destroy();
    header('Location: adminlogin.php');
}
?>