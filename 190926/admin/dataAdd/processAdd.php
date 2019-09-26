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
      $tName = 'compe';
      $Name = $_REQUEST['Name'];
      $Genre = $_REQUEST['Genre'];
      $type = $_REQUEST['type'];
      $olympic = $_REQUEST['olympic'];
      $date = $_REQUEST['date'];
      $time = $_REQUEST['time'];
      $overview = $_REQUEST['overview'];
      $attraction = $_REQUEST['attractions'];
      $prospect = $_REQUEST['prospect'];
      $trivia = $_REQUEST['trivia'];
      $answer = $_REQUEST['answer'];
      
//      $sql = "INSERT INTO '$tName' ('ID', 'Name', 'Genre', 'Type', 'Olympic', 'Date', 'Time', 'Overview', 'Prospect', 'Trivia', 'Answer') VALUES ('NULL', '$Name', '$Genre', '$type', '$olympic', '$date', '$time', '$overview', '$attractions', '$prospect', '$trivia', '$answer');";
      $sql = "INSERT INTO $tName (ID, Name, Genre, Type, Olympic, Date, Time, Overview, Attraction,Prospect, Trivia, Answer) VALUES (1,?,?,?,?,?,?,?,?,?,?,?);";
      
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
  }
?>