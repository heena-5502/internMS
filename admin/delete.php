<?php 
include "connection.php"; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM `u_reg` WHERE `u_id`='$id'";
     $result1 = $conn->query($sql1);
     if ($result1 == TRUE) {
        echo "<script>window.open('view.php?deleted=ID: $id has been Deleted..!','_self')</script>";

    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>