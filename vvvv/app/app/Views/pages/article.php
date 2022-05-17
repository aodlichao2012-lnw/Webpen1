<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
    <h1 class="centertext"><?= _order ?></h1>
</div>
<div class="boxp col-lg-12">
    <div class="container">
        <div class="row">
            <?php
            if ($buys) :
            ?>
                <div class="col-lg-12 col-md-12 col-ms-12">
                    <form action="<?= site_url('/add_order'); ?>" method="POST">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="product_name" class="form-label"><?= _orderForm1 ?></label>
                                <input id="product_name" name="product_name" type="text" class="form-control" value="<?php echo $buys['product_name']; ?>" readonly>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="product_num" class="form-label"><?= _orderForm3 ?> :</label>
                                <select class="form-select" aria-label="Default select example" id="product_num" name="product_num" required>
                                    <option selected value="ไม่ระบุ"><?= _orderForm4 ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <input name="order_num" type="hidden" class="form-control" value="<?php echo date('y') . date('m') . "-" . rand() ?>">
                            <input name="order_date" type="hidden" class="form-control" value="<?php echo date('Y-m-d') . " " . date('H:m:a') ?>">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_fname" class="form-label"><?= _orderForm5 ?></label>
                                <input id="customer_fname" name="customer_fname" type="text" class="form-control" placeholder="<?= _orderForm6 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_lname" class="form-label"><?= _orderForm7 ?></label>
                                <input id="customer_lname" name="customer_lname" type="text" class="form-control" placeholder="<?= _orderForm8 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="customer_email" class="form-label"><?= _orderForm9 ?></label>
                                <input id="customer_email" name="customer_email" type="email" class="form-control" placeholder="<?= _orderForm10 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_phone" class="form-label"><?= _orderForm11 ?></label>
                                <input id="customer_phone" name="customer_phone" type="text" class="form-control" placeholder="<?= _orderForm12 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_phone2" class="form-label"><?= _orderForm13 ?></label>
                                <input id="customer_phone2" name="customer_phone2" type="text" class="form-control" placeholder="<?= _orderForm14 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-3">
                                <label for="customer_num" class="form-label"><?= _orderForm15 ?></label>
                                <input id="customer_num" name="customer_num" type="text" class="form-control" placeholder="<?= _orderForm16 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-3">
                                <label for="customer_m" class="form-label"><?= _orderForm17 ?></label>
                                <input id="customer_m" name="customer_m" type="text" class="form-control" placeholder="<?= _orderForm18 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_soi" class="form-label"><?= _orderForm19 ?></label>
                                <input id="customer_soi" name="customer_soi" type="text" class="form-control" placeholder="<?= _orderForm20 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_department" class="form-label"><?= _orderForm21 ?></label>
                                <input id="customer_department" name="customer_department" type="text" class="form-control" placeholder="<?= _orderForm22 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_road" class="form-label"><?= _orderForm23 ?></label>
                                <input id="customer_road" name="customer_road" type="text" class="form-control" placeholder="<?= _orderForm24 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_subdistrict" class="form-label"><?= _orderForm25 ?></label>
                                <input id="customer_subdistrict" name="customer_subdistrict" type="text" class="form-control" placeholder="<?= _orderForm26 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_district" class="form-label"><?= _orderForm27 ?></label>
                                <input id="customer_district" name="customer_district" type="text" class="form-control" placeholder="<?= _orderForm28 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_province" class="form-label"><?= _orderForm29 ?></label>
                                <input id="customer_province" name="customer_province" type="text" class="form-control" placeholder="<?= _orderForm30 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_post" class="form-label"><?= _orderForm31 ?></label>
                                <input id="customer_post" name="customer_post" type="text" class="form-control" placeholder="<?= _orderForm32 ?>" autocomplete="off" required>
                            </div>
                        </div>

                        <button class="btn btn-primary"> <?= _orderForm33 ?> </button>
                    </form>
                </div>
            <?php
            endif;
            ?>

            <?php
            if ($product) :
            ?>
                <div class="col-lg-12 col-md-12 col-ms-12">

                    <form action="<?= site_url('/add_order'); ?>" method="POST">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="product_name" class="form-label"><?= _orderForm1 ?></label>
                                <select class="form-select" aria-label="Default select example" id="product_name" name="product_name" required>
                                    <option selected value="ไม่ระบุ"><?= _orderForm2 ?></option>
                                    <?php
                                    if ($product) :
                                        $index = 1;
                                        foreach ($product as $products) :
                                    ?>
                                            <option value="<?php echo $products['product_name']; ?>"><?php echo $products['product_name']; ?></option>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="product_num" class="form-label"><?= _orderForm3 ?></label>
                                <select class="form-select" aria-label="Default select example" id="product_num" name="product_num" required>
                                    <option selected value="ไม่ระบุ"><?= _orderForm4 ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <input name="order_num" type="hidden" class="form-control" value="<?php echo date('y') . date('m') . "-" . rand() ?>">
                            <input name="order_date" type="hidden" class="form-control" value="<?php echo date('Y-m-d') . " " . date('H:m:a') ?>">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_fname" class="form-label"><?= _orderForm5 ?></label>
                                <input id="customer_fname" name="customer_fname" type="text" class="form-control" placeholder="<?= _orderForm6 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_lname" class="form-label"><?= _orderForm7 ?></label>
                                <input id="customer_lname" name="customer_lname" type="text" class="form-control" placeholder="<?= _orderForm8 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="customer_email" class="form-label"><?= _orderForm9 ?></label>
                                <input id="customer_email" name="customer_email" type="email" class="form-control" placeholder="<?= _orderForm10 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_phone" class="form-label"><?= _orderForm11 ?></label>
                                <input id="customer_phone" name="customer_phone" type="text" class="form-control" placeholder="<?= _orderForm12 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_phone2" class="form-label"><?= _orderForm13 ?></label>
                                <input id="customer_phone2" name="customer_phone2" type="text" class="form-control" placeholder="<?= _orderForm14 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-3">
                                <label for="customer_num" class="form-label"><?= _orderForm15 ?></label>
                                <input id="customer_num" name="customer_num" type="text" class="form-control" placeholder="<?= _orderForm16 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-3">
                                <label for="customer_m" class="form-label"><?= _orderForm17 ?></label>
                                <input id="customer_m" name="customer_m" type="text" class="form-control" placeholder="<?= _orderForm18 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_soi" class="form-label"><?= _orderForm19 ?></label>
                                <input id="customer_soi" name="customer_soi" type="text" class="form-control" placeholder="<?= _orderForm20 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_department" class="form-label"><?= _orderForm21 ?></label>
                                <input id="customer_department" name="customer_department" type="text" class="form-control" placeholder="<?= _orderForm22 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_road" class="form-label"><?= _orderForm23 ?></label>
                                <input id="customer_road" name="customer_road" type="text" class="form-control" placeholder="<?= _orderForm24 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_subdistrict" class="form-label"><?= _orderForm25 ?></label>
                                <input id="customer_subdistrict" name="customer_subdistrict" type="text" class="form-control" placeholder="<?= _orderForm26 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_district" class="form-label"><?= _orderForm27 ?></label>
                                <input id="customer_district" name="customer_district" type="text" class="form-control" placeholder="<?= _orderForm28 ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="customer_province" class="form-label"><?= _orderForm29 ?></label>
                                <input id="customer_province" name="customer_province" type="text" class="form-control" placeholder="<?= _orderForm30 ?>" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="customer_post" class="form-label"><?= _orderForm31 ?></label>
                                <input id="customer_post" name="customer_post" type="text" class="form-control" placeholder="<?= _orderForm32 ?>" autocomplete="off" required>
                            </div>
                        </div>

                        <button class="btn btn-primary"> <?= _orderForm33 ?> </button>
                    </form>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>