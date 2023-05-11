<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header("Location: dangnhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>AdminCP</title>
</head>

<body>
    <div class="container-fluid text-center">
        <a class="navbar-brand" href="index.php" alt="logo_andoquin"><img src="img/logo_andoquin.png"></a>
    </div>

    <?php
    include("config/connect.php");
    include("modules/header.php");
    include("modules/main.php");
    include("modules/footer.php");
    ?>

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        CKEDITOR.replace('noidung');
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        thongke();
        var char = new Morris.Area({
            // ID of the element in which to draw the chart.
            element: 'chart',
            xkey: 'date',
            
            ykeys: ['order', 'sales', 'quantity'],
            
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
        });
        
        $('.select-date').change(function(){
            var thoigian = $(this).val();
            if(thoigian == '7days'){
                var text = '7 ngày qua';
            } else if(thoigian == '28days'){
                var text = '28 ngày qua';
            } else if(thoigian == '90days'){
                var text = '90 ngày qua';
            } else {
                var text = '365 ngày qua';
            }
            $.ajax({
                url: "thongke.php",
                method: "POST",
                dataType:"JSON",
                data:{thoigian:thoigian},
                success:function(data){
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        })

        function thongke(){
            //var text = '365 ngày qua';
            $.ajax({
                url: "thongke.php",
                method: "POST",
                dataType:"JSON",

                success:function(data){
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        }
    });
    </script>
</body>

</html>