<?php
        include 'connect.php';
        $sql = "SELECT * FROM congdan WHERE MaDiemCachLy = '{$_POST['MaDiemCachLy']}'";
        $result = $conn->query($sql);
        echo "<option value=''>chọn công dân</option>";

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<option value=".$row["MaCongDan"].">".$row["TenCongDan"]."</option>";
          }
        } else {
          echo "<option value=''>chuaload</option>";
        }
        $conn->close();
      ?>