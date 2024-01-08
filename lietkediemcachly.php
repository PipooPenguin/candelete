<?php
        include 'connect.php';
        $sql = "SELECT * FROM diemcachly";
        $result = $conn->query($sql);
        echo "<option value=''>chọn điểm cách ly</option>";
        if ($result->num_rows > 0) {
          // output data of each row
        
        
          while($row = $result->fetch_assoc()) {
            echo "<option value=".$row["MaDiemCachLy"].">".$row["TenDiemCachLy"]."</option>";
          }
        } else {
          echo "<option value=''>chuaload</option>";
        }
        $conn->close();
      ?>