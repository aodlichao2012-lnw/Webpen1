<?php

?>
<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
    <h1 class="centertext"><?= _video ?></h1>
</div>
<div class="boxp col-lg-12">
    <div class="container">

        <?php
        if ($video) :
            $index = 1;
            foreach ($video as $videos) :
        ?>

                <div class="col-lg-12 pb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->

                        <div class="col-lg-4 shadow-sm">

                            <!--Modal: Name-->
                            <div class="modal fade" id="<?php echo ($videos['video_id']); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <!--Content-->
                                    <div class="modal-content">

                                        <!--Body-->
                                        <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                <iframe class="embed-responsive-item" src="<?php echo ($videos['videot_link']); ?>" allowfullscreen></iframe>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                    <!--/.Content-->

                                </div>

                            </div>
                            <!--Modal: Name-->

                            <a><img class="img-fluid z-depth-1" src="<?php echo base_url($videos['video_pic']); ?>" alt="video" data-toggle="modal" data-target="#<?php echo ($videos['video_id']); ?>"></a>

                        </div>

                        <div class="col-lg-8 shadow-sm">
                            <div class="">
                                <p><b><?php echo ($videos['video_name']); ?></b></p>
                                <p><?php echo substr($videos['video_detail'], 0, 1922); ?></p>
                                <!-- <div class="d-flex justify-content-end">
                                    <a class="btn-outline-secondary" href=""><?= _news1 ?></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            endforeach;
        endif;
        ?>

        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            <?php if ($pager) : ?>
                <?php $pagi_path = 'pen1web/news'; ?>
                <?php $pager->setPath($pagi_path); ?>

                <div class="pagination">
                    <?= $pager->links() ?>
                </div>
            <?php endif ?>
        </div>
        <!-- Pagination -->

    </div>

</div>
</div>