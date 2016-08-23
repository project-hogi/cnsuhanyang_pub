<?php require(str_replace("views", "inc", __DIR__) . "../head_sub.php")  ?>
<body>
<div id="wrap">
  <div class="wrap">
    <?php require(str_replace("views", "inc", __DIR__) . "../header.php")  ?>
    <div id="containerwrap">
      <div class="programs_tab">
        <ul class="training_tab">
          <li> <a href="eng_sub_2programs_3training_1.php">竞赛</a> </li>
          <li> <a href="eng_sub_2programs_3training_2.php">营地</a> </li>
          <li class="selected"> <a href="eng_sub_2programs_3training_3.php">实习</a> </li>
        </ul>
      </div>
      <!-- //programs_tab -->
      <div id="container">
        <div class="conwrap">
          <div id="training_internships">
            <ul class="tab">
              <li class="selected"> <a href="#global">跨国创业实习</a> </li>
              <li class="last"> <a href="#domestic">国内创业实习</a> </li>
            </ul>
            <h3 id="global">跨国创业实习</h3>
            <p class="txt1">这是一种实习项目，通过执行海外及国内企业的项目，可体验到市场调查、法人设立等一系列跨国创业过程。</p>
            <ul class="global">
              <li>
                <dl>
                  <dt>期间</dt>
                  <dd>寒假、暑假期间中5周</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>地点</dt>
                  <dd>（美国）硅谷·纽约·拉斯维加斯、（中国）上海·北京、（印度尼西亚）雅加达·巴厘岛、（越南）河内·胡志明市、（加拿大）俄亥俄等</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>对象</dt>
                  <dd>汉阳大学在校生</dd>
                </dl>
              </li>
              <li class="last">
                <dl>
                  <dt>主管</dt>
                  <dd>汉阳大学跨国企业家中心 </dd>
                </dl>
              </li>
            </ul>
            <p class="top"> <a href="#"><img src="../img/about/top.png" alt="" /></a> </p>
            <h3 id="domestic">国内创业实习</h3>
            <p class="txt1">这是一种实习项目，可在创业保育中心内有前途的初创公司体验到产业现场，从而打下创业的基础。</p>
            <ul class="global">
              <li>
                <dl>
                  <dt>期间</dt>
                  <dd>寒假、暑假期间中7~8周 </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>地点</dt>
                  <dd>校内创业保育中心入驻企业</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>对象</dt>
                  <dd>汉阳大学在校生</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>主管</dt>
                  <dd>汉阳大学跨国企业家中心 </dd>
                </dl>
              </li>
            </ul>
            <p class="top"> <a href="#"><img src="../img/about/top.png" alt="" /></a> </p>
          </div>
          <!-- //training_internships --></div>
      </div>
      <!-- //container --> 
    </div>
    <!-- //containerwrap --> 
    
  </div>
  <!-- //wrap -->
  
  <?php require(str_replace("views", "inc", __DIR__) . "../footer.php") ?>
  <?php require(str_replace("views", "inc", __DIR__) . "../js.php") ?>
</div>
<!-- //wrap -->
</body>
</html>