<?php 
  include "./config.php"; 
  login_chk(); 
  $conn = dbconnect();   
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack ~_~"); 
  if(preg_match('/or|and/i', $_GET['pw'])) exit("HeHe"); 
  $query = "select id from prob_darkelf where id='guest' and pw='{$_GET['pw']}'"; 
  echo "<hr>query : <strong>{$query}</strong><hr><br>"; 
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result['id']) echo "<h2>Hello {$result['id']}</h2>"; 
  if($result['id'] == 'admin') solve("darkelf"); 
  highlight_file(__FILE__); 
?>
