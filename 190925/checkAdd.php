<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>登録画面</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="tabs">
  <?php
      require('common.php');
  ?>
  <div class="tab_content_description">
      <?php require('checkCompe.php')?>
    </div>
  </div>
  <div class="tab_content" id="programming_content">
    <div class="tab_content_description">
      <?php require('athleteAdd.php')?>
    </div>
  </div>
  <div class="tab_content" id="design_content">
    <div class="tab_content_description">
      <?php require('facilitieAdd.php')?>
    </div>
</div>
</body>
</html>