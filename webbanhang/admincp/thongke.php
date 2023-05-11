<?php
    require('../carbon/vendor/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include ('../admincp/config/connect.php');
    if(isset($_POST['thoigian'])) {
        $thoigian = $_POST['thoigian'];
    }else {
        $thoigian='';
        $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    }

    if($thoigian == '7days'){
        $subdays = Carbon::now()->subdays(7)->toDateString();
    } else if($thoigian == '28days'){
        $subdays = Carbon::now()->subdays(28)->toDateString();
    } else if($thoigian == '90days'){
        $subdays = Carbon::now()->subdays(90)->toDateString();
    } else {
        $subdays = Carbon::now()->subdays(365)->toDateString();
    }

    //$subdays = Carbon::now()->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh');

    $sql = "SELECT * FROM thongke WHERE ngay_thongke BETWEEN '$subdays' AND '$now' ORDER BY ngay_thongke ASC";
    $sql_query = mysqli_query($mysqli, $sql);

    while($val = mysqli_fetch_array($sql_query)){
        $chart_data[] = array(
            'date' => $val['ngay_thongke'],
            'order' => $val['donhang'],
            'sales' => $val['doanhthu'],
            'quantity' => $val['soluongban']
        );
    }
    //print_r($chart_data); 
    echo $data = json_encode($chart_data);
?>