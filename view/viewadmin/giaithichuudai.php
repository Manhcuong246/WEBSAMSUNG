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
    width: 70px; /* Đường kính của hình tròn */
    height: 70px; /* Đường kính của hình tròn */
    overflow: hidden;
    background-color: #f0f0f0; /* Màu nền nếu ảnh không phủ hết */
    position: relative;
  }

  .img-container img {
    max-width: 100%; /* Phù hợp chiều ngang của div */
    max-height: 100%; /* Phù hợp chiều dọc của div */
    object-fit: cover; /* Ảnh luôn che phủ toàn bộ hình tròn */
    position: absolute; /* Đảm bảo căn giữa */
  }

  .uudai2 {
        transform: scale(0.95);
        margin-bottom: 8px;
        background-color: #f4f6fe;
        height: auto;
        width: 100%;
        border-radius: 10px;

    }
    .fathersamsungcamketgia {

height: 50px;
display: flex;
align-items: center;
}  .samsungcamketgia {
        padding: 0 15px;
        background-color: #006bea;
        width: auto;
        font-size: 14px;
        height: 55%;
        border-radius: 20px;
        color: white;
        border: none;

    }
    .tm-product-table-container {
      min-height: 80vh !important;
    }
  </style>
  </head>

  <body id="reportsPage">
  <?php require_once "header.php" ?>
    <div class="container mt-5">
      <div class="row tm-content-row">
        
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          
          <div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;">
            <div class="tm-product-table-container" >
              <table class="table table-hover tm-table-medium tm-product-table" >
                <thead>
                  <tr>
                  <th scope="col">Loại</th>
                    <th scope="col">Nhãn</th>
                  </tr>
                </thead>
                <tbody  id="productTableBody">
                  <?php foreach ($giaithichuudai as $row) { ?>
                  <tr class="product-row">
                    <td><a style="color:white;"><?= $row['id_cacloaiuudai'] ?></a></td>
                    <td><a style="color:black;"><?= $row['code_cacloaiuudai'] ?></a></td>
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
