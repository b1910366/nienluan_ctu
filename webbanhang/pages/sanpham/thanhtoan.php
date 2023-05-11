<?php
    session_start();
    include("../../admincp/config/connect.php");
    require('../../carbon/vendor/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    $id_khachhang = $_SESSION['id_khachhang'];
    $ma_giohang = rand(0, 999999);
    //$tong_giohang = $_SESSION[$sum];
    $insert_giohang = "INSERT INTO giohang (id_khachhang, ma_giohang, tinhtrang_giohang, ngay_giohang) VALUE ('".$id_khachhang."', '".$ma_giohang."', 1, '".$now."')";

    $giohang_query = mysqli_query($mysqli, $insert_giohang);
    if ($giohang_query){
        foreach($_SESSION['cart'] as $key => $value) {
            $id_sp = $value['id_sp'];
            $soluongmua = $value['soluong'];

            $giohang = "SELECT * FROM giohang WHERE ma_giohang = '".$ma_giohang."' LIMIT 1";
            $query_giohang = mysqli_query($mysqli, $giohang);
            $row_giohang = mysqli_fetch_array($query_giohang);
            
            $insert_chitiet_giohang = "INSERT INTO chitiet_giohang (ma_giohang, id_sp, id_giohang, soluongmua) VALUE ('".$ma_giohang."', '".$id_sp."', '".$row_giohang['id_giohang']."', '".$soluongmua."')";
            mysqli_query($mysqli, $insert_chitiet_giohang);

            $update_slsp = "UPDATE sanpham SET soluong = (soluong-'".$soluongmua."') WHERE id_sp=$id_sp";
            mysqli_query($mysqli, $update_slsp);

            $check_sp = "SELECT * FROM sanpham WHERE id_sp = '".$id_sp. "' LIMIT 1";
            $query_check_sp = mysqli_query($mysqli, $check_sp);
            $row_check_sp = mysqli_fetch_array($query_check_sp);
            if ($row_check_sp['soluong'] == 0) {
                $update_tinhtrang_sp = "UPDATE sanpham SET tinhtrang = 0 WHERE id_sp=$id_sp";
                mysqli_query($mysqli, $update_tinhtrang_sp);
            }

        }
    }
    unset($_SESSION['cart']);
    header('Location: ../camon.php');
?>