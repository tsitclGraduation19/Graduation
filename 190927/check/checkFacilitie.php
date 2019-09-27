<?php
print '
 <form action="../dataAdd/processAdd.php">
  <table border="1">
    <tr>
      <th>施設名</th>
      <td><input type="text" name="Name" value='.$_REQUEST['Name'].' readonly></td>
      <th>住所</th>
      <td colspan="2"><input type="text" name="nState" value='.$_REQUEST['nState'].' readonly>
      <select name="sState">';

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
       <select name="sCity">';

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
      <input type="text" name="Char" value='.$_REQUEST['Char'].'>
      </td>
      <td>
        緯度&#40;Lats&#41;&#58;<input type="number" name="Lats" step="0.0000001" max="99.9999999" value='.$_REQUEST['Lats'].'>
        緯度&#40;Lngs&#41;&#58;<input type="number" name="Lngs" step="0.0000001" max="999.9999999" value='.$_REQUEST['Lngs'].'>
      </td>
      </tr>
      <tr>
      <th>会場カラー</th>
      <td><input type="color" name="Color" value='.$_REQUEST['Color'].'></td>
      <th>収容人数</th>
      <td><input type="number" name="Num" value='.$_REQUEST['Num'].' readonly>人</td>
      <th>概要</th>
      <td><textarea name="Overview" readonly>'.$_REQUEST['Overview'].'</textarea></td>
    </tr>
  </table>
  <label><input type="hidden" value="facilitie" name="foo" readonly></label>
  <input type="submit">
</form>
';