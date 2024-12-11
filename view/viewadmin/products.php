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
          
      <input  type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm sản phẩm...">
 
            <div class="tm-product-table-container" >
              <table class="table table-hover tm-table-medium tm-product-table" >
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">ẢNH</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">GIÁ</th>
                    <th scope="col">SỐ LƯỢNG</th>
                    <th scope="col">ĐÃ BÁN ĐƯỢC</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody  id="productTableBody">
                  <?php foreach ($sanpham as $row) { ?>
                  <tr class="product-row">
                  <td><?= $row['id_sanpham'] ?></td>
                    <td><div class="rounded-circle img-container d-flex justify-content-center align-items-center">
  <img src="./image/<?= $row['anhgoiy_sanpham'] ?>" alt="Centered Image" class="img-fluid">
</div></td>
                    <td class="tm-product-name"><a href="?act=chitietsp&id=<?= $row['id_sanpham'] ?>" style="color:white;"><?= mb_strimwidth($row['ten_sanpham'], 0, 60, '...') ?></a></td>
                    <td><a href="?act=chitietsp&id=<?= $row['id_sanpham'] ?>" style="color:white;"><?= number_format($row['gia_sanpham'], 0, ',', '.') ?> VND</a></td>
                    <td><a href="?act=chitietsp&id=<?= $row['id_sanpham'] ?>" style="color:white;"><?= $row['soluongtrongkho_sanpham'] ?></a></td>
                    <td><a href="?act=chitietsp&id=<?= $row['id_sanpham'] ?>" style="color:white;"><?= $row['sanphambanduoc_sanpham'] ?></a></td>
                    <td>
                      <a href="?act=editsp&id=<?=  $row['id_sanpham'] ?>"  class="tm-product-delete-link">
                      <i class="fas fa-pencil-alt tm-product-edit-icon"></i>

                      </a>
                    </td>
                    <td>
                      <a onclick="return confirm('Bạn có muốn xóa không?')" href="?act=xoasp&id=<?=  $row['id_sanpham'] ?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                   
                  </tr>
           <?php } ?>
                </tbody>
              </table>
            </div>
          
            <a
              href="?act=addproduct"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm sản phẩm mới</a>
              <a
              href="?act=themdanhmuc"
              class="btn btn-primary btn-block text-uppercase mb-3">Thêm danh mục</a>
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
