<?php

   include('connect.php');
   // include('arrays.php');

   // Step 2: Preform Database Query
   $id = (int) $_GET['id'];
   $query = "SELECT * FROM portfolio WHERE id='$id' LIMIT 1";
   $result = mysqli_query($connection, $query);
   // Check there are no errors with our SQL statement
   if (!$result) {
     die ("Database query failed.");
   }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes, width=device-width, maximum-scale=1.0" />
    <meta charset="utf-8">
    <title>
      <?php
      $info = mysqli_fetch_array($result);
      echo $info['title'];
      mysqli_free_result($result);
      ?>
    </title>
    <link rel="stylesheet" href="project.css">
  </head>
  <body>

    <a href="index.php"><img id="nav" src="img/logo.png" alt=""></a>


      <?php

					$build = "<div class='info'>" . "<h1>" . $info['title'] . "</h1>" . "<p>" . $info['description'] . "</p>" . "</div>";
					echo $build;
          echo $info['images'];
          mysqli_free_result($result);
          mysqli_close($connection);

			?>



  </body>
</html>
