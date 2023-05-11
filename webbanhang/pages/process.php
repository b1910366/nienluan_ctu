<?php
include('../admincp/config/connect.php');

$tenkh= $_POST['tenkhachhang'];
$sdt = $_POST['dienthoai'];
$diachi = $_POST['diachi'];


if(isset($_POST['capnhatkh'])) {
    $sql_update_kh = "UPDATE khachhang SET tenkhachhang='".$tenkh."', dienthoai='".$sdt."', diachi='".$diachi."' WHERE id_khachhang='$_GET[id_kh]'";
    $query = mysqli_query($mysqli,$sql_update_kh);
    header('Location: giohang.php');
}
