<?php
        include 'connect.php';
        $sql1 = "SELECT * FROM cn_tc WHERE MaCongDan = '{$_POST['MaCongDan']}'";
        
        //tìm tên triệu chứng theo mã triệu chứng:

        echo "<tr>";
        echo "    <th>STT</th>";
        echo "    <th>Mã Triệu Chứng</th>";
        echo "    <th>Tên Triệu Chứng</th>";
        echo "</tr>";

        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
          // output data of each row
          $i = 1;
          while($row1 = $result1->fetch_assoc()) {
            $sql2 = "SELECT * FROM trieuchung WHERE MaTrieuChung = '{$row1['MaTrieuChung']}'";
            $result2 = $conn->query($sql2);
            while($row2 = $result2->fetch_assoc()) {
                echo "<tr >";
                echo "<td>".$i."</td>";
                echo "<td>".$row2['MaTrieuChung']."</td>";
                echo "<td>".$row2['TenTrieuChung']."</td>";
                echo "</tr>";
                $i++;
            }
            
        }
        } else {
          echo "không có dữ liệu";
        }
        $conn->close();
      ?>


       