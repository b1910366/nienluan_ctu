<?php
    session_start();
    include('../../admincp/config/connect.php');
    //them sl
    if(isset($_GET['cong'])) {
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id_sp'] != $id){
                $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                            $_SESSION['cart'] = $product_tocart;    
            }else{
                $cong = $cart_item['soluong'] + 1;
                if($cart_item['soluong']<10){
                    $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cong, 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                }else{
                    $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product_tocart;
            }
            
        }
        header('Location:../giohang.php');
    }
    //tru sl
    if(isset($_GET['tru'])) {
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id_sp'] != $id){
                $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                            $_SESSION['cart'] = $product_tocart;    
            }else{
                $tru = $cart_item['soluong'] - 1;
                if($cart_item['soluong']>1){
                    $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$tru, 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                }else{
                    $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                }
                $_SESSION['cart'] = $product_tocart;
            }
            
        }
        header('Location:../giohang.php');
    }
    //xoa sp
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id_sp'] != $id){
                $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                            'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);            
            }
            $_SESSION['cart'] = $product_tocart;
            header('Location:../giohang.php');
        }
    }
    //xoa toan bo sp trong gio
    if(isset($_GET['xoatatca']) && ($_GET['xoatatca'] == 1)){
        unset($_SESSION['cart']);
        header('Location:../giohang.php');
    }
    //them sp
    // 
    if(isset($_POST['themgiohang'])) {
        //session_destroy();
        $id_sp = $_GET['idsp'];
        $soluong = 1;
        $sql = "SELECT * FROM sanpham WHERE id_sp = '".$id_sp."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);

        if($row) {
            $new_product_tocart = array(array('tensp'=>$row['tensp'], 'id_sp'=>$id_sp, 'soluong'=>$soluong, 'giasp'=>$row['gia'],
            'hinhanh'=>$row['hinhanh'], 'masp'=>$row['masp']));
            
            if(isset($_SESSION['cart'])) {
                $found = false;
                
                foreach($_SESSION['cart'] as $cart_item) {
                    if (($cart_item['id_sp'] == $id_sp))  {
                        $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                        $found = true;
                    } else {
                        $product_tocart[] = array('tensp'=>$cart_item['tensp'], 'id_sp'=>$cart_item['id_sp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                    }
                }
                if($found == false) {
                    $_SESSION['cart'] = array_merge($product_tocart, $new_product_tocart);
                } else {
                    $_SESSION['cart'] = $product_tocart;
                }

            }else {
                $_SESSION['cart'] = $new_product_tocart;
            }
        }
        header('Location:../giohang.php');
        
    }

?>
