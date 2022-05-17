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
<style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style>
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


<!-- แถบข้างๆ -->

