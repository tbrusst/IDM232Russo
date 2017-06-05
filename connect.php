

<?php

$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
  // Local database credentials
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "portfolio";
}
else {
  // Remote database credentials
  $dbhost = "brendanr.us";
  $dbuser = "thebren8_russo";
  $dbpass = "Viper200!";
  $dbname = "thebren8_port";
}

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


?>
