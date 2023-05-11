<?php
include('../../config/connect.php');

$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$gia = $_POST['gia'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$noidung= $_POST['noidung'];
$id_dmsp = $_POST['id_dmsp'];
$tinhtrang = $_POST['tinhtrang'];

if(isset($_POST['themsp'])) {
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);
    $sql_add = "INSERT INTO sanpham(masp, tensp, gia, soluong, hinhanh, noidung, id_dmsp, tinhtrang) 
                VALUE ('".$masp."','".$tensp."', '".$gia."', '".$soluong."', '".$hinhanh_time."', '".$noidung."', '".$id_dmsp."', '".$tinhtrang."')";
    mysqli_query($mysqli,$sql_add);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}elseif(isset($_POST['suasp'])) {
    if ($hinhanh != ''){

        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh_time);

        $sql_update = "UPDATE sanpham SET masp='".$masp."', tensp='".$tensp."', gia='".$gia."', soluong='".$soluong."', hinhanh='".$hinhanh_time."',
                                    noidung='".$noidung."', id_dmsp='".$id_dmsp."', tinhtrang='".$tinhtrang."'
                                    WHERE id_sp='$_GET[id_sp]'";                       
        
        $sql = "SELECT * FROM sanpham WHERE id_sp = '$_GET[id_sp]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
    } else {
        $sql_update = "UPDATE sanpham SET masp='".$masp."', tensp='".$tensp."', gia='".$gia."', soluong='".$soluong."',
                                    noidung='".$noidung."', id_dmsp='".$id_dmsp."', tinhtrang='".$tinhtrang."'
                                    WHERE id_sp='$_GET[id_sp]'";
    }
    mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}else {
    $id=$_GET['id_sp'];
    $sql = "SELECT * FROM sanpham WHERE id_sp = '".$id."' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_delete = "DELETE FROM sanpham WHERE id_sp='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlysanpham&query=them');
}
