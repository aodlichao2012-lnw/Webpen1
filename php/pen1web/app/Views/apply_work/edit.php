<div class="container-fluid" style="width: 90%;">
    <div class="row">
        <h2>Update Job</h2>
        <hr>
        <div class="mt-3">
            <form action="<?= site_url('/update_job'); ?>" method="post" name="update" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Job Title</label>
                    <input type="text" name="job_id" class="form-control" value="<?php echo $job_obj['job_id'] ?>" hidden>
                    <input type="text" name="job_title" class="form-control" value="<?php echo $job_obj['job_title'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Job Detail</label>
                    <textarea name="job_details" class="form-control" id="editor" cols="30" rows="10"><?php echo $job_obj['job_details'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Job Status</label>
                    <select class="form-select" aria-label="Default select example" name="job_status">
                        <option value="1">รับสมัคร</option>
                        <option value="0">ปิดรับสมัคร</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-2" value="Update Data">
                    <a href="<?php echo site_url('/job') ?>" class="btn btn-danger mt-2">Backward</a>
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

<!-- Page level custom scripts -->
<script src="<?php echo base_url('js/demo/chart-area-demo.js'); ?>"></script>
<script src="<?php echo base_url('js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>