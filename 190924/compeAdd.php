  <form action="checkAdd.php">
    <table border="1">
      <tr>
        <th>ID</th>
        <td><input type='text' name='Name'></td>
        <th>分類</th>
        <td><select name="Genre">
          <option value="水泳">水泳</option>
          <option value="アーチェリー">アーチェリー</option>
          <option value="陸上競技">陸上競技</option>
          <option value="バスケットボール">バスケットボール</option>
          <option value="ボクシング">ボクシング</option>
          <option value="カヌー">カヌー</option>
          <option value="自転車競技">自転車競技</option>
          <option value="馬術">馬術</option>
          <option value="フェンシング">フェンシング</option>
          <option value="サッカー">サッカー</option>
          <option value="ゴルフ">ゴルフ</option>
          <option value="体操">体操</option>
          <option value="ハンドボール">ハンドボール</option>
          <option value="ホッケー">ホッケー</option>
          <option value="柔道">柔道</option>
          <option value="空手">空手</option>
          <option value="近代五種">近代五種</option>
          <option value="ボート">ボート</option>
          <option value="ラグビー">ラグビー</option>
          <option value="セーリング">セーリング</option>
          <option value="射撃">射撃</option>
          <option value="スケートボード">スケートボード</option>
          <option value="スポーツクライミング">スポーツクライミング</option>
          <option value="サーフィン">サーフィン</option>
          <option value="卓球">卓球</option>
          <option value="テコンドー">テコンドー</option>
          <option value="テニス">テニス</option>
          <option value="トライアスロン">トライアスロン</option>
          <option value="バレーボール">バレーボール</option>
          <option value="ウエイトリフティング">ウエイトリフティング</option>
          <option value="レスリング">レスリング</option>
        </select></td>
      </tr>
      <tr>
        <th>形式</th>
        <td><input type="radio" name="type" value="個人">個人
        <input type="radio" name="type" value="団体">団体</td>
        <th>競技大会</th>
        <td><input type="radio" name="olympic" value="オリンピック">オリンピック
        <input type="radio" name="olympic" value="パラリンピック">パラリンピック</td>
      </tr>
      <tr>
        <th>日にち</th>
        <td><input type="date" name="date"></td>
        <th>時間</th>
        <td><input type="time" name="time"></td>
      </tr>
      <tr>
        <th>概要</th>
        <td><textarea name="overview"></textarea></td>
        <th>見どころ</th>
        <td><textarea name="attractions"></textarea></td>
      </tr>
      <tr>
        <th>展望</th>
        <td><textarea name="prospect"></textarea></td>
        <th>秘密</th>
        <td><textarea name="trivia"></textarea><br>
        <textarea name="answer"></textarea></td>
      </tr>
    </table>
    <input type="submit">
  </form>