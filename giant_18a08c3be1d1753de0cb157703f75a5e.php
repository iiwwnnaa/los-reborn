<?php 
  include "./config.php"; 
  login_chk(); 
  $conn = dbconnect();  
  if(strlen($_GET['shit'])>1) exit("No Hack ~_~"); 
  if(preg_match('/ |\n|\r|\t/i', $_GET['shit'])) exit("HeHe"); 
  $query = "select 1234 from{$_GET['shit']}prob_giant where 1"; 
  echo "<hr>query : <strong>{$query}</strong><hr><br>"; 
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result[1234]) solve("giant"); 
  highlight_file(__FILE__); 
?>
