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
    max-height: 75vh; 
  
}


    @keyframes shine {
      0% {
        top: -150%;
        left: -150%;
      }
      100% {
        top: 150%;
        left: 150%;
      }
    }
  </style>
  </head>

  <body id="reportsPage">
  <?php require_once "header.php" ?>
    <div class="container mt-5">
      <div class="row tm-content-row" >
        
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col" >
        
        <?php


if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'admin') {
    require "quanlitaikhoannhanvien.php";
}
require "quanlitaikhoankhachhang.php ";
?>

    
        </div>
       
      </div>
    </div>
    <?php require_once"footer.php"; ?>

    <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>
   
    <script src="./view/viewadmin/js/bootstrap.min.js"></script>
    
    <script>
     
     document.getElementById("searchInput").addEventListener("input", function () {
  var input = document.getElementById("searchInput").value.toLowerCase();
  var rows = document.querySelectorAll(".tm-product-name");

  rows.forEach(function (row) {
    var productName = row.textContent.toLowerCase();
    if (productName.includes(input)) {
      row.closest(".col-md-4").style.display = "";
    } else {
      row.closest(".col-md-4").style.display = "none"; 
    }
  });
});

    </script>
  </body>
</html>
