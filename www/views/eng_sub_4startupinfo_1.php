<?php require(str_replace("views", "inc", __DIR__) . "../head_sub.php")  ?>
<body>
<div id="wrap">
  <div class="wrap">
    <?php require(str_replace("views", "inc", __DIR__) . "../header.php")  ?>
    <div id="containerwrap">
      <div id="container">
        <div class="conwrap">
          <div id="info_notice">
            <h3> Notice &amp; News </h3>
			<iframe style="width:100%;height:800px" src="/services/cn/startupInfo/Noticelist" scrolling="no"></iframe>
          </div>
          <!-- //info_notice --></div>
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