<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<!-- <div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
        <h1 class="centertext"><?= esc($title) ?></h1>
</div> -->
<div class="boxp col-lg-12">
    <div class="container p-5">
        <div class="row">
        <?php 
        if($newnews):
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="container">

                <div style="height: 400px; border-radius: 10px; text-align: center;">
                    <img style="border-radius: 5px; height: 100%; max-width: 100%; object-fit: cover;" src="<?php echo base_url($newnews['news_image']);?>">
                </div>
                <!-- <br>
                <div class="row">
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;"></div>
                    </div>
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;"></div>
                    </div>
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;"></div>
                    </div>
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;"></div>
                    </div>
                    <div class="col-lg-2">
                        <div style="height: 80px; background-color:rgb(216, 216, 216); border-radius: 5px;"></div>
                    </div>
                </div> -->
            </div>

        </div>
        <div class="col-lg-6">
            <h5>
                <b>
                    <?php echo $newnews['news_name'];?>
                </b>
            </h5>
            <p>
                <?php echo $newnews['news_detail'];?>
            </p>
        </div>
        <?php 
        endif;
        ?>
        </div>
        <div>
        <div class="col-lg-8 shadow-sm">
                                    <div class="">
                                        <p><?php echo substr($news['news_detail'], 0, 1922); ?></p>
                                        <div class="d-flex justify-content-end">
                                            <a class="btn-outline-secondary" href="<?php echo base_url('news/'); ?>"><?= _return ?></a>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
</div>