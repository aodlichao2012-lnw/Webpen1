<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
    <h1 class="centertext"><?= _productpage ?></h1>
</div>

<div onload="aug();" class="boxp col-lg-12">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php

            use PhpParser\Node\Stmt\Foreach_;

            if ($product) :
                $index = 1;
                foreach ($product as $products) :
            ?>
                    <div class="col-md-4 p-4">
                        <div class="card shadow-sm">

                            <div style="height: 15rem; text-align: center;">
                                <img class="fiximage" src="<?php echo base_url($products['product_image']); ?>">
                            </div>
                            <div class="card-body ">
                                <p class="card-text " style="min-height:2rem ;height : 120px;"><?php echo $products['product_name']; ?>
                                    <a href="#" name="n-<?php echo ($products['product_id'])  ?>"></a>
                                </p>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary" href="<?php echo base_url('p_detail/' . $products['product_id']); ?>"><?= _View ?></a>
                                        <a style="margin-left: 5%;" class="btn btn-sm btn-outline-success" href="<?php echo base_url('buy/' . $products['product_id']); ?>"><?= _Buy ?></a>
                                    </div>
                                    <small class="text-muted"><?php echo $products['product_views']; ?> <?= _Views ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <script>
            function aug() {
                    alert(<?php $data = $product_id["product_id"] ;  echo($data)  
                    
                    
                    ?>);
                    
                    window.location.hash = "n-"<?php echo($product_obj["product_id"]); ?>""
                    
            }

            window.onload = aug();
        </script>
        <!-- Pagination -->
        <div class="d-flex justify-content-end">
            <?php if ($pager) : ?>
                <?php $pagi_path = 'pen1web/products'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <div class="pagination">
                    <?= $pager->links() ?>
                </div>
            <?php endif ?>
        </div>


    </div>
</div>