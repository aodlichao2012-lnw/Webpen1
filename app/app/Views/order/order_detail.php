<div class="container-fluid" style="width: 90%;">
    <div class="row">
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/Order'); ?>">
                <div class="btn btn-secondary">back</div>
            </a>
        </div>
        <div class="mt-3">
            <table id="datatable" class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="4" style="text-align: center;">
                            <h5>ใบสั่งซื้อสินค้า</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($order_obj) :
                    ?>
                        <tr>
                            <th style="width: 25%;">เลขที่สั่งซื้อ : <?php echo $order_obj['order_num']; ?></th>
                            <td style="width: 25%;"></td>
                            <td style="width: 25%;"></td>
                            <td style="width: 25%;">วันที่สั่งซื้อ : <?php echo $order_obj['order_date']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>ชื่อสินค้า :</td>
                            <td colspan="2"><?php echo $order_obj['product_name']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>จำนวน :</td>
                            <td colspan="2"><?php echo $order_obj['product_num']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>ชื่อลูกค้า :</td>
                            <td colspan="2"><?php echo $order_obj['customer_fname'] . " " . $order_obj['customer_lname']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>อีเมลล์ :</td>
                            <td colspan="2"><?php echo $order_obj['customer_email']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>เบอร์โทร :</td>
                            <td colspan="2"><?php echo $order_obj['customer_phone'] . "," . $order_obj['customer_phone2']; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>ที่อยู่ :</td>
                            <td colspan="2"><?php echo $order_obj['customer_num'] . " ม. " . $order_obj['customer_m'] . " ซ. " . $order_obj['customer_soi']
                                                . " บ. " . $order_obj['customer_department'] . " ถนน. " . $order_obj['customer_road'] .
                                                " ต. " . $order_obj['customer_subdistrict'] . " อ. " . $order_obj['customer_district'] . " จ. " . $order_obj['customer_province'] .
                                                " " . $order_obj['customer_post']; ?></td>
                        </tr>
                    <?php
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
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

</main>
<!-- End Content -->
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script> -->

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('js/sb-admin-2.min.js'); ?>"></script>

<!-- Page level plugins -->
<!-- <script src="<?php echo base_url('vendor/chart.js/Chart.min.js'); ?>"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script> -->

</body>

</html>