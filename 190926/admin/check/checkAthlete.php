<?php
print '
 <form action="checkAdd.php">
  <table border="1">
    <tr>
      <th>選手名</th>
      <td><input type="text" name="Name" value='.$_REQUEST['Name'].' readonly></td>
      <th>所属</th>
      <td><input type="text" name="belong" value='.$_REQUEST['belong'].' readonly></td>
    </tr>
    <tr>
      <th>公式プロフィール</th>
      <td colspan="3"><input type="url" name="profile" value='.$_REQUEST['profile'].' readonly></td>
    </tr>
  </table>
  <label>
      <input type="hidden" value="athlete" name="foo" readonly> 
    </label>
  <input type="submit">
</form>
';