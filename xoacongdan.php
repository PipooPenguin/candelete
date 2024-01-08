<?php
    include "connect.php";
    echo "MaCongDan=".$_POST['MaCongDan'];
    $sql = "DELETE FROM congdan
    WHERE MaCongDan = '{$_POST['MaCongDan']}'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
?>