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
    max-height: 55vh; 
  
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
          <h2 style="color:white;text-align:center;font-weight:900">GIỎ HÀNG</h2>
      <input  type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm sản phẩm...">
 
            <div class="tm-product-table-container" >
              <table class="table table-hover tm-table-medium tm-product-table" >
                <thead>
                  <tr>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Màu sắc</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody  id="productTableBody">
                  <?php  $tongtien=0; foreach ($giohang as $row) {  $tongtien= $tongtien+ ( $row['gia_sanpham'] * $row['soluong_giohang'] );   ?>
                  <tr class="product-row">
                  <td class="tm-product-name"><a href="?act=chitietsp&id=<?= $row['id_sanpham'] ?>"  style="color:white;"><?= mb_strimwidth($row['ten_sanpham'], 0, 20, '...') ?></a></td>
                    <td><div class="rounded-circle img-container d-flex justify-content-center align-items-center">
  <img src="./image/<?= $row['anhgoiy_sanpham'] ?>" alt="Centered Image" class="img-fluid">
</div></td>
                  
                    <td>  <?=  $row['soluong_giohang'] ?></td>
                    <td><?=  $row['mausac_giohang'] ?></td>
                    <td><?=  $row['loai_giohang'] ?></td>
                    <td >
                    <?= number_format($row['gia_sanpham'] * $row['soluong_giohang'], 0, ',', '.') ?> VND
                      </a>
                    </td>
                    <td><?=  $row['thoigian_giohang'] ?></td>
                    <td>
                      <a onclick="return confirm('Bạn có muốn xóa không?')" href="?act=xoagiohang&id=<?=  $row['id_giohang'] ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                   
                  </tr>
           <?php } ?> 
                </tbody>
              </table>
          
            </div>
          
 <strong style="color:white;">Tổng tiền: <?= number_format($tongtien, 0, ',', '.') ?> VND</strong>
  
            <a  onclick="return confirm('Xác nhận đặt hàng ? ')"
              href="?act=thanhtoan&id=<?= $_SESSION['id'] ?>"
              class="btn btn-primary btn-block text-uppercase mb-3">Thanh toán</a>
             
            <a
              href="?act=/"
              class="btn btn-primary btn-block text-uppercase mb-3">Tiếp tục mua sắm</a>
             
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
