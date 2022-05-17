<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
        <h1 class="centertext"><?= _support ?></h1>
</div>
<div class="boxp col-lg-12">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 col-md-6 col-ms-12">
                                <img src="assets/image/system/support.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-ms-12">
                                <div class="p-3">
                                        <form action="<?= site_url('/problem'); ?>" method="POST">
                                                <div class="mb-3">
                                                        <label for="problem_email" class="form-label"><?= _support1 ?></label>
                                                        <input id="problem_email" name="problem_email" type="email" class="form-control" placeholder="name@example.com" required autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="problem_name" class="form-label"><?= _support2 ?></label>
                                                        <input id="problem_name" name="problem_name" type="text" class="form-control" placeholder="<?= _support2 ?>" required autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="problem_company" class="form-label"><?= _support3 ?></label>
                                                        <input id="problem_company" name="problem_company" type="text" class="form-control" placeholder="<?= _support3 ?>" required autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="problem_phone" class="form-label"><?= _support4 ?></label>
                                                        <input id="problem_phone" name="problem_phone" type="text" class="form-control" placeholder="<?= _support4 ?>" required autocomplete="off">
                                                </div>
                                                <div class="mb-3">
                                                        <label for="problem_sub" class="form-label"><?= _support5 ?></label>
                                                        <!-- <input id="problem_sub" name="problem_sub" type="text" class="form-control" placeholder="Subject" required autocomplete="off"> -->
                                                        <select class="form-select" aria-label="Default select example" name="problem_sub" required>
                                                                <option value="General Inquiry"><?= _support5_1 ?></option>
                                                                <option value="Request a demonstration"><?= _support5_2 ?></option>
                                                                <option value="Request a quote"><?= _support5_3 ?></option>
                                                        </select>
                                                </div>
                                                <div class="mb-3">
                                                        <label for="problem_details" class="form-label"><?= _support6 ?></label>
                                                        <textarea id="problem_details" name="problem_details" class="form-control" rows="5" placeholder="<?= _support6 ?>" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                        <input type="hidden" name="problem_status" class="form-control" value="0" required></input>
                                                </div>
                                                <button class="btn btn-primary"> <?= _orderForm33 ?> </button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</div>