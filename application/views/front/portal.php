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

          <!-- <div class="card border-primary mb-3" style="max-width: 100%;">
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
          </div> -->

          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">หลักสูตร</div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($courses as $ckey => $cvalue): ?>
                  <div class="col-lg-6 col-md-6 col-sm-12">
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

          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">วิดีโอที่น่าสนใจ</div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <iframe width="100%" src="https://www.youtube.com/embed/qOouR5mMBeM"></iframe>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/-B-YlsHA1LQ"></iframe>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/KiQVvQWVMBk"></iframe>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/i5mggz3c25I"></iframe>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe width="100%" src="https://www.youtube.com/embed/xf6ZrdO-wck"></iframe>
                  </div>
              </div>
            </div>
          </div>

        </div>
