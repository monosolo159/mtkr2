
        <div class="col-lg-8 col-md-9 col-sm-12">
          <div class="card border-primary mb-3" style="max-width: 100%;">
            <div class="card-header">รายละเอียดผลงานของเรา</div>
            <div class="card-body">

              <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
                  <img src="<?php echo base_url('assets/images/recentwork/'.$recentwork_detail[0]['recentwork_detail_pic']); ?>" width="100%">
                </div>
              </div>
              <div class="row" style="padding-top:2%">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p style="text-indent: 2.5em;"><?php echo $recentwork_detail[0]['recentwork_detail'] ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p style="text-indent: 2.5em;"><?php echo $recentwork_detail[0]['recentwork_date'] ?></p>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p>โดยวิทยากรคุณภาพ ระดับผู้เชี่ยวชาญ <?php echo count($lecturer) ?> ท่าน ได้แก่</p>
                  <?php foreach ($lecturer as $key => $value): ?>
                    <p style="text-indent: 2.5em;"><?php echo ($key+1).'. '.$value['lecturer_name'] ?></p>
                  <?php endforeach; ?>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p><b>ภาพบรรยายการอบรม</b></p>
                </div>
              </div>

              <?php foreach ($pic_group_list as $key => $value): ?>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row el-element-overlay">
                      <?php foreach ($pic_list as $pkey => $pvalue): ?>
                        <?php if ($value['pic_group_id']==$pvalue['pic_group_id']): ?>
                        <div class="col-lg-4 col-md-6">
                          <div class="card">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1">

                                <img src="<?php echo base_url('assets/images/recentwork/'.$pvalue['pic_name']);  ?>" />
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                      <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url('assets/images/recentwork/'.$pvalue['pic_name']);  ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                  </ul>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      <?php if (empty($pic_list)): ?>
                        <h4 class="card-title">ไม่พบภาพ</h4>
                      <?php endif; ?>
                    </div>


                    <p style="text-align:center"><?php echo $value['pic_group_name'] ?></p>
                    <hr>
                  </div>
                </div>
              <?php endforeach; ?>



            </div>
          </div>
        </div>
