<?php
$DB_NAME = 'alumnimeet';//getenv('DB_NAME');
$DB_HOST = 'localhost';//getenv('DB_HOST');
$DB_USER = 'root';//getenv('DB_USERNAME');
$DB_PASS = '';//getenv('DB_PASSWORD');
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
} else {
  echo "Connection Successful<br>";
}
?>
