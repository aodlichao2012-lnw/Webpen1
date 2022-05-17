<div class="boxp col-lg-12">
    <div class="container">
        <div class="row">
            <?php
            if ($job_obj);
            ?>
            <div class="col-lg-12 col-md-12 col-ms-12">
                <div class="p-3">
                    <form action="<?= site_url('add_apply'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="dvi" align="center">
                            <h3>ใบสมัครงาน</h3>
                        </div>
                        <br>
                        <div class="div" align="center">
                            <img id="showimg" alt="" width="200" height="220">
                        </div>
                        <br>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="name_apply" class="form-label">ชื่อ :</label>
                                <input name="name_apply" type="text" class="form-control" placeholder="Name" autocomplete="off" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="pic_apply" class="form-label">รูปถ่าย :</label>
                                <input type="file" name="pic_apply" class="form-control" accept="image/*" onchange="preview_image(event)" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="position_apply" class="form-label">ตำแหน่ง :</label>
                                <input name="position_apply" type="text" class="form-control" value="<?php echo $job_obj['job_title']; ?>" readonly>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="salary_apply" class="form-label">เงินเดือน :</label>
                                <input name="salary_apply" class="form-control" placeholder="Salary" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" autocomplete="off" required></input>
                            </div>
                        </div>

                        <h5>ประวัติส่วนตัว</h5>
                        <div class="row">
                            <div class="mb-3">
                                <label for="address_apply" class="form-label">ที่อยู่ :</label>
                                <textarea name="address_apply" class="form-control" rows="5" placeholder="Address" autocomplete="off" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="email_apply" class="form-label">อีเมล์ :</label>
                                <input name="email_apply" type="email" class="form-control" placeholder="Email" autocomplete="off" required></input>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="phone_apply" class="form-label">เบอร์โทร :</label>
                                <input name="phone_apply" class="form-control" placeholder="Phone" autocomplete="off" maxlength="10" required></input>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_apply" id="residence_apply" value="อาศัยอยู่กับครอบครัว" checked>
                            <label class="form-check-label" for="">อาศัยอยู่กับครอบครัว</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_apply" id="residence_apply" value="บ้านตัวเอง">
                            <label class="form-check-label" for="">บ้านตัวเอง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_apply" id="residence_apply" value="บ้านเช่า">
                            <label class="form-check-label" for="">บ้านเช่า</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_apply" id="residence_apply" value="หอพัก">
                            <label class="form-check-label" for="">หอพัก</label>
                        </div>
                        <br>
                        <div class="row">
                            <div class="mb-3 col-4">
                                <label for="birtday_apply" class="form-label">วันเกิด :</label>
                                <input type="date" name="birtday_apply" class="form-control" required></input>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="age_apply" class="form-label">อายุ :</label>
                                <input name="age_apply" class="form-control" placeholder="Age" autocomplete="off" required></input>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="ethnicity_apply" class="form-label">เชื้อชาติ :</label>
                                <input name="ethnicity_apply" class="form-control" placeholder="Ethnicity" autocomplete="off" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="nationality_apply" class="form-label">สัญชาติ :</label>
                                <input name="nationality_apply" class="form-control" placeholder="Nationality" autocomplete="off" required></input>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="religion_apply" class="form-label">ศาสนา :</label>
                                <input name="religion_apply" class="form-control" placeholder="Religion" autocomplete="off" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="card_apply" class="form-label">เลขที่บัตรประชาชน :</label>
                                <input name="card_apply" class="form-control" placeholder="Card Id" pattern="[0-9]{1,}" autocomplete="off" maxlength="13" required></input>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="expired_apply" class="form-label">บัตรหมดอายุ :</label>
                                <input type="date" name="expired_apply" class="form-control" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="height_apply" class="form-label">ส่วนสูง :</label>
                                <input name="height_apply" class="form-control" placeholder="Height" pattern="[0-9]{1,}" autocomplete="off" required></input>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="weight_apply" class="form-label">น้ำหนัก :</label>
                                <input name="weight_apply" class="form-control" placeholder="Weight" pattern="[0-9]{1,}" autocomplete="off" required></input>
                            </div>
                        </div>
                        <label for="" class="form-label">ภาวะทางทหาร :</label>
                        <div class="mb-3 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="military_apply" id="military_apply" value="ได้รับการยกเว้น" checked>
                                <label class="form-check-label" for="">ได้รับการยกเว้น</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="military_apply" id="military_apply" value="ปลดเป็นทหารกองหนุน">
                                <label class="form-check-label" for="">ปลดเป็นทหารกองหนุน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="military_apply" id="military_apply" value="ยังไม่ได้รับการเกณฑ์">
                                <label class="form-check-label" for="">ยังไม่ได้รับการเกณฑ์</label>
                            </div>
                        </div>
                        <label for="" class="form-label">สถานะภาพ :</label>
                        <div class="mb-3 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_apply" id="status_apply" value="โสด" checked>
                                <label class="form-check-label" for="">โสด</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_apply" id="status_apply" value="แต่งงาน">
                                <label class="form-check-label" for="">แต่งงาน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_apply" id="status_apply" value="หม้าย">
                                <label class="form-check-label" for="">หม้าย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_apply" id="status_apply" value="แยกกัน">
                                <label class="form-check-label" for="">แยกกัน</label>
                            </div>
                        </div>
                        <label for="" class="form-label">เพศ :</label>
                        <div class="mb-3 col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex_apply" id="sex_apply" value="ชาย" checked>
                                <label class="form-check-label" for="">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex_apply" id="sex_apply" value="หญิง">
                                <label class="form-check-label" for="">หญิง</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="education_apply" class="form-label">วุฒิการศึกษา :</label>
                            <select class="form-select" aria-label="Default select example" name="education_apply" required>
                                <option selected value="ไม่ระบุ">เลือกวุฒิการศึกษา</option>
                                <option value="ระดับประกาศณียบัตรวิชาชีพ ปวช.">ระดับประกาศณียบัตรวิชาชีพ ปวช.</option>
                                <option value="ระดับประกาศณียบัตรวิชาชีพชั้นสูง ปวส.">ระดับประกาศณียบัตรวิชาชีพชั้นสูง ปวส.</option>
                                <option value="ระดับปริญญาตรี ป.ตรี">ระดับปริญญาตรี ป.ตรี</option>
                                <option value="อื่น ๆ">อื่น ๆ</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exper_apply" class="form-label">ประสบการณ์ :</label>
                            <textarea name="exper_apply" class="form-control" rows="5" placeholder="Experiential" autocomplete="off" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="resume_image" class="form-label">เรซูเม่ :</label>
                            <input type="file" name="resume_image" class="form-control" accept="image/*" required>
                        </div>

                        <button class="btn btn-primary"> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('showimg');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>