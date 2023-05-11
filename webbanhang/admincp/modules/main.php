<div class="main">
                        <?php
                        if (isset($_GET['action']) && $_GET['query']) {
                            $tam = $_GET['action'];
                            $query = $_GET['query'];
                        } else {
                            $tam = '';
                            $query = '';
                        }
                        if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
                            include("modules/quanlydanhmucsp/add.php");
                            include("modules/quanlydanhmucsp/listed.php");
                        }elseif($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
                            include("modules/quanlydanhmucsp/edit.php");
                        }elseif($tam == 'quanlysanpham' && $query == 'them'){
                            include("modules/quanlysp/add.php");
                            include("modules/quanlysp/listed.php");
                        }elseif($tam == 'quanlysanpham' && $query == 'sua'){
                            include("modules/quanlysp/edit.php");
                        }elseif($tam == 'donhang' && $query == 'xemdonhang'){
                            include("modules/quanlydonhang/details.php");
                        }elseif($tam == 'quanlydonhang' && $query == 'them'){
                            include("modules/quanlydonhang/listed.php");
                        }elseif($tam == 'quanlydonhang' && $query == 'listed'){
                            include("modules/quanlydonhang/listed.php");
                        }else{
                            include("modules/dashboard.php");
                        }
                        ?>
</div>