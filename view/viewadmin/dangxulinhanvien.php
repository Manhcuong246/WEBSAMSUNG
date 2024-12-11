<?php
if (!isset($_SESSION['id'])) {
 
    header('Location: ?act=login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />

    <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />

    <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />
 
    <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
  <style>
    .blockmain{
      border-radius: 20px;
    } .btn{
      transition: all 0.5s ease;
      border-radius: 15px ;
    }
    .tm-product-table-container {
    max-height: 65vh; 
  background-color: red;
}

    .fa-pencil-alt{
    
      font-size: 19px;
      color:white;
    }
    .tm-product-delete-link:hover .fa-pencil-alt{
      color:#648198;
    }
    .img-container {
    width: 70px; 
    height: 70px; 
    overflow: hidden;
    background-color: #f0f0f0; 
    position: relative;
  }

  .img-container img {
    max-width: 100%; 
    max-height: 100%;
    object-fit: cover; 
    position: absolute;
  }
  #searchInput{
    transition: all 0.5s ease;
    margin-bottom: 30px;
    border-radius: 20px;
  }
  #searchInput::placeholder{
   color:white;
  }

  </style>
  </head>

  <body id="reportsPage">
  <?php require_once "header.php" ?>
    <div class="container mt-5">
      <div class="row tm-content-row">
        
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          
          <div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;">
          <h2 style="color:white;text-align:center;font-weight:900">ĐƠN HÀNG</h2>
      <?php
      $result = [];

      // Duyệt qua mảng ban đầu
      foreach ($dangxulinhanvien as $item) {
          // Kiểm tra xem đơn hàng đã tồn tại trong mảng kết quả chưa
          if (!isset($result[$item['id_donhang']])) {
              // Nếu chưa, tạo một mảng cho đơn hàng này
              $result[$item['id_donhang']] = [
                  "id_donhang" => $item['id_donhang'],
                  "id_taikhoan_donhang" => $item['id_taikhoan_donhang'],
                  "thoigian_donhang" => $item['thoigian_donhang'],
                  "trangthai_donhang" => $item['trangthai_donhang'],
                  "diachi_donhang" => $item['diachi_donhang'],
                  "ten_taikhoan" => $item['tennguoidung_taikhoan'],
                  "anh_taikhoan" => $item['anh_taikhoan'],
                  "chitiet" => []
              ];
          }
      
          // Thêm chi tiết sản phẩm vào đơn hàng
          $result[$item['id_donhang']]['chitiet'][] = [
              "id_chitiet" => $item['id_chitiet'],
              "soluong_chitiet" => $item['soluong_chitiet'],
              "mausac_chitiet" => $item['mausac_chitiet'],
              "id_sanpham" => $item['id_sanpham'],
              "ten_sanpham" => $item['ten_sanpham'],
              "gia_sanpham" => $item['gia_sanpham']
          ];
      }
      
   
      $donhang = array_values($result);
      ?>
            <div class="tm-product-table-container" >
              <table class="table table-hover tm-table-medium tm-product-table" >
                <thead>
                  <tr>
                  <th scope="col" class="id_donhang">Mã đơn </th>
            <th scope="col" class="tenkhachhang">Tên khách hàng</th>
            <th scope="col" class="trangthai">Ngày đặt hàng</th>
            <th scope="col">Tổng giá trị đơn hàng</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody  id="productTableBody">
                  <?php   foreach ($donhang as $row) { $tong=0;  foreach ($row['chitiet'] as $item) {
       $tong += $item['gia_sanpham'] * $item['soluong_chitiet']; 
    }
                      ?>
                  <tr class="product-row">
                  <td class="tm-product-name" style="width:10%">#<?= $row['id_donhang'] ?></td>
                
                  <td class="tennguoi"><a href="?act=chitietuser&id=<?= $row['id_taikhoan_donhang'] ?>" style="color:white;"><?= $row['ten_taikhoan'] ?></a></td>
                   
                  
                    <td style="width:15%">
                    <?= $row['thoigian_donhang'] ?>
                      
                    </td>
                    <td >
                      
                    <?= number_format ( $tong, 0, ',', '.');  ?> VND
                      
                    </td>
                    <td> <?php
                    if ($row['trangthai_donhang'] == 'danggiao') {
                        echo '<div class="tm-status-circle pending"></div> Đang giao';
                    } elseif ($row['trangthai_donhang'] == 'thanhcong') {
                        echo '<div class="tm-status-circle moving"></div> Thành công';
                    } elseif ($row['trangthai_donhang'] == 'thatbai') {
                        echo '<div class="tm-status-circle cancelled"></div> Thất bại';
                    }
                    ?></td>
                    <td><?=  $row['diachi_donhang'] ?></td>
                    <td>
                      <a onclick="return"  href="?act=chitietdonhang&id=<?= $row['id_donhang'] ?>" class="tm-product-delete-link">
                      <i class="far fa-eye tm-product-view-icon" style="color: white;"></i>

                      </a>
                    </td>
                    <td>
                      <a onclick="return confirm('Đơn hàng này đã hoàn thành ?')"   href="?act=giaothanhcong&id=<?= $row['id_donhang'] ?>" class="tm-product-delete-link">
                      <i class="fas fa-check" style="color: white;"></i>

                      </a>
                    </td>
                   
                  </tr>
           <?php } ?> 
                </tbody>
              </table>
          
          
            </div>
        
          </div>
        </div>
       
      </div>
    </div>
    <?php require_once"footer.php"; ?>

    <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>
   
    <script src="./view/viewadmin/js/bootstrap.min.js"></script>
    
    <script>
     
      document.getElementById("searchInput").addEventListener("input", function() {
  var input = document.getElementById("searchInput").value.toLowerCase();
  var rows = document.querySelectorAll("#productTableBody .product-row");

  rows.forEach(function(row) {
    var productName = row.querySelector(".tm-product-name ").textContent.toLowerCase();
    if (productName.includes(input)) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
});

    </script>
      <script>
     
     document.getElementById("searchInput").addEventListener("input", function() {
 var input = document.getElementById("searchInput").value.toLowerCase();
 var rows = document.querySelectorAll("#productTableBody .product-row");

 rows.forEach(function(row) {
   var productName = row.querySelector(".tm-product-name a").textContent.toLowerCase();
   if (productName.includes(input)) {
     row.style.display = "";
   } else {
     row.style.display = "none";
   }
 });
});

   </script>
  </body>
</html>
