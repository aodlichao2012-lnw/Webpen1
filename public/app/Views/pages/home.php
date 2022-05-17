<?php

use App\Models\ProductModel;
use App\Models\NewnewsModel;

$ProductModel = new ProductModel();
$product = $ProductModel->orderBy('type_product', 'ASC')->findAll();

$data1 = $product[0];
$data2 = $product[1];

$arrLength = count($product);

if ($i + 1 == $arrLength) {
    $isEven = false;
} else {
    $isEven = true;
}


$NewnewsModel = new NewnewsModel();
$news = $NewnewsModel->orderBy('news_id ', 'DESC')->findAll();
$newsLength = count($news);

for ($i = 0; $i < $newsLength / 4; $i++) {
    $newsFirst = $news[$i];
    $newsSecond = $news[$i + 1];
    $newsThree = $news[$i + 2];
    $newsFour = $news[$i + 3];
}

?>


<!-- แถบข้างๆ -->
<div class="row">
    <div class="col-sm-2" >
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
                        <div class="art-box art-blockcontent">
            <div class="art-box-body art-blockcontent-body">
        
        
<!--swMenuFree7.2_J2.5 transmenu by http://www.swmenupro.com-->
<table id="menu_wrap" class="swmenu" align="left"><tbody><tr><td id="td_menu_wrap" class="td_menu_wrap">
<table cellspacing="0" cellpadding="0" id="swmenu" class="swmenu"> 
<tbody><tr> 

</tbody></table></td></tr></tbody></table><hr style="display:block;clear:left;margin:-0.66em 0;visibility:hidden;">  
<div id="subwrap"> 
<script type="text/javascript">

if (TransMenu.isSupported()) {
var ms = new TransMenuSet(TransMenu.direction.right, -100, 0, TransMenu.reference.topRight);
var menu468 = ms.addMenu(document.getElementById("menu468"));
 menu468.addItem("Intelligent Library System with RFID", "/newwww/index.php/en/product/intelligent-library", "0");
var menu689 = menu468.addMenu(menu468.items[0],-12,0);
menu689.addItem("Intelligent Sensors Gate", "/newwww/index.php/en/product/intelligent-library/intelligent-sensors-gate", "0");
menu689.addItem("Circulation Circuit", "/newwww/index.php/en/product/intelligent-library/circulation-circuit", "0");
menu689.addItem("Patron Self-Checkout", "/newwww/index.php/en/product/intelligent-library/patron-self-checkout", "0");
menu689.addItem("Staff Station Reader", "/newwww/index.php/en/product/intelligent-library/staff-station-reader", "0");
menu689.addItem("Inventory Portable Reader", "/newwww/index.php/en/product/intelligent-library/inventory-portable-reader", "0");
menu689.addItem("Book Drop Unit", "/newwww/index.php/en/product/intelligent-library/book-drop-unit", "0");
menu689.addItem("Circulation Circuit Programming Station", "/newwww/index.php/en/product/intelligent-library/circulation", "0");
menu689.addItem("ILS Controller", "/newwww/index.php/en/product/intelligent-library/ils", "0");
menu689.addItem("RFID Patron Cards", "/newwww/index.php/en/product/intelligent-library/rfid-patron-cards", "0");
menu689.addItem("Training and system maintenance", "/newwww/index.php/en/product/intelligent-library/training-and-system-maintenance", "0");
menu689.addItem("Other details", "/newwww/index.php/en/product/intelligent-library/other-details", "0");
menu689.addItem("Our Sample References", "/newwww/index.php/en/product/intelligent-library/our-sample-references", "0");
menu689.addItem("RFID Map ", "/newwww/index.php/en/product/intelligent-library/rfid-31", "0");
menu468.addItem("Library Management Systems", "/newwww/index.php/en/product/library-management", "0");
var menu728 = menu468.addMenu(menu468.items[1],-12,0);
menu728.addItem("V-Knowledge ", "/newwww/index.php/en/product/library-management/v-knowledge-3", "0");
menu728.addItem("Mercury  ", "/newwww/index.php/en/product/library-management/mercury-3", "0");
menu468.addItem("Cash TopUp and Fine Payment Systems", "/newwww/index.php/en/product/cash", "0");
menu468.addItem("Warehouse Management System with RFID", "/newwww/index.php/en/product/warehouse-management-system-with-rfid", "0");
var menu771 = menu468.addMenu(menu468.items[3],-12,0);
menu771.addItem("Web Application", "/newwww/index.php/en/product/warehouse-management-system-with-rfid/web-application", "0");
menu771.addItem("Gate Portal Monitor ", "/newwww/index.php/en/product/warehouse-management-system-with-rfid/gate-portal-monitor", "0");
menu771.addItem("Handheld Application ", "/newwww/index.php/en/product/warehouse-management-system-with-rfid/handheld-application", "0");
menu468.addItem("Electromagnetic Security", "/newwww/index.php/en/product/electromagnetic", "0");
menu468.addItem("RF-EAS Systems", "/newwww/index.php/en/product/rf-eas", "0");
menu468.addItem("Barcode Systems", "/newwww/index.php/en/product/barcode", "0");
menu468.addItem("POS  ", "/newwww/index.php/en/product/pos-3", "0");
var menu720 = menu468.addMenu(menu468.items[7],-12,0);
menu720.addItem("POS ", "/newwww/index.php/en/product/pos-3/pos-3", "0");
menu720.addItem("Cash Drawer", "/newwww/index.php/en/product/pos-3/cash-drawer-3", "0");
menu468.addItem("Mifare Reader", "/newwww/index.php/en/product/mifare-reader", "0");
menu468.addItem("Hand Labeling Systems", "/newwww/index.php/en/product/hand-labeling", "0");
var menu734 = menu468.addMenu(menu468.items[9],-12,0);
menu734.addItem("Hand Labeling One-Line", "/newwww/index.php/en/product/hand-labeling/hand-labeling-one-line", "0");
menu734.addItem("Hand Labeling Two-Line", "/newwww/index.php/en/product/hand-labeling/hand-labeling-two-line", "0");
var menu740 = ms.addMenu(document.getElementById("menu740"));
 menu740.addItem("Service ", "/newwww/index.php/en/service-3/service", "0");
menu740.addItem("Transport", "/newwww/index.php/en/service-3/transport", "0");
function init() {
if (TransMenu.isSupported()) {
TransMenu.initialize();
document.getElementById("menu673").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu673").onmouseout = function() { this.className = ""; }
menu468.onactivate = function() {document.getElementById("menu468").className = "hover"; };
 menu468.ondeactivate = function() {document.getElementById("menu468").className = ""; };
 menu740.onactivate = function() {document.getElementById("menu740").className = "hover"; };
 menu740.ondeactivate = function() {document.getElementById("menu740").className = ""; };
 document.getElementById("menu746").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu746").onmouseout = function() { this.className = ""; }
document.getElementById("menu748").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu748").onmouseout = function() { this.className = ""; }
document.getElementById("menu750").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu750").onmouseout = function() { this.className = ""; }
document.getElementById("menu752").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu752").onmouseout = function() { this.className = ""; }
document.getElementById("menu754").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu754").onmouseout = function() { this.className = ""; }
document.getElementById("menu756").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu756").onmouseout = function() { this.className = ""; }
document.getElementById("menu758").onmouseover = function() {
ms.hideCurrent();
this.className = "hover";
}
document.getElementById("menu758").onmouseout = function() { this.className = ""; }
}}
TransMenu.dingbatSize = 0;
TransMenu.spacerGif = "";
TransMenu.dingbatOn = "";
TransMenu.dingbatOff = ""; 
TransMenu.sub_indicator = false;
TransMenu.menuPadding = 0;
TransMenu.itemPadding = 0;
TransMenu.shadowSize = 2;
TransMenu.shadowOffset = 3;
TransMenu.shadowColor = "#888";
TransMenu.shadowPng = "http://pen1.biz/newwww/modules/mod_swmenufree/images/transmenu/grey-40.png";
TransMenu.backgroundColor = "#3496BA";
TransMenu.backgroundPng = "http://pen1.biz/newwww/modules/mod_swmenufree/images/transmenu/white-90.png";
TransMenu.hideDelay = 642;
TransMenu.slideTime = 321;
TransMenu.selecthack = 0;
TransMenu.autoposition = 1;
TransMenu.fontFace = "";
TransMenu.fontColor = "#EBEFF5";
TransMenu.renderAll();
if ( typeof window.addEventListener != "undefined" )
window.addEventListener( "load", init, false );
else if ( typeof window.attachEvent != "undefined" ) {
window.attachEvent( "onload", init);
}else{
if ( window.onload != null ) {
var oldOnload = window.onload;
window.onload = function ( e ) {
oldOnload( e );
init();
}
}else
window.onload = init();
}
}

//--> 
</script></div>  

<!--End swMenuFree menu module-->

        
<div class="col">

<div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
                <div class="art-bar art-blockheader">
            <h3 class="" style="margin-top: 100px;">
           <?= _rama ?></h3>
        </div>
                
        		<div class="cleared"></div>
            </div>
        </div>
        
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
                <div class="art-bar art-blockheader">
            <!-- <h3 class="t">
        ทาง Rama Channel</h3> -->
        </div>
                <div class="art-box art-blockcontent">
            <div class="art-box-body art-blockcontent-body">
        
        <iframe title="Simple youtube module by JoomShaper.com" id="sp-simple-youtube109" type="text/html" width="300" height="160" src="http://www.youtube.com/embed/D7acFmnxgHw?wmode=Opaque" frameborder="0" allowfullscreen=""></iframe>
	

        
        		<div class="cleared"></div>
            </div>
        </div>
        
        
        		<div class="cleared"></div>
            </div>
        </div>
        
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
  
	
	</form>

        
        		<div class="cleared"></div>
            </div>
        </div>
        
        
        		<div class="cleared"></div>
            </div>
        </div>
        
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
                        <div class="art-box art-blockcontent">
            <div class="art-box-body art-blockcontent-body">
        
        
	<div id="djslider-loader124" class="djslider-loader">
    <div id="djslider124" class="djslider">
        <div id="slider-container124" class="slider-container">
        	<br />
            <div></div>
        </div>
        <!-- <div id="navigation124" class="navigation-container">
        	<img id="prev124" class="prev-button" src="http://pen1.biz/newwww//modules/mod_djimageslider/assets/prev.png" alt="Previous">
			<img id="next124" class="next-button" src="http://pen1.biz/newwww//modules/mod_djimageslider/assets/next.png" alt="Next">
			<img id="play124" class="play-button" src="http://pen1.biz/newwww//modules/mod_djimageslider/assets/play.png" alt="Play">
			<img id="pause124" class="pause-button" src="http://pen1.biz/newwww//modules/mod_djimageslider/assets/pause.png" alt="Pause">
        </div> -->
		<div id="cust-navigation124" class="navigation-container-custom">
							<span class="load-button load-button-active"></span>
			        </div>
    </div>
	</div>
	
	<div style="clear: both"></div>
        
        		<div class="cleared"></div>
            </div>
        </div>
        
        
        		<div class="cleared"></div>
            </div>
        </div>
        
        <div class="art-box art-block">
            <div class="art-box-body art-block-body">
        
                        <div class="art-box art-blockcontent">
            <div class="art-box-body art-blockcontent-body">
        
        <div class="itp-fblike-box col-xl-12">


<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&amp;appId=monchai's_wedding";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <fb:like-box href="http://www.facebook.com/pen1.biz" width="350" height="1000" colorscheme="dark" show_faces="true" border_color="" stream="true" header="false" force_wall="true" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;color_scheme=dark&amp;container_width=0&amp;force_wall=true&amp;header=false&amp;height=585&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpen1.biz&amp;locale=en_GB&amp;sdk=joey&amp;show_faces=true&amp;stream=true&amp;width=300"><span style="vertical-align: bottom; width: 300px; height: 1000px;"><iframe name="f2454121cc73dac" width="200px" height="1000px" data-testid="fb:like_box Facebook Social Plugin" title="fb:like_box Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/plugins/like_box.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df39dd039d273408%26domain%3Dpen1.biz%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fpen1.biz%252Ff24a41878bf3214%26relation%3Dparent.parent&amp;color_scheme=dark&amp;container_width=0&amp;force_wall=true&amp;header=false&amp;height=1000&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpen1.biz&amp;locale=en_GB&amp;sdk=joey&amp;show_faces=true&amp;stream=true&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 1000px;" class=""></iframe></span></fb:like-box>

</div>
        
        		<div class="cleared"></div>
            </div>
        </div>
        
        
        		<div class="cleared"></div>
            </div>
        </div>
        

  <div class="cleared"></div>
</div>

</div>
        </div>
        </div>  
<div   class="col">
<div class="col-lg-12 bg-light imgheadhome">
    <div class="child">
        <h1><?= _usage_leader ?><br><?= _system_rfid ?></h1>
        <p>
            <?= _home1 ?><br>
            <?= _home2 ?><br>
            <?= _home3 ?>
        </p>
    </div>
</div>

<!-- ทำไมต้องเรา ? -->

<div class="boxp col-lg-12">
    <div class="container">
        <h3 class="text-center"><b><?= _why ?></b></h3>
        <!-- <script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=www.natthanon.xyz&style=02&maxdigits=6'></script> -->
        <!-- count open web -->
        <!-- <?php
                if (file_exists("counter.txt")) {

                    $f = fopen("counter.txt", "r");

                    $data = fread($f, 5);
                    fclose($f);
                    $data++;
                } else {
                    $data = 0;
                }

                $f = fopen("counter.txt", "w");
                fputs($f, $data);
                fclose($f);

                $data = sprintf("%05d", $data);

                echo $data;
                ?> -->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/1.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center ">
                    <h4><?= _why1 ?></h4><br>
                    <p><?= _why2 ?><br> <?= _why3 ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/2.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center">
                    <h4><?= _why4 ?><br> <?= _why5 ?>
                    </h4>
                    <p><?= _why6 ?><br> <?= _why7 ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/3.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center">
                    <h4><?= _why8 ?><br> <?= _why9 ?>
                    </h4>
                    <p><?= _why10 ?><br>
                        <?= _why11 ?><br>
                        <?= _why12 ?><br>
                        <?= _why13 ?><br>
                        <?= _why14 ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/4.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center">
                    <h4><?= _why15 ?><br></h4><br>
                    <p>
                        <?= _why16 ?><br>
                        <?= _why17 ?><br>
                        <?= _why18 ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/5.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center">
                    <h4><?= _why19 ?><br> <?= _why20 ?>
                    </h4>
                    <p><?= _why21 ?><br> <?= _why22 ?></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="col-lg-8 offset-lg-2">
                    <div class="col-lg-12">
                        <img src="assets/image/system/6.jpg" class="card-img-top" width="100%">
                    </div>
                </div>
                <div class="card-body text-center">
                    <h4><?= _why23 ?><br></h4><br>
                    <p><?= _why24 ?></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ตัวอย่างผลงาน  -->

<div class="boxp col-lg-12 bg-light">
    <div class="container">
        <h3><?= _product2 ?></h3>
        <div id="carouselProduct" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <?php for ($i = 1; $i < $arrLength / 2; $i++) { ?>
                    <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="<?= $i ?>" aria-label="Slide <?= $i ?>"></button>
                <?php } ?>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 1rem;">
                            <a href="<?php echo base_url('p_detail/' . $data1['product_id']); ?>">
                                <!-- <div class="card" style="height: 20rem;">
                                <img src="<? //=$data1['product_image'];
                                            ?>" height="100%" class="d-block w-100 fiximage"> 
                            </div> -->
                                <div style="height: 300px; text-align: center;">
                                    <img class="fiximage" src="<?= $data1['product_image']; ?>">
                                </div>
                            </a>
                            <div class="text-center mt-3">
                                <h5><?= $data1['product_name']; ?></h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 1rem;">
                            <a href="<?php echo base_url('p_detail/' . $data2['product_id']); ?>">
                                <!-- <div class="card" style="height: 20rem;" >
                                <img src="<? //=$data2['product_image'];
                                            ?>" height="100%" class="d-block w-100 fiximage"> 
                            </div> -->
                                <div style="height: 300px; text-align: center;">
                                    <img class="fiximage" src="<?= $data2['product_image']; ?>">
                                </div>
                            </a>
                            <div class="text-center mt-3">
                                <h5><?= $data2['product_name']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                for ($i = 2; $i < $arrLength; $i += 2) {
                    $firstValue = $product[$i];
                    if ($isEven) {
                        $secondValue = $product[$i + 1];
                ?>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 1rem;">
                                    <a href="<?php echo base_url('p_detail/' . $firstValue['product_id']); ?>">
                                        <!-- <div class="card" style="height: 20rem;">
                                    <img src="<? //=$firstValue['product_image'];
                                                ?>" height="100%" class="d-block w-100 fiximage"> 
                                </div> -->
                                        <div style="height: 300px; text-align: center;">
                                            <img class="fiximage" src="<?= $firstValue['product_image']; ?>">
                                        </div>
                                    </a>
                                    <div class="text-center mt-3">
                                        <h5><?= $firstValue['product_name']; ?></h5>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 1rem;">
                                    <a href="<?php echo base_url('p_detail/' . $secondValue['product_id']); ?>">
                                        <!-- <div class="card" style="height: 20rem;">
                                    <img src="<? //=$secondValue['product_image'];
                                                ?>" height="100%" class="d-block w-100 fiximage"> 
                                </div> -->
                                        <div style="height: 300px; text-align: center;">
                                            <img class="fiximage" src="<?= $secondValue['product_image']; ?>">
                                        </div>
                                    </a>
                                    <div class="text-center mt-3">
                                        <h5><?= $secondValue['product_name']; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 1rem;">
                                    <a href="<?php echo base_url('p_detail/' . $firstValue['product_id']); ?>">
                                        <div style="height: 300px; text-align: center;">
                                            <img class="fiximage" src="<?= $firstValue['product_image']; ?>">
                                        </div>
                                    </a>
                                    <div class="text-center mt-3">
                                        <h5><?= $firstValue['product_name']; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div>
<div class="boxp col-lg-12">
    <div class="container">
        <h3 class="text-center"><?= _sample ?></h3>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card "><img src="assets/image/customer/1.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/2.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/3.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/4.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/5.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/6.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/7.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/8.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/9.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/10.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/11.jpg" style="width: 100%;"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6" style="padding: 1rem;">
                <div class="card"><img src="assets/image/customer/12.jpg" style="width: 100%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- เสียงจากผู้ใช้ -->

<div class="boxp col-lg-12 bg-light">
    <div class="container">
        <h3 class="text-center"><?= _user ?></h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                <div class="card p-4">
                    <div class="text-center">
                        <img src="assets/image/customer/1.jpg" width="50%">
                    </div>
                    <p style="text-align: left;">
                    <article style="text-align: left;color: palevioletred; font-style: italic;font-size: 35px;">"</article>
                    <?= _user1 ?><br> <?= _user2 ?>
                    <br> <?= _user3 ?>
                    </p>
                    <br>
                    <div class="text-center">
                        <p><?= _user3_2 ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                <div class="card p-4">
                    <div class="text-center">
                        <img src="assets/image/customer/2.jpg" width="50%">
                    </div>
                    <p style="text-align: left;">
                    <article style="text-align: left;color: palevioletred; font-style: italic;font-size: 35px;">"</article>
                    <?= _user4 ?><br> <?= _user5 ?>
                    <br> <?= _user6 ?>
                    </p>
                    <br>
                    <div class="text-center">
                        <p><?= _user6_2 ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                <div class="card p-4">
                    <div class="text-center">
                        <img src="assets/image/customer/3.jpg" width="50%">
                    </div>
                    <p style="text-align: left;">
                    <article style="text-align: left;color: palevioletred; font-style: italic;font-size: 35px;">"</article>
                    <?= _user7 ?><br> <?= _user8 ?>
                    <br> <?= _user9 ?>
                    </p>
                    <br>
                    <div class="text-center">
                        <p><?= _user9_2 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- เสียงจากผู้ใช้ -->

<div class="boxp col-lg-12 bg-light">
    <div class="container">
        <h3 class="text-center"><?= _our_Services ?></h3>
        <h5 class="text-center" style="color: blue;"><?= _our_Services1 ?></h5>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                <a href="<?php echo base_url('once'); ?>">
                    <div>
                        <div class=""><img src="assets/image/ma/1.png" style="width: 100%;"></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                <a href="<?php echo base_url('yearly'); ?>">
                    <div>
                        <div class=""><img src="assets/image/ma/2.png" style="width: 100%;"></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                <a href="<?php echo base_url('warran'); ?>">
                    <div>
                        <div class=""><img src="assets/image/ma/3.png" style="width: 100%;"></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 p-3">
                <a href="<?php echo base_url('out_warran'); ?>">
                    <div>
                        <div class=""><img src="assets/image/ma/4.png" style="width: 100%;"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 bg-light">
    <div class="col-lg-11">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
                <img src="assets/image/partner/partner.jpg" width="80%">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1><?= _partner ?></h1>
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card">
                            <img src="assets/image/partner/1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card" style="min-height: 4.5rem;"><img src="assets/image/partner/2.jpg"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card" style="min-height: 4.5rem;"><img src="assets/image/partner/3.jpg"></div>
                    </div> -->
                    <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card" style="min-height: 4.5rem;"><img src="assets/image/partner/4.jpg"></div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card" style="min-height: 4.5rem;"><img src="assets/image/partner/5.jpg"></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0.5rem;">
                        <div class="card" style="min-height: 4.5rem;"><img src="assets/image/partner/6.jpg"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- 2  -->

<br>
<br>