<?php
  switch($_REQUEST['foo'])
  {
    case 'compe':
      print '<input id="all" type="radio" name="tab_item" checked>'
      .'<label class="tab_item" for="all" id="select">競技</label>'
      .'<input id="programming" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="programming" id="notSelect">選手</label>'
      .'<input id="design" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="design" id="notSelect">施設</label>'
      .'<div class="tab_content" id="all_content">';
      break;
      
    case 'athlete':
      print '<input id="all" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="all" id="notSelect">競技</label>'
      .'<input id="programming" type="radio" name="tab_item" checked>'
      .'<label class="tab_item" for="programming" id="select">選手</label>'
      .'<input id="design" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="design" id="notSelect">施設</label>'
      .'<div class="tab_content" id="all_content">';
      break;

    case 'facilitie':
      print '<input id="all" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="all" id="notSelect">競技</label>'
      .'<input id="programming" type="radio" name="tab_item" disabled>'
      .'<label class="tab_item" for="programming" id="notSelect">選手</label>'
      .'<input id="design" type="radio" name="tab_item" checked>'
      .'<label class="tab_item" for="design" id="select">施設</label>'
      .'<div class="tab_content" id="all_content">';
      break;

    default:
      print '<input id="all" type="radio" name="tab_item" checked>'
      .'<label class="tab_item" for="all">競技</label>'
      .'<input id="programming" type="radio" name="tab_item">'
      .'<label class="tab_item" for="programming">選手</label>'
      .'<input id="design" type="radio" name="tab_item">'
      .'<label class="tab_item" for="design">施設</label>'
      .'<div class="tab_content" id="all_content">';
      break;
  }
?>