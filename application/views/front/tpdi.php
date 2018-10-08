<!DOCTYPE html>
<!-- saved from url=(0040)http://site.ksp.or.th/home.php?site=tpdi -->
<html class="cufon-active cufon-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>หจก.มิตรไทคุรุ</title>

  <script src="<?php echo base_url(); ?>assets/tpdi/popcalendar.js.download"></script><style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style></head><body style="margin:0"><div onclick="bShow=true" id="calendar" style="z-index:+99999;position:absolute;visibility:hidden;"><table width="220" style="font-family:arial;font-size:11px;border-width:1px;border-style:solid;border-color:#b3b3b3;font-family:arial; font-size:11px}" bgcolor="#ffffff"><tbody><tr bgcolor="#9c9c9c"><td><table width="218"><tbody><tr><td style="padding:2px;font-family:arial; font-size:11px;"><font color="#ffffff"><b><span id="caption"><span id="spanLeft" style="border-style:solid;border-width:1px;border-color:#dfdfdf;cursor:pointer" onmouseover="swapImage(&quot;changeLeft&quot;,&quot;left2.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;Click to scroll to previous month. Hold mouse button to scroll automatically.&quot;" onclick="javascript:decMonth()" onmouseout="clearInterval(intervalID1);swapImage(&quot;changeLeft&quot;,&quot;left1.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;&quot;" onmousedown="clearTimeout(timeoutID1);timeoutID1=setTimeout(&quot;StartDecMonth()&quot;,500)" onmouseup="clearTimeout(timeoutID1);clearInterval(intervalID1)">&nbsp;<img id="changeLeft" src="<?php echo base_url(); ?>assets/tpdi/left1.gif" width="10" height="11" border="0">&nbsp;</span>&nbsp;<span id="spanRight" style="border-style:solid;border-width:1px;border-color:#dfdfdf;cursor:pointer" onmouseover="swapImage(&quot;changeRight&quot;,&quot;right2.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;Click to scroll to next month. Hold mouse button to scroll automatically.&quot;" onmouseout="clearInterval(intervalID1);swapImage(&quot;changeRight&quot;,&quot;right1.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;&quot;" onclick="incMonth()" onmousedown="clearTimeout(timeoutID1);timeoutID1=setTimeout(&quot;StartIncMonth()&quot;,500)" onmouseup="clearTimeout(timeoutID1);clearInterval(intervalID1)">&nbsp;<img id="changeRight" src="<?php echo base_url(); ?>assets/tpdi/right1.gif" width="10" height="11" border="0">&nbsp;</span>&nbsp;<span id="spanMonth" style="border-style:solid;border-width:1px;border-color:#dfdfdf;cursor:pointer" onmouseover="swapImage(&quot;changeMonth&quot;,&quot;drop2.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;Click to select a month.&quot;" onmouseout="swapImage(&quot;changeMonth&quot;,&quot;drop1.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;&quot;" onclick="popUpMonth()"></span>&nbsp;<span id="spanYear" style="border-style:solid;border-width:1px;border-color:#dfdfdf;cursor:pointer" onmouseover="swapImage(&quot;changeYear&quot;,&quot;drop2.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;Click to select a year.&quot;" onmouseout="swapImage(&quot;changeYear&quot;,&quot;drop1.gif&quot;);this.style.borderColor=&quot;#dfdfdf&quot;;window.status=&quot;&quot;" onclick="popUpYear()"></span>&nbsp;</span></b></font></td><td align="right"><a href="javascript:hideCalendar()"><img src="<?php echo base_url(); ?>assets/tpdi/close.gif" width="15" height="13" border="0" alt="Close the Calendar"></a></td></tr></tbody></table></td></tr><tr><td style="padding:5px" bgcolor="#ffffff"><span id="content"></span></td></tr></tbody></table></div><div id="selectMonth" style="z-index:+99999;position:absolute;visibility:hidden;"></div><div id="selectYear" style="z-index:+99999;position:absolute;visibility:hidden;"></div>
    <script src="<?php echo base_url(); ?>assets/tpdi/jquery.1.3.2.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/effects.core.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/jquery-develop.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/function.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/swfobject.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/jquery.uploadify.v2.1.0.min.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/cufon-yui.js.download"></script>
    <script src="<?php echo base_url(); ?>assets/tpdi/PSL-Display_400-PSL-Display_700.font.js.download"></script>
    <link href="<?php echo base_url(); ?>assets/tpdi/uploadify.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/tpdi/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tpdi/css_edit.css" type="text/css" media="screen">



    <!--[if gte IE 9]> <script type="text/javascript"> Cufon.set('engine', 'canvas'); </script> <![endif]-->
    <div class="head_bg">
      <div id="head_content">
        <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/tpdi/mtkr_logoweb.png" class="datalist" alt="หจก.มิตรไทคุรุ" height="70"></a></div>
        <div class="name-site">
          <div class="name-th"><cufon class="cufon cufon-canvas" alt="หจก.มิตรไทคุร" style="width: 127px; height: 28.8px;"><canvas width="168" height="32" style="width: 168px; height: 32px; top: 1px; left: -12px;"></canvas><cufontext>หจก.มิตรไทคุร</cufontext></cufon></div>
          <div class="name-en"><cufon class="cufon cufon-canvas" alt="Teacher " style="width: 65px; height: 25.2px;"><canvas width="101" height="28" style="width: 101px; height: 28px; top: 1px; left: -10px;"></canvas><cufontext>Teacher </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Profession " style="width: 84px; height: 25.2px;"><canvas width="119" height="28" style="width: 119px; height: 28px; top: 1px; left: -10px;"></canvas><cufontext>Profession </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Development " style="width: 102px; height: 25.2px;"><canvas width="138" height="28" style="width: 138px; height: 28px; top: 1px; left: -10px;"></canvas><cufontext>Development </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Institute" style="width: 57px; height: 25.2px;"></div>
          </div>


        </div>
      </div>
      <div class="clear"></div>
      <div class="top_bg">
        <div id="content" style="margin:0 auto;position:relative!important;">
          <div class="top_border_head"></div>
          <div class="top_border_left"></div>
          <div class="top_border_center">
            <img src="<?php echo base_url(); ?>assets/tpdi/headet_mtkr.png" alt="" width="960" height="237">


          </div>
          <div class="top_border_right"></div>
          <div class="top_border_footer"></div>
        </div>
      </div>
      <div class="clear"></div>
      <script type="text/jscript">
      $(function() {
        Cufon.replace('.name-th,.name-en,.menu_top,.mini_calendar_width .head,.site_font_psl,.javaword-wrap h1,.javaword-wrap h2,.javaword-wrap h3');
      });
    </script><div class="body_bg">
      <table class="body_bg_bottom tbMain">
        <tbody><tr>
          <td class="left_menu_width tdTopLeft">
            <table class="tbNone" style="width:223px;">
              <tbody><tr>
                <td class="menu_top"><cufon class="cufon cufon-canvas" alt="เมนูหลัก" style="width: 61px; height: 28.8px;"><canvas width="101" height="32" style="width: 101px; height: 32px; top: 1px; left: -12px;"></canvas><cufontext>เมนูหลัก</cufontext></cufon></td>
              </tr>
              <tr>
                <td class="menu_middle tdAcentVtop"><ul id="menu">
                  <li>
                    <a class="menu_active menuleft_home site_font_psl" href="<?php echo base_url(); ?>"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/home.gif" alt=""><cufon class="cufon cufon-canvas" alt="หน้าแรก" style="width: 48px; height: 21.6px;"><canvas width="78" height="24" style="width: 78px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>หน้าแรก</cufontext></cufon></a>

                  </li>
                  <li>
                    <a id="main-1" class="main site_font_psl" href="javascript:void(0);" onclick="sys_MenuToggle(&#39;1&#39;);"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/group.gif" alt=""><cufon class="cufon cufon-canvas" alt="เกี่ยวกับคุรุพัฒนา" style="width: 100px; height: 21.6px;"><canvas width="130" height="24" style="width: 130px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>เกี่ยวกับคุรุพัฒนา</cufontext></cufon></a>
                    <ul id="sub-1" style="display:none;">
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4461" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="วัตถุประสงค์" style="width: 65px; height: 19.8px;"><canvas width="100" height="22" style="width: 100px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>วัตถุประสงค์</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4525" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คณะกรรมการบริหาร" style="width: 112px; height: 19.8px;"><canvas width="139" height="22" style="width: 139px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คณะกรรมการบริหาร</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4496" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ผู้บริหารและเจ้าหน้าที่" style="width: 112px; height: 19.8px;"><canvas width="146" height="22" style="width: 146px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ผู้บริหารและเจ้าหน้าที่</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4522" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ผลการดำเนินงาน" style="width: 93px; height: 19.8px;"><canvas width="120" height="22" style="width: 120px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ผลการดำเนินงาน</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4523" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Why " style="width: 32px; height: 19.8px;"><canvas width="60" height="22" style="width: 60px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>Why </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Kurupatana?" style="width: 71px; height: 19.8px;"><canvas width="99" height="22" style="width: 99px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>Kurupatana?</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4466" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ติดต่อเรา" style="width: 49px; height: 19.8px;"><canvas width="77" height="22" style="width: 77px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ติดต่อเรา</cufontext></cufon></a></li>
                    </ul>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/content.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="ข่าวประชาสัมพันธ์" style="width: 101px; height: 21.6px;"><canvas width="139" height="24" style="width: 139px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ข่าวประชาสัมพันธ์</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a id="main-2" class="main site_font_psl" href="javascript:void(0);" onclick="sys_MenuToggle(&#39;2&#39;);"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/group.gif" alt=""><cufon class="cufon cufon-canvas" alt="ตรวจสอบหลักสูตร/รุ่น " style="width: 135px; height: 21.6px;"><canvas width="165" height="24" style="width: 165px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ตรวจสอบหลักสูตร/รุ่น </cufontext></cufon><cufon class="cufon cufon-canvas" alt="และข้อมูลการอบรม " style="width: 116px; height: 21.6px;"><canvas width="147" height="24" style="width: 147px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>และข้อมูลการอบรม </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ที่ได้รับรองจากสถาบันคุรุพัฒนา" style="width: 180px; height: 21.6px;"><canvas width="211" height="24" style="width: 211px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ที่ได้รับรองจากสถาบันคุรุพัฒนา</cufontext></cufon></a>
                    <ul id="sub-2" style="display:none;">
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2BCX3Sb" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ตรวจสอบข้อมูลหลักสูตร/รุ่น " style="width: 153px; height: 19.8px;"><canvas width="181" height="22" style="width: 181px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ตรวจสอบข้อมูลหลักสูตร/รุ่น </cufontext></cufon><cufon class="cufon cufon-canvas" alt="และการอบรม " style="width: 77px; height: 19.8px;"><canvas width="105" height="22" style="width: 105px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>และการอบรม </cufontext></cufon><cufon class="cufon cufon-canvas" alt="course.kurupatana" style="width: 102px; height: 19.8px;"><canvas width="130" height="22" style="width: 130px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>course.kurupatana</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4508" target="_self"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ประกาศฯ " style="width: 56px; height: 19.8px;"><canvas width="84" height="22" style="width: 84px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ประกาศฯ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="รายชื่อหลักสูตรที่ได้รับการรับรอง" style="width: 174px; height: 19.8px;"><canvas width="201" height="22" style="width: 201px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>รายชื่อหลักสูตรที่ได้รับการรับรอง</cufontext></cufon></a></li>
                    </ul>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4520" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/about.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="หลักเกณฑ์การรับรองหลักสูตร " style="width: 180px; height: 21.6px;"><canvas width="211" height="24" style="width: 211px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>หลักเกณฑ์การรับรองหลักสูตร </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ปี " style="width: 16px; height: 21.6px;"><canvas width="47" height="24" style="width: 47px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ปี </cufontext></cufon><cufon class="cufon cufon-canvas" alt="2561" style="width: 32px; height: 21.6px;"><canvas width="62" height="24" style="width: 62px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>2561</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4524" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/about.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="สมัครสมาชิกเพื่อขอ " style="width: 118px; height: 21.6px;"><canvas width="149" height="24" style="width: 149px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>สมัครสมาชิกเพื่อขอ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="E-mai " style="width: 43px; height: 21.6px;"><canvas width="74" height="24" style="width: 74px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>E-mai </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ของสถาบันคุรุพัฒนา" style="width: 119px; height: 21.6px;"><canvas width="150" height="24" style="width: 150px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ของสถาบันคุรุพัฒนา</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4526" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/about.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="สมัครเป็นหน่วยพัฒนาครู" style="width: 141px; height: 21.6px;"><canvas width="179" height="24" style="width: 179px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>สมัครเป็นหน่วยพัฒนาครู</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://digital.kurupatana.ac.th/" target="_blank"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/minisite.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="ระบบบริหารจัดการหลักสูตร " style="width: 166px; height: 21.6px;"><canvas width="197" height="24" style="width: 197px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ระบบบริหารจัดการหลักสูตร </cufontext></cufon><cufon class="cufon cufon-canvas" alt="(หน่วยพัฒนาครู " style="width: 99px; height: 21.6px;"><canvas width="130" height="24" style="width: 130px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>(หน่วยพัฒนาครู </cufontext></cufon><cufon class="cufon cufon-canvas" alt=")" style="width: 5px; height: 21.6px;"><canvas width="38" height="24" style="width: 38px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>)</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a id="main-3" class="main site_font_psl" href="javascript:void(0);" onclick="sys_MenuToggle(&#39;3&#39;);"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/group.gif" alt=""><cufon class="cufon cufon-canvas" alt="ดาวน์โหลดแบบฟอร์มต่างๆ " style="width: 158px; height: 21.6px;"><canvas width="189" height="24" style="width: 189px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ดาวน์โหลดแบบฟอร์มต่างๆ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="(หน่วยพัฒนาครู)" style="width: 97px; height: 21.6px;"><canvas width="130" height="24" style="width: 130px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>(หน่วยพัฒนาครู)</cufontext></cufon></a>
                    <ul id="sub-3" style="display:none;">
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2OUSB2T" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="แบบฟอร์มการรายงานผลการดำเนินงานพัฒนาครู " style="width: 266px; height: 19.8px;"><canvas width="295" height="22" style="width: 295px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>แบบฟอร์มการรายงานผลการดำเนินงานพัฒนาครู </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ปี " style="width: 15px; height: 19.8px;"><canvas width="43" height="22" style="width: 43px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>ปี </cufontext></cufon><cufon class="cufon cufon-canvas" alt="งปม.61" style="width: 41px; height: 19.8px;"><canvas width="68" height="22" style="width: 68px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>งปม.61</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2MQDUR3" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="แบบฟอร์มการออกเอกสารผ่านการอบรม" style="width: 211px; height: 19.8px;"><canvas width="238" height="22" style="width: 238px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>แบบฟอร์มการออกเอกสารผ่านการอบรม</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2PujICV" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="แบบฟอร์มแบบตอบรับเป็นวิทยากร" style="width: 175px; height: 19.8px;"><canvas width="203" height="22" style="width: 203px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>แบบฟอร์มแบบตอบรับเป็นวิทยากร</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2wk8xUR" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="แบบฟอร์มการสมัครเป็นหน่วยพัฒนาครู" style="width: 203px; height: 19.8px;"><canvas width="238" height="22" style="width: 238px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>แบบฟอร์มการสมัครเป็นหน่วยพัฒนาครู</cufontext></cufon></a></li>
                    </ul>
                  </li>
                  <li>
                    <a id="main-4" class="main site_font_psl" href="javascript:void(0);" onclick="sys_MenuToggle(&#39;4&#39;);"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/group.gif" alt=""><cufon class="cufon cufon-canvas" alt="คู่มือออนไลน์ " style="width: 77px; height: 21.6px;"><canvas width="107" height="24" style="width: 107px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>คู่มือออนไลน์ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="(หน่วยพัฒนาครู)" style="width: 97px; height: 21.6px;"><canvas width="130" height="24" style="width: 130px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>(หน่วยพัฒนาครู)</cufontext></cufon></a>
                    <ul id="sub-4" style="display:none;">
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2ODv2f5" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คู่มือการรายงานผลการพัฒนาครู" style="width: 175px; height: 19.8px;"><canvas width="209" height="22" style="width: 209px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คู่มือการรายงานผลการพัฒนาครู</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2MUD71A" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คู่มือการสมัครเป็นหน่วยพัฒนาครู" style="width: 173px; height: 19.8px;"><canvas width="208" height="22" style="width: 208px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คู่มือการสมัครเป็นหน่วยพัฒนาครู</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2Nl9pQg" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คู่มือการชำระค่าธรรมเนียมต่างๆ" style="width: 169px; height: 19.8px;"><canvas width="197" height="22" style="width: 197px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คู่มือการชำระค่าธรรมเนียมต่างๆ</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2N1xJKW" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คู่มือการจัดทำหลักสูตรเพื่อการพัฒนาครู " style="width: 218px; height: 19.8px;"><canvas width="246" height="22" style="width: 246px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คู่มือการจัดทำหลักสูตรเพื่อการพัฒนาครู </cufontext></cufon><cufon class="cufon cufon-canvas" alt="และบุคลากรทางการศึกษา " style="width: 143px; height: 19.8px;"><canvas width="171" height="22" style="width: 171px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>และบุคลากรทางการศึกษา </cufontext></cufon><cufon class="cufon cufon-canvas" alt="สายงานการสอน" style="width: 88px; height: 19.8px;"><canvas width="115" height="22" style="width: 115px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>สายงานการสอน</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bit.ly/2NfoBhW" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="คู่มือการใช้ " style="width: 62px; height: 19.8px;"><canvas width="90" height="22" style="width: 90px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>คู่มือการใช้ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="E-mail " style="width: 43px; height: 19.8px;"><canvas width="71" height="22" style="width: 71px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>E-mail </cufontext></cufon><cufon class="cufon cufon-canvas" alt="kurupatana" style="width: 62px; height: 19.8px;"><canvas width="90" height="22" style="width: 90px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>kurupatana</cufontext></cufon></a></li>
                    </ul>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/about.php?site=tpdi&amp;SiteMenuID=4488" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/about.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="ติดต่อเรา" style="width: 53px; height: 21.6px;"><canvas width="84" height="24" style="width: 84px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ติดต่อเรา</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://www.ksp.or.th/ksp2013/" target="_blank"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/minisite.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="คุรุสภา" style="width: 41px; height: 21.6px;"><canvas width="72" height="24" style="width: 72px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>คุรุสภา</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a class=" site_font_psl" href="http://site.ksp.or.th/faq.php?site=tpdi&amp;SiteMenuID=4497" target="_self"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/faq.gif" alt=""><span style="display:block; padding-left:20px;"><cufon class="cufon cufon-canvas" alt="Q&amp;A " style="width: 35px; height: 21.6px;"><canvas width="66" height="24" style="width: 66px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>Q&amp;A </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ถาม-ตอบ" style="width: 54px; height: 21.6px;"><canvas width="84" height="24" style="width: 84px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ถาม-ตอบ</cufontext></cufon></span></a>
                  </li>
                  <li>
                    <a id="main-5" class="main site_font_psl" href="javascript:void(0);" onclick="sys_MenuToggle(&#39;5&#39;);"><img class="menuleft borderNone" src="<?php echo base_url(); ?>assets/tpdi/group.gif" alt=""><cufon class="cufon cufon-canvas" alt="หน่วยงานอื่น " style="width: 80px; height: 21.6px;"><canvas width="110" height="24" style="width: 110px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>หน่วยงานอื่น </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ๆ " style="width: 16px; height: 21.6px;"><canvas width="46" height="24" style="width: 46px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ๆ </cufontext></cufon><cufon class="cufon cufon-canvas" alt="ที่เกี่ยวข้อง" style="width: 61px; height: 21.6px;"><canvas width="91" height="24" style="width: 91px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>ที่เกี่ยวข้อง</cufontext></cufon></a>
                    <ul id="sub-5" style="display:none;">
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://www.nfe.go.th/" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="สำนักงาน " style="width: 58px; height: 19.8px;"><canvas width="86" height="22" style="width: 86px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>สำนักงาน </cufontext></cufon><cufon class="cufon cufon-canvas" alt="กศน." style="width: 27px; height: 19.8px;"><canvas width="58" height="22" style="width: 58px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>กศน.</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://bpcd.vec.go.th/" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="สำนักพัฒนาสมรรถนะครูและบุคลากรอาชีวศึกษา" style="width: 249px; height: 19.8px;"><canvas width="278" height="22" style="width: 278px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>สำนักพัฒนาสมรรถนะครูและบุคลากรอาชีวศึกษา</cufontext></cufon></a></li>
                      <li class="submenu"><a class="menulevel2 site_font_psl" href="http://hrd.obec.go.th/" target="_blank"><img class="menuleft_sub " src="<?php echo base_url(); ?>assets/tpdi/submenu.gif" alt=""><cufon class="cufon cufon-canvas" alt=" " style="width: 7px; height: 19.8px;"><canvas width="35" height="22" style="width: 35px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext> </cufontext></cufon><cufon class="cufon cufon-canvas" alt="สำนักพัฒนาครูและบุคลากรการศึกษาขั้นพื้นฐาน" style="width: 246px; height: 19.8px;"><canvas width="273" height="22" style="width: 273px; height: 22px; top: 1px; left: -8px;"></canvas><cufontext>สำนักพัฒนาครูและบุคลากรการศึกษาขั้นพื้นฐาน</cufontext></cufon></a></li>
                    </ul>
                  </li>

                </ul>
                <input type="hidden" id="maxMenu" value="5">
                <input type="hidden" id="maxMenu1" value="999">
                <script type="text/javascript">

                $(document).ready(function() {sys_MenuToggle('0');});
                $(document).ready(function() {sys_MenuToggle2('0','0');});
              </script></td>
            </tr>
            <tr>
              <td class="menu_bottom"></td>
            </tr>
            <tr>
              <td class="pdt10">&nbsp;</td>
            </tr>
            <tr>
              <td id="showmonth"><div style="width:100%; overflow:hidden;">
                <table class="mini_calendar_width tbNone">
                  <tbody><tr>
                    <td class="head"><cufon class="cufon cufon-canvas" alt="ปฏิทินกิจกรรม" style="width: 110px; height: 28.8px;"><canvas width="150" height="32" style="width: 150px; height: 32px; top: 1px; left: -12px;"></canvas><cufontext>ปฏิทินกิจกรรม</cufontext></cufon></td>
                  </tr>
                  <tr>
                    <td style="text-align:center;">
                      <input name="rootpath" type="hidden" id="rootpath" value="/">
                      <table style="padding-top:8px; padding-bottom:8px; width:223px; border:none; border-collapse:collapse;" class="tbminiCal">
                        <tbody><tr>
                          <td class="textmonth tdAleft">
                            &nbsp;


                            <img src="<?php echo base_url(); ?>assets/tpdi/calendar-head-txt.gif" class="datalist" alt="ก่อนหน้า" title="ก่อนหน้า">

                            <strong>ตุลาคม 2561</strong>

                          </td>
                          <td style="padding-right:4px; text-align:right" class="td_width50">
                            <a href="javascript:void(0);" onclick="changemonth(&#39;9&#39;,&#39;2018&#39;);"><img src="<?php echo base_url(); ?>assets/tpdi/calendar-left.gif" class="datalist" alt="ก่อนหน้า" title="ก่อนหน้า"></a> &nbsp;<a href="javascript:void(0);" onclick="changemonth(&#39;11&#39;,&#39;2018&#39;);"><img src="<?php echo base_url(); ?>assets/tpdi/calendar-right.gif" class="datalist" alt="ถัดไป" title="ถัดไป"></a></td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                    <tr>
                      <td class="tdTopLeft">
                        <ul class="clr" id="month">
                          <li class="day_left">อา</li>
                          <li class="day">จ</li>
                          <li class="day">อ</li>
                          <li class="day">พ</li>
                          <li class="day">พฤ</li>
                          <li class="day">ศ</li>
                          <li class="day_right">ส</li>
                          <li class="null">&nbsp;</li><li>1</li><li>2</li><li>3</li><li class="today">4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li><li class="null">&nbsp;</li><li class="null">&nbsp;</li><li class="null">&nbsp;</li>
                        </ul>
                        <div id="calendardetail"></div>
                      </td>
                    </tr>
                    <tr>
                      <td><div class="calendar_bottom"></div></td>
                    </tr>
                  </tbody></table>
                </div>
              </td>
            </tr>
            <tr>
              <td class="pdt10">&nbsp;</td>
            </tr>
            <tr>
              <td id="tdAcentVtop"> </td>
            </tr>

            <tr>
              <td class="tdAcentVtop"><table class="tableNone">
                <tbody><tr>
                  <td class="pdt50">&nbsp;</td>
                </tr>
              </tbody></table>
            </td>
          </tr>
        </tbody></table>
      </td>

      <td class="td_width10 tdVtop tdAleft"><div class="blank"></div></td>

      <td class="td_width10 tdVtop tdAleft">

        <div class="warp_content">



          <table class="tableNone">
            <tbody><tr>
              <td class="body_top_left"></td>
              <td class="body_top_center"></td>
              <td class="body_top_right"></td>
            </tr>
            <tr>
              <td class="body_middle_left"></td>
              <td class="body_middle_center tdTopLeft">
                <table class="tableNone">
                  <tbody><tr>
                    <td class="body_intro_top tdAleft" style="width:620px; padding:10px 0"><h2><span class="site_font_psl"><cufon class="cufon cufon-canvas" alt="สถาบันคุรุพัฒนา" style="width: 127px; height: 28.8px;"><canvas width="168" height="32" style="width: 168px; height: 32px; top: 1px; left: -12px;"></canvas><cufontext>สถาบันคุรุพัฒนา</cufontext></cufon></span></h2></td>
                  </tr>
                  <tr>
                    <td style="padding-top:15px;">
                      <div class="javaword-wrap">
                        <h1 style="text-align: center;"><span style="color: rgb(153, 204, 255);"><img src="<?php echo base_url(); ?>assets/tpdi/ไฟล์ประชาสัมพัน.jpg" width="600" height="338" alt=""><br></span></h1>	               </div>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
                <td class="body_middle_right"></td>
              </tr>
              <tr>
                <td class="body_bottom_left"></td>
                <td class="body_bottom_center">&nbsp;</td>
                <td class="body_bottom_right"></td>
              </tr>
              <tr>
                <td colspan="3" class="pdt10">&nbsp;</td>
              </tr>
            </tbody></table>
            <table class="tableNone" style="width:620px;">

              <tbody><tr>
                <td class="td_width50percent tdTopLeft" style="margin-left:15px !important;">
                  <table class="object_box tableNone" style="margin-bottom:10px ; width:310px;">
                    <tbody><tr><td></td>
                    </tr><tr>
                      <td class="object_top"><span class="site_font_psl"><cufon class="cufon cufon-canvas" alt="ข่าวประชาสัมพันธ์" style="width: 118px; height: 25.2px;"><canvas width="162" height="28" style="width: 162px; height: 28px; top: 1px; left: -10px;"></canvas><cufontext>ข่าวประชาสัมพันธ์</cufontext></cufon></span></td>
                    </tr>
                    <tr>
                    </tr><tr>
                      <td style="height:20px;"></td>
                    </tr>
                    <tr>
                      <td class="object_middle alignCenter">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="datalist">

                          <tbody><tr>
                            <td align="center" style="padding-left:16px;">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                  <td align="left" valign="top" class="datalist_subject pdt5 ">
                                    <div class="Thumbnail">
                                      <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1548"><img width="80" src="<?php echo base_url(); ?>assets/tpdi/img_3a1340b359fec6e7f9ec2e8e67b5423f.jpg" style="float:left;" alt="ขอเชิญตอบแบบสอบถามความคิดเห็น เนื่องในโอกาสวันครูโลก 2561เรื่อง "></a>
                                    </div>

                                    <div style="border:0px solid #f00; float:left; width:168px; overflow:hidden; padding-right:4px;">
                                      <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1548">ขอเชิญตอบแบบสอบถามความคิดเห็น เนื่องในโอกาสวันครูโลก 2561เรื่อง </a>
                                      &nbsp;<img src="<?php echo base_url(); ?>assets/tpdi/new.gif" width="22" height="9" class="datalist" alt="new">        <div style="color:#999999;font-weight:normal;font-size:11px; ">
                                        ขอเชิญตอบแบบสอบถามความคิดเห็น เนื่องในโอกาสวันครูโลก 2561เรื่อง "สิทธิทางการเรียนรู้กับครูคุณภาพ" &gt;&gt;https://goo.gl/forms/svlhEiTYOgAYMcYt1




                                        ...</div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="left">
                                      <div class="txt_content_footer ">อ่าน : 84 | สร้างเมื่อ : 24 ก.ย. 61</div>
                                      <div class="txt_content_read">
                                        <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1548">อ่านต่อ...</a>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr><td class="line" colspan="2">&nbsp;</td></tr>
                                </tbody></table>

                              </td>
                            </tr>


                            <tr>
                              <td align="center" class="object_active" style="padding-left:16px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody><tr>
                                    <td align="left" valign="top" class="datalist_subject pdt5 ">
                                      <div class="Thumbnail">
                                        <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1540"><img width="80" src="<?php echo base_url(); ?>assets/tpdi/img_a3e0a3b99f34cc8881a5be528ed0799f.jpg" style="float:left;" alt="แจ้งปิดระบบ digital.kurupatana.ac.th เพื่อปรับปรุงประสิทธิภาพการทำงาน "></a>
                                      </div>

                                      <div style="border:0px solid #f00; float:left; width:168px; overflow:hidden; padding-right:4px;">
                                        <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1540">แจ้งปิดระบบ digital.kurupatana.ac.th เพื่อปรับปรุงประสิทธิภาพการทำงาน </a>
                                        &nbsp;<img src="<?php echo base_url(); ?>assets/tpdi/new.gif" width="22" height="9" class="datalist" alt="new">        <div style="color:#999999;font-weight:normal;font-size:11px; ">
                                          เรียน  หน่วยพัฒนาครู

                                          เรื่อง  แจ้งปิดระบบ digital.kurupatana.ac.th เพื่อปรับปรุงประสิทธิภาพการทำงาน ในวันอาทิตย์ที่ 23 กันยายน 2561 (00.00 น. &amp;nda...</div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="left">
                                        <div class="txt_content_footer ">อ่าน : 288 | สร้างเมื่อ : 21 ก.ย. 61</div>
                                        <div class="txt_content_read">
                                          <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1540">อ่านต่อ...</a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr><td class="line" colspan="2">&nbsp;</td></tr>
                                  </tbody></table>

                                </td>
                              </tr>


                              <tr>
                                <td align="center" style="padding-left:16px;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody><tr>
                                      <td align="left" valign="top" class="datalist_subject pdt5 ">
                                        <div class="Thumbnail">
                                          <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1501"><img width="80" src="<?php echo base_url(); ?>assets/tpdi/img_681811a9fa1ec423306a93874fe0d5a6.jpg" style="float:left;" alt="ขยายเวลาการรายผลการพัฒนาในหลักสูตรที่สถาบันคุรุพัฒนาให้การรับรอง ประจำปีงบประมาณ พ.ศ. 2561 จนถึงวันที่ 16 ตุลาคม 2561"></a>
                                        </div>

                                        <div style="border:0px solid #f00; float:left; width:168px; overflow:hidden; padding-right:4px;">
                                          <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1501">ขยายเวลาการรายผลการพัฒนาในหลักสูตรที่สถาบันคุรุพัฒนาให้การรับรอง ประจำปีงบประมาณ พ.ศ. 2561 จนถึงวันที่ 16 ตุลาคม 2561</a>
                                          &nbsp;<img src="<?php echo base_url(); ?>assets/tpdi/new.gif" width="22" height="9" class="datalist" alt="new">        <div style="color:#999999;font-weight:normal;font-size:11px; ">เรื่อง  การรายงานผลการพัฒนาครูในหลักสูตรฯ ที่สถาบันคุรุพัฒนาให้การรับรอง ประจำปีงบประมาณ พ.ศ. 2561

                                            เรียน  ผู้ประสานงานหน่วยพัฒนาครูทุกหน่วย

                                            ...</div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="left">
                                          <div class="txt_content_footer ">อ่าน : 786 | สร้างเมื่อ : 19 ก.ย. 61</div>
                                          <div class="txt_content_read">
                                            <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1501">อ่านต่อ...</a>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr><td class="line" colspan="2">&nbsp;</td></tr>
                                    </tbody></table>

                                  </td>
                                </tr>


                                <tr>
                                  <td align="center" class="object_active" style="padding-left:16px;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tbody><tr>
                                        <td align="left" valign="top" class="datalist_subject pdt5 ">
                                          <div class="Thumbnail">
                                            <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1485"><img width="80" src="<?php echo base_url(); ?>assets/tpdi/img_aebc8dba07c6f8e23475336ddad006f9.jpg" style="float:left;" alt="การรายงานผลการพัฒนาในหลักสูตรที่ได้รับรองจากสถาบันคุรุพัฒนา"></a>
                                          </div>

                                          <div style="border:0px solid #f00; float:left; width:168px; overflow:hidden; padding-right:4px;">
                                            <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1485">การรายงานผลการพัฒนาในหลักสูตรที่ได้รับรองจากสถาบันคุรุพัฒนา</a>
                                            &nbsp;<img src="<?php echo base_url(); ?>assets/tpdi/new.gif" width="22" height="9" class="datalist" alt="new">        <div style="color:#999999;font-weight:normal;font-size:11px; ">

                                              สถาบันคุรุพัฒนา สำนักงานเลขาธิการคุรุสภา
                                              โทร. 0 2281 1845
                                              โทรสาร 0 2282 1856
                                              ...</div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td align="left">
                                            <div class="txt_content_footer ">อ่าน : 522 | สร้างเมื่อ : 14 ก.ย. 61</div>
                                            <div class="txt_content_read">
                                              <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1485">อ่านต่อ...</a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr><td class="line" colspan="2">&nbsp;</td></tr>
                                      </tbody></table>

                                    </td>
                                  </tr>


                                  <tr>
                                    <td align="center" style="padding-left:16px;">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody><tr>
                                          <td align="left" valign="top" class="datalist_subject pdt5 ">
                                            <div class="Thumbnail">
                                              <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1424"><img width="80" src="<?php echo base_url(); ?>assets/tpdi/img_f3f120df133dab5d843dfeaa15df48ae.jpg" style="float:left;" alt="แบบสอบถามความคิดเห็น ปัญหา และข้อเสนอแนะที่เกี่ยวข้องกับระบบการรับรองหลักสูตรเพื่อการพัฒนาครูและบุคลากรทางการศึกษา สายงานการสอน"></a>
                                            </div>

                                            <div style="border:0px solid #f00; float:left; width:168px; overflow:hidden; padding-right:4px;">
                                              <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1424">แบบสอบถามความคิดเห็น ปัญหา และข้อเสนอแนะที่เกี่ยวข้องกับระบบการรับรองหลักสูตรเพื่อการพัฒนาครูและบุคลากรทางการศึกษา สายงานการสอน</a>
                                              &nbsp;<img src="<?php echo base_url(); ?>assets/tpdi/new.gif" width="22" height="9" class="datalist" alt="new">        <div style="color:#999999;font-weight:normal;font-size:11px; ">

                                                ด้วยสำนักงานเลขาธิการคุรุสภา โดยสถาบันคุรุพัฒนา มีความประสงค์ในการพัฒนา ปรับปรุง ระบบการรับรองหลักสูตรเพื่อการพัฒนาครูและบุคลาก...</div>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td align="left">
                                              <div class="txt_content_footer ">อ่าน : 262 | สร้างเมื่อ : 31 ส.ค. 61</div>
                                              <div class="txt_content_read">
                                                <a href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459&amp;Action=view&amp;Sys_Page=&amp;Sys_PageSize=&amp;DataID=1424">อ่านต่อ...</a>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr><td class="line" colspan="2">&nbsp;</td></tr>
                                        </tbody></table>

                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="object_bottom" align="right" ;="">
                                        <a class="object_btn_all" href="http://site.ksp.or.th/content.php?site=tpdi&amp;SiteMenuID=4459"></a>
                                      </td>
                                    </tr>

                                  </tbody></table>                    <div style="clear:both;"></div>

                                </td>
                              </tr>
                              <tr>
                                <td class="pdt10">&nbsp;</td>
                              </tr>
                            </tbody></table>
                          </td>
                          <td class="td_width50percent tdTopLeft" style="padding-left:10px;">
                            <table class="object_box tableNone" style="margin-bottom:10px; margin-left:20px; width:304px;">
                              <tbody><tr>
                                <td class="object_top"><span class="site_font_psl"><cufon class="cufon cufon-canvas" alt="ภาพกิจกรรม" style="width: 87px; height: 25.2px;"><canvas width="122" height="28" style="width: 122px; height: 28px; top: 1px; left: -10px;"></canvas><cufontext>ภาพกิจกรรม</cufontext></cufon></span></td>
                              </tr>
                              <tr>
                              </tr><tr>
                                <td style="height:20px;"></td>
                              </tr>
                              <tr>
                                <td class="object_middle alignCenter">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="datalist">
                                    <tbody><tr>
                                      <td align="center" height="100">ไม่มีข้อมูลในระบบ </td>
                                    </tr>

                                  </tbody></table>                    </td>
                                </tr>

                                <tr>
                                  <td class="pdt10">&nbsp;</td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
                        </tbody></table>


                        <script src="<?php echo base_url(); ?>assets/tpdi/index.js.download" type="text/javascript"></script>
                      </div>
                      <br><br>
                    </td>
                    <td class="td_width20"></td>
                  </tr>
                  <tr>
                    <td colspan="4">

                      <div class="object_stat">

                        <table class="tbNone" style="margin:0px 12px; font-size: 8pt;">
                          <tbody><tr>
                            <td style="width:130px;" class="mgpd0">ผู้เยี่ยมชมวันนี้</td>
                            <td style="text-align:right; width:50px;" class="mgpd0">19</td>
                          </tr>
                          <tr>
                            <td class="mgpd0">ผู้เยี่ยมชมทั้งหมด</td>
                            <td style="text-align:right" class="mgpd0">8,747</td>
                          </tr>
                        </tbody></table>

                      </div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
              <div class="clear"></div>
              <script type="text/javascript">
              $(document).ready(function(){
                $('A[rel="_blank"]').each(function(){
                  $(this).attr('target', '_blank');
                });
              });
              $(document).ready(function(){
                $('A[rel="_self"]').each(function(){
                  $(this).attr('target', '_self');
                });
              });
            </script>
            <div class="footer_bg">
              <div class="content">

                <div style="height:80px;">
                  <div class="logo">
                    <img src="<?php echo base_url(); ?>assets/tpdi/mtkr_logoweb.png" class="datalist" alt="สถาบันคุรุพัฒนา" height="42">
                  </div>

                  <div class="footer_addr  pdl11 pdt10">
                    <div class="name-th"><cufon class="cufon cufon-canvas" alt="หจก.มิตรไทคุร" style="width: 95px; height: 21.6px;"><canvas width="126" height="24" style="width: 126px; height: 24px; top: 1px; left: -9px;"></canvas><cufontext>หจก.มิตรไทคุร</cufontext></cufon></div>
                    <div class="name-en"><cufon class="cufon cufon-canvas" alt="Teacher " style="width: 47px; height: 18px;"><canvas width="72" height="20" style="width: 72px; height: 20px; top: 1px; left: -7px;"></canvas><cufontext>Teacher </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Profession " style="width: 60px; height: 18px;"><canvas width="85" height="20" style="width: 85px; height: 20px; top: 1px; left: -7px;"></canvas><cufontext>Profession </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Development " style="width: 73px; height: 18px;"><canvas width="99" height="20" style="width: 99px; height: 20px; top: 1px; left: -7px;"></canvas><cufontext>Development </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Institute" style="width: 41px; height: 18px;"></div>

                  </div>
                  <div class="footer_copyright  pdr11 pdt10">


                  </div>
                </div>

                <div style="border:0px solid #F00; margin-top:0px;">
                  <div style="float:left;">
                  </div>
                  <div style="float:right;">® สงวนลิขสิทธิ หจก.มิตรไทคุรุ</div>
                </div>

              </div>
            </div>



          </body></html>
