<?php
//Why is this important? Why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
//$mysqli->connect_error then we want it to die and have this message
if(mysqli->connect_error) {
  die('Connect Error (' . $mysqli->connect_errno .')'
    . $msqli->connect_error);
}
else {
  echo "Connectino made";
}
$mysqli->close();

?>
