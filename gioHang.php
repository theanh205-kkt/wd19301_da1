<?php require_once "./views/layout/header.php"; ?>
<?php require_once "./views/layout/menu1.php"; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Slyour</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/dog.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./views/assets1/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./views/assets1/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="./views/assets1/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="./views/assets1/css/plugins/slick.min.css">
    <link rel="stylesheet" href="./views/assets1/css/plugins/animate.css">
    <link rel="stylesheet" href="./views/assets1/css/plugins/nice-select.css">
    <link rel="stylesheet" href="./views/assets1/css/plugins/jqueryui.min.css">
    <link rel="stylesheet" href="./views/assets1/css/style.css">
    
</head>
<main>
    <!-- breadcrumb area start -->
    
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Ảnh sản phẩm</th>
                                        <th class="pro-title">Tên sản phẩm</th>
                                        <th class="pro-price">Giá</th>
                                        <th class="pro-quantity">Số lượng</th>
                                        <th class="pro-subtotal">Tổng tiền</th>
                                        <th class="pro-remove">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $tongGioHang = 0;

                                    foreach ($chiTietGioHang as $key => $sanPham) {
                                        ?>
                                        <form action="<?= BASE_URL . '?act=xoa-san-pham-gio-hang' ?>" method="POST">
                                            <input type="hidden" name="chi_tiet_gio_hang_id" value="<?= $sanPham['id'] ?>">
                                            <tr>
                                                <td class="pro-thumbnail"><img class="img-fluid" src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="Product" /></a></td>
                                                <td class="pro-title"><?= $sanPham['ten_san_pham'] ?></td>
                                                <td class="pro-price"><span>
                                                    <?php if ($sanPham['gia_khuyen_mai'] > 0) { ?>
                                                        <?= formatPrice($sanPham['gia_khuyen_mai']) . ' đ' ?>
                                                    <?php } else { ?>
                                                        <?=formatPrice( $sanPham['gia_san_pham']) . ' đ' ?>
                                                    <?php } ?>
                                                    </span></td>
                                                <td class="pro-quantity">
                                                    <?= $sanPham['so_luong'] ?>
                                                </td>
                                                <td class="pro-subtotal"><span>
                                                    <?php
                                                    $tongTien = 0;
                                                    if ($sanPham['gia_khuyen_mai'] > 0) {
                                                        $tongTien =  $sanPham['gia_khuyen_mai'] * $sanPham['so_luong'];
                                                    } else {
                                                        $tongTien = $sanPham['gia_san_pham'] * $sanPham['so_luong'];
                                                    }
                                                    $tongGioHang += $tongTien;
                                                    echo formatPrice($tongTien) . 'đ';
                                                    ?>
                                                    </span></td>
                                                <td class="pro-remove"><button type="submit"><i class="fa fa-trash-o"></i></button></td>
                                            </tr>
                                        </form>
                                        <?php
                                    }?>


                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Tổng đơn hàng</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Tổng tiền sản phẩm</td>
                                            <td><?= formatPrice($tongGioHang) . 'đ' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Vận chuyển</td>
                                            <td>30.000 đ</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Tổng thanh toán</td>
                                            <td class="total-amount"><?= formatPrice($tongGioHang + 30000) ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="<?= BASE_URL . '?act=thanh-toan' ?>" class="btn btn-sqr d-block">Tiến hành đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
    <script src="./views/assets1/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="./views/assets1/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="./views/assets1/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="./views/assets1/js/plugins/slick.min.js"></script>
        <script src="./views/assets1/js/plugins/countdown.min.js"></script>
        <script src="./views/assets1/js/plugins/nice-select.min.js"></script>
        <script src="./views/assets1/js/plugins/jqueryui.min.js"></script>
        <script src="./views/assets1/js/plugins/image-zoom.min.js"></script>
        <script src="./views/assets1/js/plugins/imagesloaded.pkgd.min.js"></script>
        <script src="./views/assets1/js/plugins/ajaxchimp.js"></script>
        <script src="./views/assets1/js/plugins/ajax-mail.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
        <script src="./views/assets1/js/plugins/google-map.js"></script>
        <script src="./views/assets1/js/main.js"></script>
</main>



<?php require_once "./views/layout/footer.php"; ?>
