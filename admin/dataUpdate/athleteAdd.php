<form action="check/checkAdd.php">
  <table border="1">
    <tr>
      <th>選手名</th>
      <td><input type='text' name='Name'></td>
      <th>所属</th>
      <td><input type="text" name="Belong"></td>
    </tr>
    <tr>
      <th>公式プロフィール</th>
      <td colspan="3"><input type='url' name='Profile'></td>
    </tr>
  </table>
  <label>
      <input type="hidden" value="athlete" name="foo">
    </label>
  <input type="submit">
</form>