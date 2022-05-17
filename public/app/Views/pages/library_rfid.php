<div class="col-lg-12 bg-light" style="min-height: 5.4rem;"></div>
<div class="col-lg-12 bg-light imgheadcontent" style="height: 15rem;">
    <h1 class="centertext"><?= _p_RFID_mean3 ?></h1>
</div>
<div class="boxp col-lg-12 col-md-12 col-sm-12">
    <div class="container" style="text-align: center; vertical-align: middle;">
        <img src="<?php echo base_url('uploads/pic/library.jpg'); ?>">
    </div>
    <div class="div">
        <div class="col-lg-12 boxp">
            <div class="col-lg-10 offset-lg-1">
                <p style="font-size: 14pt;">
                  <?=  _p_RFID_mean ?>
            </p>
            </div>
        </div>
    </div>

    <div class="container" style="text-align: center; vertical-align: middle;">
        <img src="<?php echo base_url('uploads/pic/whell_data2.png'); ?>" alt="Planets" usemap="#planetmap" style="width: 70%;">
        <map name="planetmap">
            <!-- <area shape="poly" coords="305,180,383,313,536,313,613,180,535,45,384,45" alt="Red apples" href="<?php echo base_url('p_detail/15'); ?>">
            <area shape="poly" coords="624,453,546,316,623,184,778,184,855,315,778,451" alt="Red apples" href="<?php echo base_url('p_detail/22'); ?>">
            <area shape="poly" coords="547,600,622,734,776,732,854,598,778,468,620,462" alt="Red apples" href="<?php echo base_url('p_detail/32'); ?>">
            <area shape="poly" coords="383,606,537,606,614,741,536,873,382,872,305,740" alt="Red apples" href="<?php echo base_url('p_detail/16'); ?>">
            <area shape="poly" coords="143,465,296,462,372,601,298,733,141,734,65,599" alt="Red apples" href="<?php echo base_url('p_detail/11'); ?>">
            <area shape="poly" coords="143,186,296,186,372,322,295,453,144,456,65,321" alt="Red apples" href="<?php echo base_url('p_detail/13'); ?>"> -->

            <area shape="circle" coords="156,453,142" alt="" href="<?php echo base_url('p_detail/11'); ?>"> <!-- Lsc -->
            <area shape="circle" coords="304,706,135" alt="" href="<?php echo base_url('p_detail/16'); ?>"> <!-- bookdrop -->
            <area shape="circle" coords="592,701,134" alt="" href="<?php echo base_url('p_detail/32'); ?>"> <!-- access -->
            <area shape="circle" coords="743,445,139" alt="" href="<?php echo base_url('p_detail/13'); ?>"> <!-- selfcheck -->
            <area shape="circle" coords="596,197,135" alt="" href="<?php echo base_url('p_detail/22'); ?>"> <!-- reader -->
            <area shape="circle" coords="303,195,136" alt="" href="<?php echo base_url('p_detail/15'); ?>"> <!-- inventory -->
        </map>          
    </div>

    <div class="div">
        <div class="col-lg-12 boxp">
            <div class="col-lg-10 offset-lg-1">
                <p style="font-size: 14pt;">
                   <?= _p_RFID_mean2 ?>
                </p>
            </div>
        </div>
    </div>
</div>