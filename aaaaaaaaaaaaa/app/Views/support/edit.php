<div class="container-fluid" style="width: 90%;">
    <div class="row">
        <h2>Update Support</h2>
        <hr>
        <div class="mt-3">
            <form action="<?= site_url('/problem_update'); ?>" method="post" name="update" enctype="multipart/form-data">
                <input type="text" name="problem_id" class="form-control" value="<?php echo $problem_obj['problem_id'] ?>" hidden>
                <div class="form-group">
                    <label for="name">Email Customer</label>
                    <input type="text" name="problem_email" class="form-control" value="<?php echo $problem_obj['problem_email'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name Customer</label>
                    <input type="text" name="problem_name" class="form-control" value="<?php echo $problem_obj['problem_name'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Company Customer</label>
                    <input type="text" name="problem_company" class="form-control" value="<?php echo $problem_obj['problem_company'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Phone Customer</label>
                    <input type="text" name="problem_phone" class="form-control" value="<?php echo $problem_obj['problem_phone'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Problem Sub</label>
                    <input type="text" name="problem_sub" class="form-control" value="<?php echo $problem_obj['problem_sub'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Problem Details</label>
                    <textarea name="problem_details" class="form-control" rows="5" readonly><?php echo $problem_obj['problem_details'] ?></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="problem_status" class="form-control" value="1" readonly>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-2" value="Update Data">
                    <a href="<?php echo site_url('/Supports') ?>" class="btn btn-danger mt-2">Backward</a>
                </div>
            </form>
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

</html>