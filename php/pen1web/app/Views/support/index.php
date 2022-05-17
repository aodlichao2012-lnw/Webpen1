<div class="container-fluid" style="width: 90%;">
    <div class="row">
        <h2>Manager Support</h2>
        <hr>
        <div class="d-flex justify-content-end">
            <!-- <a href="<?php echo site_url('/ProductInsert') ?>" class="btn btn-primary">Add Product</a> -->
        </div>
        <div class="mt-3">
            <table id="datatable" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ลำดับ</th>
                        <th>อีเมลล์</th>
                        <!-- <th>Product Detail</th> -->
                        <th style="width: 120px;">ชื่อผู้ติดต่อ</th>
                        <th style="width: 120px;">หัวข้อ</th>
                        <th style="width: 120px;">รายละเอียด</th>
                        <th style="width: 120px;">สถานะ</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($problem) {
                        $index = 1;
                        foreach ($problem as $problems) {
                            /* if ($problems['problem_status'] == 0) { */
                    ?>
                            <tr>
                                <td class="text-center"><?php echo $index++; ?></td>
                                <td><?php echo $problems['problem_email']; ?></td>
                                <td><?php echo $problems['problem_name']; ?></td>
                                <td><?php echo $problems['problem_sub']; ?></td>
                                <td><?php echo $problems['problem_details']; ?></td>
                                <td><?php if ($problems['problem_status'] == 0) {
                                        echo "ยังไม่ดำเนินการ";
                                    } else {
                                        echo "ดำเนินการแล้ว";
                                    } ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="<?php echo base_url('update_problem/' . $problems['problem_id']); ?>">
                                                <div class="btn btn-success" style="width: 100%;">อัพเดท</div>
                                            </a>

                                        </div>
                                        <div class="col-6">
                                            <a href="<?php echo base_url('delete_problem/' . $problems['problem_id']); ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <div class="btn btn-danger" style="width: 100%;">ลบ</div>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php
                            /* } */
                        }
                    }
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