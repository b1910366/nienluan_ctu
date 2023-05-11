<?php
include('../../config/connect.php');

$tendanhmuc = $_POST['tendmsp'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])) {
    $sql_add = "INSERT INTO danhmucsp(tendmsp,thutu) VALUE ('".$tendanhmuc."','".$thutu."')";
    mysqli_query($mysqli,$sql_add);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}elseif(isset($_POST['suadanhmuc'])) {
    $sql_update = "UPDATE danhmucsp SET tendmsp='".$tendanhmuc."', thutu='".$thutu."' WHERE id_dmsp='$_GET[id_dmsp]'";
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else {
    $id=$_GET['id_dmsp'];
    $sql_delete = "DELETE FROM danhmucsp WHERE id_dmsp='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>