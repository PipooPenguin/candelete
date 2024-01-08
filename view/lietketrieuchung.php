<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>trang them khach hàng</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>
  <script>
    $(document).ready(function() {
        $('#MaDiemCachLy').on('change', function() {
            var MaDiemCachLy = $('#MaDiemCachLy').val();
            // alert("select change");
            console.log($('#MaDiemCachLy').val());
            $.post("../congdan.php", { MaDiemCachLy }, 
              function(response) {
                // console.log(response);
                $('#MaCongDan').html(response);
                $('#MaCongDan').on('change',function(){
                  var MaCongDan = $('#MaCongDan').val();
                  $.post("../lietketrieuchung.php",{MaCongDan},
                  function(response){
                    $('#table').html(response);
                  })
                })
            });
        });
    });
</script>

    <table>
    <div>
        <label for="MaDiemCachLy">Tên điểm cách ly </label>
        <select name="MaDiemCachLy" id="MaDiemCachLy">
        <?php include "../lietkediemcachly.php"?>
        </select>
        <label for="MaCongDan">Tên công dân</label>
        <select name="MaCongDan" id="MaCongDan">
        </select>
        <table id="table"></table>
    </div>
  </body>
</html>
