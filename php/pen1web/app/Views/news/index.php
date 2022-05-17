<div class="container-fluid" style="width: 90%;">
    <div class="row">
        <h2>Manager News</h2>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/NewnewsInsert') ?>" class="btn btn-primary">เพิ่ม</a>
        </div>
        <div class="mt-3">
            <table id="datatable" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 100px;">ลำดับข่าว</th>
                        <th>หัวข้อ</th>
                        <!-- <th>News Detail</th> -->
                        <th style="width: 120px;">รูปข่าว</th>
                        <th style="width: 200px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($newnews) {
                        $index = 1;
                        foreach ($newnews as $news) {
                    ?>
                            <tr>
                                <td class="text-center"><?php echo $index++; ?></td>
                                <td><?php echo $news['news_name']; ?></td>
                                <!-- <td><?php //echo $news['news_detail'];
                                            ?></td> -->
                                <td class="text-center">
                                    <?php if ($news['news_image'] == "") { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                        </svg>
                                    <?php } else { ?>
                                        <img src="<?php echo base_url($news['news_image']); ?>" height="40">
                                    <?php } ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="<?php echo base_url('NewnewsUpdate/' . $news['news_id']); ?>">
                                                <div class="btn btn-warning" style="width: 100%;">แก้ไข</div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php echo base_url('Newnewsdelete/' . $news['news_id']); ?>" onclick="return confirm('Are you sure you want to delete this item ?');">
                                                <div class="btn btn-danger" style="width: 100%;">ลบ</div>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                    <?php
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