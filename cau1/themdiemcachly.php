<?php
    include "../connect.php";
    $MaDiemCachLy=$_POST['MaDiemCachLy'];
    $TenDiemCachLy=$_POST['TenDiemCachLy'];
    $DiaChi=$_POST['DiaChi'];
    $SucChua=$_POST['SucChua'];

    $sql = "INSERT INTO diemcachly (MaDiemCachLy, TenDiemCachLy, DiaChi, SucChua) VALUES ('$MaDiemCachLy', '$TenDiemCachLy', '$DiaChi', '$SucChua')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the database connection
    $conn->close();
?>