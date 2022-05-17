<!-- <div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
    <h1 class="centertext">ติดต่อเรา</h1>
</div>
<div class="boxp col-lg-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-ms-12">
                <table>
                    <tr>
                        <td colspan="2">
                            <h4>บริษัท เป็นหนึ่ง โฮลดิ้ง จำกัด</h4><br>
                        </td>
                    </tr>
                    <tr>
                        <td>สำนักงานใหญ่ : </td>
                        <td> อาคารเป็นหนึ่ง 576/18 ถ.ลาดพร้าว 112</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>แขวงพลับพลา เขตวังทองหลาง กรุงเทพ ฯ 10310</td>
                    </tr>
                    <tr>
                        <td>สาขาเชียงใหม่ :</td>
                        <td>298/12 หมู่บ้านอรสิริน 14
                            หมู่ 5 ต.ป่าไผ่ อ.สันทราย จ.เชียงใหม่
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>โทร : </td>
                        <td> 02 150 6700 , 093 654 5544</td>
                    </tr>
                    <tr>
                        <td>Page : </td>
                        <td> เป็นหนึ่ง - ห้องสมุดอัจฉริยะ</td>
                    </tr>
                    <tr>
                        <td>Line : </td>
                        <td>ID pennueng.holding</td>
                    </tr>
                    <tr>
                        <td>ฝ่ายขาย : </td>
                        <td> sales@pen1.biz</td>
                    </tr>
                    <tr>
                        <td>ฝ่ายบริการ : </td>
                        <td> customerservice@pen1.biz</td>
                    </tr>
                    <tr>
                        <td>โทร : </td>
                        <td> 02-216-8144 (อัตโนมัติ)</td>
                    </tr>
                    <tr>
                        <td>แฟกซ์ : </td>
                        <td> 02-215-2067</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6 col-md-6 col-ms-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.5455779072292!2d100.61496668356745!3d13.773376140863634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2992e92321475%3A0x5277dd21da97f149!2z4LmA4Lib4LmH4LiZ4Lir4LiZ4Li24LmI4LiHIOC5guC4ruC4peC4lOC4tOC5ieC4hw!5e0!3m2!1sth!2sth!4v1623053638446!5m2!1sth!2sth" width="100%" height="100%" style="border:0; border-radius: 0.5em;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div> -->

<?php
// ส่วนกำหนดสำหรับการเรียกใช้เมนูภาษา ตามที่ผู้ใช้เลือก กรณีเริ่มต้น จะเป็นภาษาอังกฤษ
$pathLang = (!isset($_COOKIE['ck_lang']) || $_COOKIE['ck_lang'] == "") ? "en" : $_COOKIE['ck_lang'];
include($pathLang . "/index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>

<body>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div style="margin:auto;width:600px;">
        <br />
        <a href="javascript:setLang('th');">Thai</a>
        <a href="javascript:setLang('en');">Eng</a>
        <br />
        <br />
        <br />
        <a href="#"><?= _Home ?></a> |
        <a href="#" target="_blank"><?= _About_Us ?></a> |
        <a href="#" target="_blank"><?= _Contact_Us ?></a>

    </div>




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

</body>

</html>