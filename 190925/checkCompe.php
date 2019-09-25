  <?php
print '
   <form action="checkAdd.php" method="get">
    <table border="1">
      <tr>
        <th>競技名</th>
        <td><input type="text" name="Name" readonly value='.$_REQUEST['Name'].'></td>
        <th>分類</th>
        <td><select name="Genre">';
        
    $list = ['水泳','アーチェリー','陸上競技','バスケットボール','ボクシング','カヌー','自転車競技','馬術','フェンシング','サッカー','ゴルフ','体操','ハンドボール','ホッケー','柔道','空手','近代五種','ボート','ラグビー','セーリング','射撃','スケートボード','スポーツクライミング','サーフィン','卓球','テコンドー','テニス','トライアスロン','バレーボール','ウエイトリフティング','レスリング'];

    for($i=0; $i<count($list); $i++)
    {
      if($list[$i] == $_REQUEST['Genre'])
      {
        print "<option value='$list[$i]' selected>$list[$i]</option>";
      }
      else
      {
        print "<option value='$list[$i]'>$list[$i]<option>";
      }
    }
    
    print
        '</select></td>
      </tr>
      <tr>
        <th>形式</th>';
      
      if($_REQUEST['type'] == '個人')
      {
        print '<td><label><input type="radio" name="type" value="個人" checked>個人</label>
              <label><input type="radio" name="type" value="団体">団体</label></td>';
      }
      else
      {
        print '<td><label><input type="radio" name="type" value="個人">個人</label>
              <label><input type="radio" name="type" value="団体" checked>団体</label></td>';
      }
        
  print '<th>競技大会</th>';
        if($_REQUEST['olympic'] == 'オリンピック')
        {
          print '<td><label><input type="radio" name="olympic" value="オリンピック" checked>オリンピック</label>
        <label><input type="radio" name="olympic" value="パラリンピック">パラリンピック</label></td>';
        }
else
{
  print '<td><label><input type="radio" name="olympic" value="オリンピック">オリンピック</label>
        <label><input type="radio" name="olympic" value="パラリンピック" checked>パラリンピック</label></td>';
}
      print '</tr>
      <tr>
        <th>日にち</th>
        <td><input type="date" name="date" value='.$_REQUEST['date'].' readonly></td>
        <th>時間</th>
        <td><input type="time" name="time" value='.$_REQUEST['time'].' readonly></td>
      </tr>
      <tr>
        <th>概要</th>
        <td><textarea name="overview" readonly>'.$_REQUEST['overview'].'</textarea></td>
        <th>見どころ</th>
        <td><textarea name="attractions" readonly>'.$_REQUEST['attractions'].'</textarea></td>
      </tr>
      <tr>
        <th>展望</th>
        <td><textarea name="prospect" readonly>'.$_REQUEST['prospect'].'</textarea></td>
        <th>秘密</th>
        <td><textarea name="trivia" readonly>'.$_REQUEST['trivia'].'</textarea><br>
        <textarea name="answer" readonly>'.$_REQUEST['answer'].'</textarea></td>
      </tr>
    </table>
    <label>
      <input type="hidden" value="compe" name="type">
    </label>
    <input type="submit" value="確認">
    <input type="reset" value="リセット">
  </form>
';
