<?php

include 'config.php';

if (isset($_GET['i']) {
  $i = $_GET['i'];
  $sql1 = "select * from shorturl where i = $i";
  $query1 = mysqli_query($conn, $sql1);
  $result1 = mysqli_fetch_assoc($query1);
  $real_url = $result1['url"];
  header("Location: $real_url");
  exit();
}

?>