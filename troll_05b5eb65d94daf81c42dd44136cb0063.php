<?php  
  include "./config.php"; 
  login_chk(); 
  dbconnect(); 
  if(preg_match('/\'/i', $_GET['id'])) exit("No Hack ~_~");
  if(@ereg("admin",$_GET['id'])) exit("HeHe");
  $query = "select id from prob_troll where id='{$_GET['id']}'";
  echo "<hr>query : <strong>{$query}</strong><hr><br>";
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result['id'] == 'admin') solve("troll");
  highlight_file(__FILE__);
?>
