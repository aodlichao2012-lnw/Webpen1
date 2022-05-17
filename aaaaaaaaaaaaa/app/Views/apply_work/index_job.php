        <div class="container-fluid" style="width: 90%;">
            <div class="row">
                <h2>จัดการงานรับสมัคร</h2>
                <hr>
                <div class="d-flex justify-content-end">
                    <a href="<?php echo site_url('/add_job') ?>" class="btn btn-primary">เพิ่ม</a>
                </div>
                <div class="mt-3">
                    <table id="datatable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 10%;">ลำดับ</th>
                                <th style="width: 20%;">ตำแหน่ง</th>
                                <th style="width: 50%;">รายละเอียด</th>
                                <th style="width: 20%;">วันที่ลงสมัคร</th>
                                <th>สถานะ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($job) {
                                $index = 1;
                                foreach ($job as $jobs) {
                            ?>
                                    <tr>
                                        <td class="text-center"><?php echo $index++; ?></td>
                                        <td><?php echo $jobs['job_title']; ?></td>
                                        <td class="dot"><?php echo $jobs['job_details']; ?></td>
                                        <td><?php echo $jobs['job_status']; ?></td>
                                        <td><?php if ($jobs['job_status'] == 1) {
                                                echo "รับสมัคร";
                                            } else {
                                                echo "ปิดรับสมัคร";
                                            } ?></td>

                                        <td>
                                            <a href="<?php echo base_url('edit_job/' . $jobs['job_id']); ?>">
                                                <div class="btn btn-warning" style="width: 100%;">แก้ไข</div>
                                            </a>
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