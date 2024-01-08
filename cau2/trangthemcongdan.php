<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>trang them congdan</title>
  </head>

  <body>

    <form method="POST" action="themcongdan.php">
      <div>
        <label for="MaCongDan">Mã công dân </label>
        <input
          type="text"
          id="MaCongDan"
          name="MaCongDan"
          placeholder="Mã công dân"
        />
      </div>
      <div>
        <label for="TenCongDan">Tên công dân </label>
        <input
          type="text"
          id="TenCongDan"
          name="TenCongDan"
          placeholder="Tên công dân"
        />
      </div>
      <div>
        <label for="GioiTinh">Giới tính </label>
        <input type="checkbox" id="GioiTinh" name="GioiTinh" value="1"/>
        <i>(Chọn tương đương với giới tính Nam)</i>
      </div>
      <div>
        <label for="NamSinh">Năm sinh </label>
        <input type="date" id="NamSinh" name="NamSinh" />
      </div>
      <div>
        <label for="NuocVe">Nước về </label>
        <input type="text" id="NuocVe" name="NuocVe" placeholder="Nước về" />
      </div>
      <div>
        <label for="MaDiemCachLy">Tên điểm cách ly </label>
        <select name="MaDiemCachLy" id="MaDiemCachLy">
          
      <?php
        include '../connect.php';
        $sql = "SELECT * FROM diemcachly";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<option value=".$row["MaDiemCachLy"].">".$row["TenDiemCachLy"]."</option>";
          }
        } else {
          echo "<option value=''>không có dữ liệu</option>";
        }
        $conn->close();
      ?>

        </select>
      </div>
      <input type="submit" value="Thêm" />
    </form>
  </body>
</html>
