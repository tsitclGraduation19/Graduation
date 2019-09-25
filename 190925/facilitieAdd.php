<form action="checkAdd.php">
  <table border="1">
    <tr>
      <th>施設名</th>
      <td><input type="text" name="name"></td>
      <th>住所</th>
      <td colspan="3"><input type="text" name="nState">
      <select value="sState">
        <option value="都">都</option>
        <option value="道">道</option>
        <option value="府">府</option>
        <option value="県">県</option>
      </select><br>
      <input type="text" name="nCity">
      <select value="sCity">
        <option value="市">市</option>
        <option value="区">区</option>
        <option value="町">町</option>
        <option value="村">村</option>
      </select><br>
      <input type="text">
      </td>
    </tr>
    <tr>
      <th>会場カラー</th>
      <td><input type="color" name="color"></td>
      <th>収容人数</th>
      <td><input type="number" name="num">人</td>
      <th>概要</th>
      <td><textarea name="overview"></textarea></td>
    </tr>
  </table>
  <label>
      <input type="hidden" value="facilitie" name="type">
    </label>
  <input type="submit">
</form>