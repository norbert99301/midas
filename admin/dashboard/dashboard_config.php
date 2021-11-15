<?php 

include '../config.php';

        if (isset($_GET["sealed"])) {
        	 $delete_id = $_GET["sealed"];
  $select = mysqli_query($con, "SELECT * FROM all_items WHERE id = '$delete_id'");
  $data = mysqli_fetch_assoc($select);
    $id = $data["id"];
    $title = $data["name"];
    $category = $data["category"];
    $description = $data["description"];
    $location = $data["location"];
    $price = $data["price"];
    $status = "out of stock";
    $query = mysqli_query($con, "INSERT INTO sealed_deals (p_id, name, category, description, location, price, status) VALUES ('$id', '$title', '$category', '$description', '$location', '$price', '$status') ");
       
        $delete = mysqli_query($con, "DELETE FROM all_items WHERE id = '$delete_id'");
        header("location:". base_url."/admin/dashboard/?status=sealed");
        exit();


        }

  // $select = mysqli_query($con, "SELECT * FROM all_items WHERE id = '$delete_id'");
  // $data = mysqli_fetch_assoc($select);
  //   $id = $data["id"];
  //   $title = $data["name"];
  //   $category = $data["category"];
  //   $description = $data["description"];
  //   $location = $data["location"];
  //   $price = $data["price"];
  //   $status = "out of stock";
  //   $query = mysqli_query($con, "INSERT INTO sealed_deals (p_id, name, category, description, location, price, status) VALUES ('$id', '$title', '$category', '$description', '$location', '$price', '$status') ");

?>