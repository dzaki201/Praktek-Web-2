<?php
include_once '../../config.php';
    include_once '../../controllers/PemesananController.php';
    include_once '../../controllers/BusController.php';
    include_once '../../controllers/RuteController.php';
    
    $database = new database;
    $db = $database->getKoneksi();

    $busController = new BusController($db);
    $bus = $busController->getAllBus();
    $ruteController = new RuteController($db);
    $rute = $ruteController->getAllRute();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $pemesananController = new PemesananController($db);
        $pemesananData = $pemesananController->getPemesananById($id);

        if ($pemesananData) {
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $tanggal = $_POST['tanggal'];
                $id_bus = $_POST['id_bus'];
                $harga = $_POST['harga'];
                $nama_rute = $_POST['nama_rute'];

                $result = $pemesananController->updatePemesanan($id, $nama, $tanggal, $id_bus, $harga, $nama_rute);
                if ($result) {
                    header("location:pemesanan");
                } else {
                    header("location:editpemesanan");
                }
            }
        } else {
            echo "Pemesanan tidak ditemukan";
        }
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIPEBUS | PEMESANAN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <h2>SIPEBUS</h2>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle"><span><i
                                            class="notika-icon notika-menus"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <a href="logout.php">Log Out</a>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="home">Home</a>
                                </li>
                                <!-- </li>
                                <li class="nav-item">
                                  <a data-toggle="collapse" data-target="#demoevent" class="nav-link" href="rute">Rute</a>
                                </li>
                                <li class="nav-item">
                                  <a data-toggle="collapse" data-target="#demoevent" class="nav-link" href="bus">Bus</a>
                                </li>
                                <li class="nav-item">
                                  <a  data-toggle="collapse" data-target="#demoevent" class="nav-link" href="pencarian">Pencarian</a>
                                </li>
                                <li class="nav-item">
                                  <a data-toggle="collapse" data-target="#demoevent" class="nav-link" href="pemesanan">Pemesanan</a>
                                </li> -->
                                <li><a data-toggle="collapse" data-target="#demoevent" href="rute">rute</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="pencarian">pencarian</a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="pemesanan">pemesanan</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>
                                Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-app"></i> Tambah Data</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="pencarian">Pencarian</a>
                                </li>
                                <li><a href="pemesanan">Pemesanan</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="rute">Data Rute</a>
                                </li>
                                <li><a href="bus">Data Bus</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <h3 class="text-center mb-5">Edit Data Pemesanan</h3>
                        <?php if ($pemesananData) { ?>
                            <form action="" method="post">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Nama Pemesan</label>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group ">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control" name="nama"
                                                    value="<?php echo $pemesananData['nama'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Nama Pemesan</label>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <div class="form-group ">
                                            <div class="nk-int-st">
                                                <input type="date" class="form-control" name="tanggal"
                                                    value="<?php echo $pemesananData['tanggal'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Rute Bus</label>
                                    <div class="bootstrap-select fm-cmp-mg col-sm-10">
                                        <select name="nama_rute" class="selectpicker">
                                            <option selected>Pilih Rute</option>
                                            <?php foreach ($rute as $data): ?>
                                                <?php
                                                $selected = ($data['id_rute'] == $nama_rute) ? 'selected' : '';
                                                ?>
                                                <option value="<?php echo $data['nama_rute']; ?>" <?php echo $selected; ?>>
                                                    <?php echo $data['nama_rute']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Pesan Bus</label>
                                    <div class="bootstrap-select fm-cmp-mg col-sm-10">
                                        <select name="id_bus" class="selectpicker">
                                            <option selected>Pilih Bus</option>
                                            <?php foreach ($bus as $data): ?>
                                                <?php if ($data['status'] == 1): ?>
                                                    <?php
                                                    $selected = ($data['id_bus'] == $id) ? 'selected' : '';
                                                    ?>
                                                    <option value="<?php echo $data['id_bus']; ?>" <?php echo $selected; ?>>
                                                        <?php echo $data['id_bus'] . ' - ' . $data['tipe']; ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                <label class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <div class="form-group ">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control" name="harga" value="<?php echo $pemesananData['harga'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row ">
                                    <div class="col-sm-2"></div>
                                    <button type="submit" name="submit" value="Simpan"
                                        class="btn btn-primary col-sm-10">Simpan</button>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
    </body>

</html>