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
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="./view/viewadmin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
 <style>
   .tm-product-img-dummy{

border-radius: 15px ;
}
    .form-group input{
      transition: all 0.5s ease;
      border-radius: 15px ;
    }
    .btn{
      transition: all 0.5s ease;
      border-radius: 15px ;
    }
 </style>
  </head>

  <body>
  <?php require_once "header.php" ?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Thêm danh mục mới</h2>
              </div>
              <form method="post" style="width:100%" >
             
              <div class="col-12">
              <input
                     style="border-radius:10px;margin-bottom:10px"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                <button type="submit" name="themdanhmuc" class="btn btn-primary btn-block text-uppercase">Thêm</button>
                <?php
if (isset($_GET['thanhcong']) && $_GET['thanhcong'] === 'true') {
    echo '<p style="color: #66ff66;text-align:center">Thêm thành công</p>';
}
else echo ' <p style="color: #66ff66;text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;</p> ';
?>
              </div>
            </form>
           

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once"footer.php"; ?>

    <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="./view/viewadmin/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="./view/viewadmin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
