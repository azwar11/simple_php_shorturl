<?php

include 'config.php';

if (isset($_POST['submit'])) {
  $url = $_POST["url"];
  $shorturl = str(rand(0, 10000000000000));
  $sql1 = "insert into shorturl (url, shorturl) values ('$url','$shorturl')";
  $query1 = mysqli_query($conn, $sql1);
  echo "Url: https://short.anwrsyd.my.id/s.php?i=$shorturl";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple PHP Shorturl</title>
  </head>
  <body>
    <form method="post" action="">
      <input type="text" value="" id="url" name="url" placeholder="Input url" />
      <button type="submit" name="submit">Shorten</button>
    </form>
  </body>
</html>