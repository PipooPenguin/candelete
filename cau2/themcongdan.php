<?php
    include "connect.php";
    $MaCongDan = $_POST['MaCongDan'];
    $TenCongDan = $_POST['TenCongDan'];
    $NamSinh = $_POST['NamSinh'];
    $NuocVe = $_POST['NuocVe'];
    $MaDiemCachLy = $_POST['MaDiemCachLy'];
    if(isset($_POST['GioiTinh'])){
        $GioiTinh = 1;
    }
    else{
        $GioiTinh = 0;
    }

    $sql = "INSERT INTO congdan (MaCongDan, TenCongDan, NamSinh, NuocVe,MaDiemCachLy,GioiTinh) VALUES ('$MaCongDan', '$TenCongDan', '$NamSinh', '$NuocVe','$MaDiemCachLy',$GioiTinh)";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>