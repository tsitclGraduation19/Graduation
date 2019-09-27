<form action="check/checkAdd.php">
  <table border="1">
    <tr>
      <th>施設名</th>
      <td><input type="text" name="Name"></td>
      <th>住所</th>
      <td colspan="2"><input type="text" name="nState">
      <select name="sState">
        <option value="都" selected>都</option>
        <option value="道">道</option>
        <option value="府">府</option>
        <option value="県">県</option>
      </select><br>
      <input type="text" name="nCity">
      <select name="sCity">
        <option value="市" selected>市</option>
        <option value="区">区</option>
        <option value="町">町</option>
        <option value="村">村</option>
      </select><br>
      <input type="text" name="Char">
      </td>
      <td>
        緯度&#40;Lats&#41;&#58;<input type="number" name="Lats" step="0.0000001" max="99.9999999" placeholder="00.0000000">
        緯度&#40;Lngs&#41;&#58;<input type="number" name="Lngs" step="0.0000001" max="999.9999999" placeholder="000.0000000">
      </td>
    </tr>
    <tr>
      <th>会場カラー</th>
      <td><input type="color" name="Color"></td>
      <th>収容人数</th>
      <td><input type="number" name="Num">人</td>
      <th>概要</th>
      <td><textarea name="Overview"></textarea></td>
    </tr>
  </table>
  <label>
      <input type="hidden" value="facilitie" name="foo">
    </label>
  <input type="submit">
</form>