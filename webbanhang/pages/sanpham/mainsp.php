<div class="main">
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 d-md-block sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <?php
                    include("sidebarsp.php");
                    ?>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="main_sp">
                        <?php
                        if (isset($_GET['quanly'])) {
                            $tam = $_GET['quanly'];
                        } else {
                            $tam = '';
                        }
                        if ($tam == 'hienthisp') {
                            include("hienthisp.php");
                        }elseif ($tam == 'timkiem') {
                            include("timkiem.php");
                        }elseif ($tam == 'camon') {
                            include("camon.php");
                        }elseif ($tam == 'chitietsp') {
                            include("chitietsp.php");
                        }
                        elseif ($tam == 'themgiohang') {
                            include("themgiohang.php");
                        }else {
                            include("tatcasp.php");
                        }
                        ?>
                    </div>
                </div>

                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="767" height="323" style="display: block; height: 10px; width: 614px;"></canvas>
            </main>
        </div>
    </div>
</div>