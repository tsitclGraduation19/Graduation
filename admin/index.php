<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>登録画面</title>
  <link rel="stylesheet" href="Css/index.css">
</head>

<body>
  <h1 id="title">&#91;データの追加&#93;</h1>
  <select id="crud">
    <option value="追加" selected>追加</option>
    <option value="検索">検索</option>
    <option value="変更">変更</option>
    <option value="削除">削除</option>
  </select>
  <div class="tabs">
    <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item" for="all">競技</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item" for="programming">選手</label>
    <input id="design" type="radio" name="tab_item">
    <label class="tab_item" for="design">施設</label>
    <div class="tab_content" id="all_content">
      <div class="tab_content_description" id="Compe">
        <?php require('dataAdd/compeAdd.php')?>
      </div>
    </div>
    <div class="tab_content" id="programming_content">
      <div class="tab_content_description" id="Athlete">
        <?php require('dataAdd/athleteAdd.php')?>
      </div>
    </div>
    <div class="tab_content" id="design_content">
      <div class="tab_content_description" id="Facilitie">
        <?php require('dataAdd/facilitieAdd.php')?>
      </div>
    </div>
  </div>
</body>

</html>
  <script src="js/index.js"></script>
