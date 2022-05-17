<style>
    .container2 {
        position: relative;
        text-align: center;
        color: black;
        font-size: 34pt;
    }

    .centered {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @media only screen and (max-width: 1024px) {
        .centered {
            position: absolute;
            top: 68%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img-pro {
            height: 250px;
        }

        .container2 {
            position: relative;
            text-align: center;
            color: black;
            font-size: 26pt;
        }

        .carousel-caption {
            top: 84%;
        }
    }

    @media only screen and (max-width: 800px) {
        .centered {
            position: absolute;
            top: 68%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img-pro {
            height: 230px;
        }

        .container2 {
            position: relative;
            text-align: center;
            color: black;
            font-size: 20pt;
        }

        .carousel-caption {
            top: 81%;
        }
    }

    @media only screen and (max-width: 600px) {
        .centered {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img-pro {
            height: 180px;
        }

        .container2 {
            position: relative;
            text-align: center;
            color: black;
            font-size: 12pt;
        }
    }
</style>

<!-- <div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div> -->
<!-- <div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
        <h1 class="centertext"><?= esc($title) ?></h1>
</div> -->

<div class="container2">
    <img class="img-pro" src="<?php echo base_url('assets/image/system/bg_deteil.jpg'); ?>" alt="Snow" style="width:100%;">
    <div class="centered"><?php echo $product_obj['product_name']; ?></div>
</div>

<div class="boxp col-lg-12">
    <div class="container">
        <div class="row">
            <?php
            if ($product_obj) :
            ?>
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="container">
                        <div style="height: 400px; border-radius: 10px; text-align: center;">
                            <img style="border-radius: 5px; height: 100%; max-width: 100%; object-fit: cover;" src="<?php echo base_url($product_obj['product_image']); ?>">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12">
                    <h5>
                        <b>
                            <?php echo $product_obj['product_name']; ?>
                        </b>
                    </h5>
                    <p>
                        <?php echo $product_obj['product_detail']; ?>
                    </p>
                    <div class="btn-group">
                        <a class="btn btn-outline-success" href="<?php echo base_url('buy/' . $product_obj['product_id']); ?>"><?= _Buy ?></a>
                        <a style="margin-left: 5%;" class="btn btn-outline-secondary" href="<?php echo base_url('products/id=' .$product_obj['product_id']); ?>">ย้อนกลับ</a>
                    </div>
                    <?php  ?>
                    <script>
                    </script>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        if ($product_obj['img1'] != "") { ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('/uploads/img_product/' . $product_obj['img1']); ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;"><?php echo $product_obj['name_img1']; ?></h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if ($product_obj['img2'] != "") { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/uploads/img_product/' . $product_obj['img2']); ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;"><?php echo $product_obj['name_img2']; ?></h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if ($product_obj['img3'] != "") { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/uploads/img_product/' . $product_obj['img3']); ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;"><?php echo $product_obj['name_img3']; ?></h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if ($product_obj['img4'] != "") { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/uploads/img_product/' . $product_obj['img4']); ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;"><?php echo $product_obj['name_img4']; ?></h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if ($product_obj['img5'] != "") { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('/uploads/img_product/' . $product_obj['img5']); ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;"><?php echo $product_obj['name_img5']; ?></h5>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            <?php
            endif;
            ?>
        </div>
    </div>
</div>