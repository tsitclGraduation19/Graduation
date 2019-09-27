<?php
  $host='localhost';
  $dbName='pdgraduation';
  $charset = 'utf8';
  $uName = 'Organizer';
  $passwd = 'hsyJW61xVZY7JT7K';
  
  $pdo = new PDO("mysql:host=".$host.";dbname=".$dbName.";charset=".$charset,$uName,$passwd);
  
  if($pdo)
  {
    $debug = '接続成功';
  }
  else
  {
    $debug = '接続失敗';
  }
  
  switch($_REQUEST['foo'])
  {
    case 'compe':
      $sql = "INSERT INTO $tName (ID, Name, Genre, Type, Olympic, Date, Time, Overview, Attraction,Prospect, Trivia, Answer) VALUES (null,?,?,?,?,?,?,?,?,?,?,?);";      
      print $sql;
      $ready = $pdo->prepare($sql);
      if($ready->execute([$_REQUEST['Name'],
$_REQUEST['Genre'],
$_REQUEST['type'],
$_REQUEST['olympic'],
$_REQUEST['date'],
$_REQUEST['time'],
$_REQUEST['overview'],
$_REQUEST['attractions'],
$_REQUEST['prospect'],
$_REQUEST['trivia'],
$_REQUEST['answer']]))
      {
        print '<br>登録成功';
      }
      else
      {
        print '<br>登録失敗';
      }
      break;
    
    case 'athlete':
      $tName = 'athletes';
      $sql = "INSERT INTO $tName (ID, Name, Belong, Profile) VALUES (null,?,?,?);";
      print $sql;
      $ready = $pdo->prepare($sql);
      if($ready->execute([$_REQUEST['Name'],
$_REQUEST['Belong'],
$_REQUEST['Profile']]))
      {
        print '<br>登録成功';
      }
      else
      {
        print '<br>登録失敗';
      }
      break;
      
      case 'facilitie':
      $tName = 'facilities';
      $nState = $_REQUEST['nState'];
      $sState = $_REQUEST['sState'];
      $nCity = $_REQUEST['nCity'];
      $sCity = $_REQUEST['sCity'];
      $Char = $_REQUEST['Char'];
      
      $Address = "$nState$sState$nCity$sCity$Char";
      $Lats = $_REQUEST['Lats'];
      $Lngs = $_REQUEST['Lngs'];
      $sql = "INSERT INTO $tName (ID, Name, Address, Latitude, Longitude, Color, PeopleNum, Overview) VALUES (null,?,?,?,?,?,?,?);";
      print $sql;
      $ready = $pdo->prepare($sql);
      if($ready->execute([$_REQUEST['Name'],
$Address,
$Lats,
$Lngs,
$_REQUEST['Color'],
$_REQUEST['Num'],
$_REQUEST['Overview']]))
      {
        print "INSERT INTO $tName (ID, Name, Address, Latitude, Longitude, Color, PeopleNum, Overview) VALUES (0, ".$_REQUEST['Name'].", $Address, $Lats, $Lngs, ".$_REQUEST['Color'].", ".$_REQUEST['Num'].", ".$_REQUEST['Overview'].");".'<br>登録成功';
      }
      else
      {
        print '<br>登録失敗';
      }
      break;
  }
?>