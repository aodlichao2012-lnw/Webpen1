<?php

//use PhpParser\Node\Expr\New_;
?>
<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
        <h1 class="centertext"><?= _news ?></h1>
</div>
<div class="boxp col-lg-12">
    <div class="container">
        <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> -->
            <?php 
            if($newnews):
                $index = 1;
                foreach($newnews as $news):
            ?>
            <div class="col-lg-12 pb-5">
            <div class="row">
                <div class="col-lg-4 shadow-sm">
                    <div style="height: 15rem; text-align: center;">
                        <img class="fiximage" src="<?php echo base_url($news['news_image']);?>">
                    </div>                    
                </div>

                <div class="col-lg-8 shadow-sm">
                    <div class="">
                        <p ><?php echo substr($news['news_detail'],0,1922);?></p>
                        <div class="d-flex justify-content-end">
                        <a class="btn-outline-secondary" href="<?php echo base_url('n_detail/'.$news['news_id']);?>"><?= _news1 ?></a>                        
                        </div>                        
                    </div>
                </div>

            </div>
            </div>
            <?php 
                endforeach;
            endif;
            ?>
        <!-- </div> -->

        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            <?php if ($pager) :?>
            <?php $pagi_path='pen1web/news'; ?>
            <?php $pager->setPath($pagi_path); ?>

            <div class="pagination">  
            <?= $pager->links() ?>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>