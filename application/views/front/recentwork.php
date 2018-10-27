
<div class="col-lg-8 col-md-9 col-sm-12">
  <div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">ผลงานของเรา</div>
    <div class="card-body">

        <?php foreach ($recentwork as $key => $value): ?>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="<?php echo base_url('assets/images/recentwork/'.$value['recentwork_home_pic']); ?>" width="100%">
            </div>
          </div>
          <div class="row" style="padding-top:2%">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <p style="text-indent: 2.5em;"><?php echo $value['recentwork_detail'] ?> <a href="<?php echo site_url('Home/recentwork_detail/'.$value['recentwork_id']); ?>">อ่านต่อ...</a> </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <p style="text-indent: 2.5em;"><?php echo $value['recentwork_date'] ?></p>
            </div>
          </div>
          <hr>
        <?php endforeach; ?>

    </div>
  </div>
</div>
