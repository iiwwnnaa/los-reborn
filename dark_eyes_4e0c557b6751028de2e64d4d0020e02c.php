<?php
  include "./config.php"; 
  login_chk(); 
  $conn = dbconnect();  
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack ~_~");
  if(preg_match('/col|if|case|when|sleep|benchmark/i', $_GET['pw'])) exit("HeHe");
  $query = "select id from prob_dark_eyes where id='admin' and pw='{$_GET['pw']}'";
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if(mysqli_error($conn)) exit();
  echo "<hr>query : <strong>{$query}</strong><hr><br>";
  
  $_GET['pw'] = addslashes($_GET['pw']);
  $query = "select pw from prob_dark_eyes where id='admin' and pw='{$_GET['pw']}'";
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if(($result['pw']) && ($result['pw'] == $_GET['pw'])) solve("dark_eyes");
  highlight_file(__FILE__);
?>
