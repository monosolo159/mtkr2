        <div class="col-lg-8 col-md-9 col-sm-12">

          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">ข่าวสาร</div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($news as $nkey => $nvalue): ?>
                  <div class="col-lg-4 col-md-6 col-sm-12 border border-secondary">
                    <b><?php echo $nvalue['news_name'] ?></b>

                    <hr>
                    <?php echo $nvalue['news_detail'] ?>
                    <a href="<?php echo site_url('Home/news'); ?>">อ่านต่อ...</a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">หลักสูตร</div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($courses as $ckey => $cvalue): ?>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <b><?php echo $cvalue['course_name'] ?></b>
                    <img src="<?php echo base_url('assets/images/').$cvalue['course_pic'] ?>" alt="<?php echo $cvalue['course_name'] ?>" width="100%">
                    <a href="<?php echo site_url('Home/course'); ?>">อ่านต่อ...</a>
                    <hr>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">ผลงานของเรา</div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($recentwork as $key => $rvalue): ?>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="<?php echo base_url('assets/images/recentwork/').$rvalue['recentwork_home_pic'] ?>" alt="<?php echo $rvalue['recentwork_detail'] ?>" width="100%">
                    <?php echo $rvalue['recentwork_detail'] ?>
                    <a href="<?php echo site_url('Home/recentwork_detail/'.$rvalue['recentwork_id']); ?>">อ่านต่อ...</a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

        </div>
