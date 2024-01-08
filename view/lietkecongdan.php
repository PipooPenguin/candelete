<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>trang them khach hàng</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>
    <table>
    <tr>
        <th>STT</th>
        <th>Tên Công Dân</th>
        <th>Giới Tính</th>
        <th>Năm sinh</th>
        <th>Nước về</th>
        <th>Chức năng</th>
    </tr>
    <script>
        $(document).ready(function() {
    $('.delete-btn').on('click', function() {
        var MaCongDan = $(this).data("id");       
        //  console.log("xin chao:",MaCongDan);
        $currentRow = $(this);
        $.ajax({
            url: '../xoacongdan.php',
            type: 'POST',
            data: {MaCongDan},
            success: function(response) {
                        $currentRow.closest('tr').remove();
            }
        });
    });
});
    </script>
    <?php
        include '../connect.php';
        $sql = "SELECT * FROM congdan";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          $i = 1;
          while($row = $result->fetch_assoc()) {
            echo "<tr >";
            echo "<td>".$i."</td>";
            echo "<td>".$row['TenCongDan']."</td>";
            echo "<td>".$row['GioiTinh']."</td>";
            echo "<td>".$row['NamSinh']."</td>";
            echo "<td>".$row['NuocVe']."</td>";
            echo "<td>";
            // echo "<form type='POST' action='../xoacongdan.php'>";
            echo "<button class='delete-btn' data-id='".$row['MaCongDan']."'>Delete</button>";
            // echo "</form>";
            echo "</td>";
            echo "</tr>";
            $i++;
        }
        } else {
          echo "không có dữ liệu";
        }
        $conn->close();
      ?>
    
    </table>
  </body>
</html>
