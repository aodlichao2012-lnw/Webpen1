<?php
// ส่วนกำหนดสำหรับการเรียกใช้เมนูภาษา ตามที่ผู้ใช้เลือก กรณีเริ่มต้น จะเป็นภาษาอังกฤษ
$pathLang = (!isset($_COOKIE['ck_lang']) || $_COOKIE['ck_lang'] == "") ? "en" : $_COOKIE['ck_lang'];
include($pathLang . "/index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,700&family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/templates.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>

<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
    }
</style>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img style="max-height: 50px;" src="<?php echo base_url('assets/image/system/logopennueng.png'); ?>" width="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="<?php echo base_url('home'); ?>"><?= _Home ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('about'); ?>" style="color: white;"><?= _About_Us ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <?= _Product ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('products'); ?>"><?= _product2 ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('library_rfid'); ?>"><?= _product_name1 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name2 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name3 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name4 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name5 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name6 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name7 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name8 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name9 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name10 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name11 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name12 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name13 ?></a></li>
                            <li><a class="dropdown-item" href=""><?= _product_name14 ?></a></li>

                            <!-- <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?= _Intelligent_library ?></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('library_rfid'); ?>">ระบบห้องสมุดอัจฉริยะด้วย RFID</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('p_detail/11'); ?>"><?= _Smart_door ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Smart_circuit_board ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Automatic_library ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Loan_service_kit ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Support_mobile_storage_kits ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Automatic_library_material_return_device ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Circuit_board_data_coding_kit ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Intelligent_Library_System_Control_Unit ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Library_membership_card ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Training_and_maintenance ?></a></li>
                                    <li><a class="dropdown-item" href="#"><?= _Other_details ?></a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">ระบบป้องกันการจารกรรมทรัพย์สิน</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">ระบบบาร์โค้ด</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">เครื่องพิมพ์บาร์โค้ด</a></li>
                                    <li><a class="dropdown-item" href="#">เครื่องอ่านบาร์โค้ด</a></li>
                                    <li><a class="dropdown-item" href="#">โปรแกรมออกแบบบาร์โค้ด</a></li>
                                    <li><a class="dropdown-item" href="#">ริบบอน (Ribbon)</a></li>
                                    <li><a class="dropdown-item" href="#">เครื่องติดสติ๊กเกอร์ TOWA</a></li>
                                    <li><a class="dropdown-item" href="#">สติ๊กเกอร์บาร์โค้ดสำเร็จ</a></li>
                                    <li><a class="dropdown-item" href="#">สติ๊กเกอร์บาร์โค้ดเปล่า</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">ระบบ POS</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo base_url('p_detail/8'); ?>">โปรแกรม POS</a></li>
                                    <li><a class="dropdown-item" href="#">ลิ้นชักเก็บเงิน (Cash Drawer)</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">เครื่องยิงป้ายราคา</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">เครื่องยิงป้ายราคา run number</a></li>
                                    <li><a class="dropdown-item" href="#">เครื่องยิงป้ายราคา หนึ่งบรรทัด</a></li>
                                    <li><a class="dropdown-item" href="#">เครื่องยิงป้ายราคา สองบรรทัด</a></li>
                                    <li><a class="dropdown-item" href="#">เครื่องติดป้ายราคา Tagger</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">สติ๊กเกอร์</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">สติ๊กเกอร์สำเร็จรูป</a></li>
                                    <li><a class="dropdown-item" href="#">สติ๊กเกอร์โลโก้</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a class="dropdown-item" href="#">Book Wing สำหรับปกป้องหนังสือ</a></li>
                            <li><a class="dropdown-item" href="#">บริการพิมพ์งานออฟเซท</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('service'); ?>" style="color: white;"><?= _Service ?></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url('promotion'); ?>"><?= _Promotion ?></a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <?= _recommend ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('video'); ?>"><?= _recommend_product ?></a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('promotion'); ?>"><?= _Promotion ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('news'); ?>" style="color: white;"><?= _News ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('article'); ?>" style="color: white;"><?= _Order ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('works'); ?>" style="color: white;"><?= _Job ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('support'); ?>" style="color: white;"><?= _Support ?></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <?= _Language ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="javascript:setLang('th');"><u>TH</u></a></li>
                            <li><a class="dropdown-item" href="javascript:setLang('en');"><u>EN</u></a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="javascript:setLang('th');" style="color: white;"><u>TH</u></a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:setLang('en');" style="color: white;"><u>EN</u></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contect'); ?>">ติดต่อเรา</a></li> -->
                </ul>
            </div>
            <div class="navbar-collapse collapse  order-3 dual-collapse2">
                <ul class="navbar-nav social-network social-circle ml-auto">
                    <li><a href="https://www.facebook.com/pen1.biz/" target="_blank" style="background-color: #000099;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://line.me/ti/p/rVmlamr6ke" target="_blank" style="background-color: #00CC00;"><i class="fa fa-qrcode"></i></a></li>
                    <li><a href="Mailto:sales@pen1.biz" target="_blank" style="background-color: #FF0000;"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="fb-customerchat col-md-2" page_id="123661941002428"></div>
        <!-- <div class="fb-customerchat col-md-2" page_id="123661941002428"></div> -->
        <!-- PenNueng -->
    </nav>
</body>



<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });


        return false;
    });
</script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '366523618557788',
            //appId: '366523618557788', //PenNueng
            autoLogAppEvents: true,
            xfbml: true,
            version: 'v11.0'
        });
    };
</script>

<script type="text/javascript">
    function setLang(langID) { //ฟังก์ชัน javascript สำหรับกำหนด ตัวแปร cookie ภาษา
        var days = 365; // กำหนดจำนวนวันที่ต้องการให้จำค่า  
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
        document.cookie = "ck_lang=" + langID + "; expires=" + expires + "; path=/";
        window.location.reload()
    }
</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>