<?php
require('../../../carbon/vendor/autoload.php');
include('../../config/connect.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();



$sql_listed_dh = "SELECT * FROM giohang ORDER BY giohang.id_giohang DESC";
$query_listed_dh = mysqli_query($mysqli, $sql_listed_dh);


if (isset($_GET['ma_donhang'])) {
    if ($_GET['tinhtrang_giohang'] == 1) {
        $ma_donhang = $_GET['ma_donhang'];
        $sql = mysqli_query($mysqli, "UPDATE giohang SET tinhtrang_giohang = 0, ngay_xuly = '$now' WHERE ma_giohang='" . $ma_donhang . "'");

        //thong ke doanh thu
        $sql_lietke_dh = "SELECT * FROM chitiet_giohang, sanpham WHERE chitiet_giohang.id_sp = sanpham.id_sp AND chitiet_giohang.ma_giohang = '$ma_donhang' ORDER BY chitiet_giohang.id_ctgiohang DESC";
        $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

        $sql_thongke = "SELECT * FROM thongke WHERE ngay_thongke='$now'";
        $query_thongke = mysqli_query($mysqli, $sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while ($row = mysqli_fetch_array($query_lietke_dh)) {
            $soluongban += $row['soluongmua'];
            $tongtien = $row['soluongmua'] * $row['gia'];
            $doanhthu += $tongtien;
        }

        if (mysqli_num_rows($query_thongke) == 0) {
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $donhang = 0;
            $sql_update_thongke = mysqli_query($mysqli, "INSERT INTO thongke (ngay_thongke, soluongban, doanhthu, donhang) VALUE ('$now', '$soluongban', '$doanhthu', '$donhang')");
        } elseif (mysqli_num_rows($query_thongke) != 0) {
            while ($row_tk = mysqli_fetch_array($query_thongke)) {
                $soluongban = $row_tk['soluongban'] + $soluongban;
                $doanhthu = $row_tk['doanhthu'] + $doanhthu;
                $donhang = $row_tk['donhang'] + 1;
                $sql_update_thongke = mysqli_query($mysqli, "UPDATE thongke SET soluongban='$soluongban', doanhthu='$doanhthu', donhang='$donhang' WHERE ngay_thongke = '$now'");
            }
        }
    } else {
        $ma_donhang = $_GET['ma_donhang'];
        $sql = mysqli_query($mysqli, "UPDATE giohang SET tinhtrang_giohang = 1, ngay_xuly = NULL WHERE ma_giohang='" . $ma_donhang . "'");

        //thong ke doanh thu
        $sql_lietke_dh = "SELECT * FROM chitiet_giohang, sanpham WHERE chitiet_giohang.id_sp = sanpham.id_sp AND chitiet_giohang.ma_giohang = '$ma_donhang' ORDER BY chitiet_giohang.id_ctgiohang DESC";
        $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

        $sql_thongke = "SELECT * FROM thongke WHERE ngay_thongke='$_GET[ngay_xuly]'";
        $query_thongke = mysqli_query($mysqli, $sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while ($row = mysqli_fetch_array($query_lietke_dh)) {
            $soluongban += $row['soluongmua'];
            $tongtien = $row['soluongmua'] * $row['gia'];
            $doanhthu += $tongtien;
        }

        if (mysqli_num_rows($query_thongke) == 0) {
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $donhang = 0;
            $sql_update_thongke = mysqli_query($mysqli, "INSERT INTO thongke (ngay_thongke, soluongban, doanhthu, donhang) VALUE ('$now', '$soluongban', '$doanhthu', '$donhang')");
        } elseif (mysqli_num_rows($query_thongke) != 0) {
            while ($row_tk = mysqli_fetch_array($query_thongke)) {
                $soluongban = $row_tk['soluongban'] - $soluongban;
                $doanhthu = $row_tk['doanhthu'] - $doanhthu;
                $donhang = $row_tk['donhang'] -1 ;
                $sql_update_thongke = mysqli_query($mysqli, "UPDATE thongke SET soluongban='$soluongban', doanhthu='$doanhthu', donhang='$donhang' WHERE ngay_thongke = '$_GET[ngay_xuly]'");
            }
        }
    }


    // while($row = mysqli_fetch_array($query_lietke_dh)){
    //     $soluongmua += $row['soluongmua'];
    //     //$tongtien = $row['soluongmua'] * $row['gia'];
    //     $doanhthu += $row['gia'];
    // }

    header("Location: ../../index.php?action=quanlydonhang&query=listed");
}
