<?php
require('config/db.php');
//create Query
$query = 'SELECT * FROM posts';

//get result
$result = mysqli_query($conn, $query);
// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);
//FREE result
mysqli_free_result($result);
// close connection
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>my php blog</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <?php foreach ($posts as $post): ?>
      <div class="well">
        <h3><?php echo $post['title'] ?></h3>
      </div>
      <div class="">
        <img src="<?=$row[6]?>" width="175" height="200" />
      </div>
    <?php endforeach; ?>
  </body>
</html>
