<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>登録画面</title>
  <link rel="stylesheet" href="../Css/index.css">
</head>
<body>
  <div class="tabs">
  <input id="all" type="radio" name="tab_item" checked>
  <label class="tab_item" for="all">競技</label>
  <input id="programming" type="radio" name="tab_item">
  <label class="tab_item" for="programming">選手</label>
  <input id="design" type="radio" name="tab_item">
  <label class="tab_item" for="design">施設</label>
  <div class="tab_content" id="all_content">
    <div class="tab_content_description">
      <?php require('checkCompe.php')?>
    </div>
  </div>
  <div class="tab_content" id="programming_content">
    <div class="tab_content_description">
      <?php require('checkAthlete.php')?>
    </div>
  </div>
  <div class="tab_content" id="design_content">
    <div class="tab_content_description">
      <?php require('checkFacilitie.php')?>
    </div>
  </div>
</div>
</body>
</html>