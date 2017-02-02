<?php
  // server name, user name, password, database name
  $db = new mysqli('localhost', 'stacy', 'lucy2016', 'stacy-mackin');

  if ($db->connect_error) {
    echo 'Connection failure: ' . $db->connect_error;
  }
  else {
    $sql = "INSERT INTO contact (firstName, lastName, email, message)
    VALUES('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[message]')";

    if ($db->query($sql) === TRUE) {
      echo 'Success';
    } else {
      echo 'Error: ' . $sql . '<br>' . $db->error;
    }
  }

  $conn->close();
?>
