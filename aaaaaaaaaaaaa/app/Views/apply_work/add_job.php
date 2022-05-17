<div class="container mt-4">
    <h2>เพิ่มการสมัครงาน</h2>
    <hr>
    <div class="mt-3">
        <form action="<?= site_url('/Jobinsert'); ?>" method="post" name="add">
            <div class="form-group">
                <label for="name">ตำแหน่ง</label>
                <input type="text" name="job_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">รายละเอียด</label>
                <textarea name="job_details" class="form-control" id="editor" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="job_status" class="form-control" value="1" hidden>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success mt-2" value="Add Data">
                <a href="<?php echo site_url('/job') ?>" class="btn btn-danger mt-2">Backward</a>
            </div>
        </form>
    </div>
</div>