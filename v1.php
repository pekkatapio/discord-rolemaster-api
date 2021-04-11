<?php

  // This script opens file containing usernames and appends
  // username passed through api call to the end of the file.

  $file = fopen("./userlist.txt", "a");
  $user = $_POST["name"];
  fwrite($file, "$user\n");
  fclose($file);

?>
