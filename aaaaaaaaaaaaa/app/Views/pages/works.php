<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="min-height: 15rem;">
  <h1 class="centertext"><?= _work ?></h1>
</div>
<div class="boxp col-lg-12">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
        if ($works) :
          $index = 1;
          foreach ($works as $work) :
            if ($work['job_status'] == "1") :
        ?>
              <pre>
                <h5 style="padding-left: 5rem;"><?php echo ($index . "."); ?> <?php echo ($work['job_title']); ?> <?= _work1 ?></h5>
                <h5 style="color:#EE0000; padding-left: 5rem;"><?= _work2 ?></h5><br><div class="div" style="padding-left: 5rem;"><?php echo ($work['job_details']); ?></div><br>
                <a class="btn btn-danger" style="background-color:#EE0000;" href="<?= base_url('apply/' . $work['job_id']); ?>"><?= _work3 ?></a>
                <hr>
              </pre>
              <?php
              $index++
              ?>
        <?php
            endif;
          endforeach;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>