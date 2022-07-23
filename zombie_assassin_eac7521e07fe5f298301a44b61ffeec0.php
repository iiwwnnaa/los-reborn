<?php 
  include "./config.php"; 
  login_chk(); 
  $conn = dbconnect();  
  if(preg_match('/\\\|prob|_|\.|\(\)/i', $_GET['id'])) exit("No Hack ~_~"); 
  if(preg_match('/\\\|prob|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack ~_~"); 
  if(@preg_match("/'/",$_GET['id'])) exit("HeHe"); 
  if(@preg_match("/'/",$_GET['pw'])) exit("HeHe"); 
  $query = "select id from prob_zombie_assassin where id='{$_GET['id']}' and pw='{$_GET['pw']}'"; 
  echo "<hr>query : <strong>{$query}</strong><hr><br>"; 
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result['id']) solve("zombie_assassin"); 
  highlight_file(__FILE__); 
?>
