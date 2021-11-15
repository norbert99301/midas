<?php

// include '../login_config.php';
session_start();

//  $row = mysqli_query($con, 'SELECT count(id) AS total FROM all_items');
//   $values = mysqli_fetch_assoc($row);
//   $num_rows = $values["total"];
//   echo $num_rows;
// session_start();

     $name = $_SESSION['name'];
     echo $name;
?>