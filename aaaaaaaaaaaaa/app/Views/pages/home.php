<?php

use App\Models\ProductModel;
use App\Models\NewnewsModel;

$ProductModel = new ProductModel();
$product = $ProductModel->orderBy('product_id', 'DESC')->findAll();

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
<br>
<br>