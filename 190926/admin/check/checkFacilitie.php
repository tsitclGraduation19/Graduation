<?php
print '
 <form action="checkAdd.php">
  <table border="1">
    <tr>
      <th>施設名</th>
      <td><input type="text" name="name" value='.$_REQUEST['name'].' readonly></td>
      <th>住所</th>
      <td colspan="3"><input type="text" name="nState" value='.$_REQUEST['nState'].' readonly>
      <select value="sState">';

      $list = ['都', '道', '府', '県'];

      for($i=0; $i<count($list); $i++)
      {
        if($list[$i] == $_REQUEST['sState'])
        {
          print "<option value='$list[$i]' selected>$list[$i]</option>";
        }
        else
        {
          print "<option value='$list[$i]'>$list[$i]</option>";
        }
      }

       print '<input type="text" name="nCity" value='.$_REQUEST['nCity'].' readonly>
       <select value="sCity">';

       $list = ['市', '区', '町', '村'];

       for($j=0; $j<count($list); $j++)
       {
         if($list[$j] == $_REQUEST['sCity'])
         {
           print "<option value='$list[$j]' selected>$list[$j]</option>";
         }
         else
         {
           print "<option value='$list[$j]'>$list[$j]</option>";
         }
       }
      
      print
      '</select>
      <input type="text" name="char" value='.$_REQUEST['char'].'>
      </td>
      </tr>
      <tr>
      <th>会場カラー</th>
      <td><input type="color" name="color" value='.$_REQUEST['color'].'></td>
      <th>収容人数</th>
      <td><input type="number" name="num" value='.$_REQUEST['num'].' readonly>人</td>
      <th>概要</th>
      <td><textarea name="overview" readonly>'.$_REQUEST['overview'].'</textarea></td>
    </tr>
  </table>
  <label><input type="hidden" value="facilitie" name="foo" readonly></label>
  <input type="submit">
</form>
';