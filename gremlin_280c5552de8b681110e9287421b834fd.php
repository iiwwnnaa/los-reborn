<?php
  include "./config.php";
  login_chk();
  $conn = dbconnect(); 
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['id'])) exit("No Hack ~_~"); // do not try to attack another table, database!
  if(preg_match('/prob|_|\.|\(\)/i', $_GET['pw'])) exit("No Hack ~_~");
  $query = "select id from prob_gremlin where id='{$_GET['id']}' and pw='{$_GET['pw']}'";
  echo "<hr>query : <strong>{$query}</strong><hr><br>";
  $result = @mysqli_fetch_array(mysqli_query($conn,$query)); 
  if($result['id']) solve("gremlin");
  highlight_file(__FILE__);
?>