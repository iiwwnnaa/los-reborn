<?php 
  include "./config.php"; 
  login_chk(); 
  dbconnect(); 
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack ~_~"); 
  if(preg_match('/or|and/i', $_GET['pw'])) exit("HeHe"); 
  $query = "select id from prob_orge where id='guest' and pw='{$_GET['pw']}'"; 
  echo "<hr>query : <strong>{$query}</strong><hr><br>"; 
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result['id']) echo "<h2>Hello {$result['id']}</h2>"; 
   
  $_GET['pw'] = addslashes($_GET['pw']); 
  $query = "select pw from prob_orge where id='admin' and pw='{$_GET['pw']}'"; 
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if(($result['pw']) && ($result['pw'] == $_GET['pw'])) solve("orge"); 
  highlight_file(__FILE__); 
?>
