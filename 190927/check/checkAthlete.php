<?php
print '
 <form action="../dataAdd/processAdd.php" method="get">
  <table border="1">
    <tr>
      <th>選手名</th>
      <td><input type="text" name="Name" value='.$_REQUEST['Name'].' readonly></td>
      <th>所属</th>
      <td><input type="text" name="Belong" value='.$_REQUEST['Belong'].' readonly></td>
    </tr>
    <tr>
      <th>公式プロフィール</th>
      <td colspan="3"><input type="url" name="Profile" value='.$_REQUEST['Profile'].' readonly></td>
    </tr>
  </table>
  <label>
      <input type="hidden" value="athlete" name="foo" readonly> 
    </label>
  <input type="submit">
</form>
';