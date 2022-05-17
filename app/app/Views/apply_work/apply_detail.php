<div class="boxp col-lg-12">
    <div class="container p-5">
        <div class="row">
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('/Apply'); ?>">
                    <div class="btn btn-secondary">back</div>
                </a>
            </div>
            <?php
            if ($apply_obj) :
            ?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="container">

                        <div style="height: 100%; border-radius: 10px; text-align: center;">
                            <img style="border-radius: 5px; height: 100%; max-width: 100%; object-fit: cover;" src="<?php echo base_url($apply_obj['apply_resume']); ?>">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="height: 20%; border-radius: 10px; text-align: center;">
                        <img style="border-radius: 5px; height: 100%; max-width: 100%; object-fit: cover;" src="<?php echo base_url($apply_obj['pic_apply']); ?>">
                    </div>
                    <br>
                    <h5>
                        <b>
                            ชื่อ : <?php echo $apply_obj['apply_name']; ?>
                        </b>
                    </h5>
                    <p>
                        <b>ตำแหน่ง :</b> <?php echo $apply_obj['apply_position']; ?>
                    </p>
                    <p>
                        <b>เงินเดือนที่ต้องการ :</b> <?php echo $apply_obj['apply_salary']; ?>
                    </p>
                    <p>
                        <b>ที่อยู่ :</b> <?php echo $apply_obj['address_apply']; ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>อีเมลล์ :</b> <?php echo $apply_obj['apply_email']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>เบอร์โทร :</b> <?php echo $apply_obj['apply_phone']; ?>
                            </p>
                        </div>
                    </div>
                    <p>
                        <b>ที่พักอาศัย :</b> <?php echo $apply_obj['residence_apply']; ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>วันเกิด :</b> <?php echo $apply_obj['birtday_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>อายุ :</b> <?php echo $apply_obj['age_apply']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>เชื้อชาติ :</b> <?php echo $apply_obj['ethnicity_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>สัญชาติ :</b> <?php echo $apply_obj['nationality_apply']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>ศาสนา :</b> <?php echo $apply_obj['religion_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>เพศ :</b> <?php echo $apply_obj['sex_apply']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>เลขที่บัตรประชาชน :</b> <?php echo $apply_obj['card_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>บัตรหมดอายุ :</b> <?php echo $apply_obj['expired_apply']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>ส่วนสูง :</b> <?php echo $apply_obj['height_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>น้ำหนัก :</b> <?php echo $apply_obj['weight_apply']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>
                                <b>ภาวะทางทหาร :</b> <?php echo $apply_obj['military_apply']; ?>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <b>สถานะภาพ :</b> <?php echo $apply_obj['status_apply']; ?>
                            </p>
                        </div>
                    </div>
                    <p>
                        <b>ประวัติการศึกษา :</b> <?php echo $apply_obj['apply_education']; ?>
                    </p>
                    <p>
                        <b>ประสบการณ์ :</b> <?php echo $apply_obj['apply_exper']; ?>
                    </p>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; PenNueng Holding 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo site_url('/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>





<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('vendor/chart.js/Chart.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>