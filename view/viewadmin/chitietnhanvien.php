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
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />

    <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />
  
    <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />

    <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
   <style>
    .form-group input{
      transition: all 0.5s ease;
      border-radius: 15px ;
    }
    .btn{
      transition: all 0.5s ease;
      border-radius: 15px ;
    }
      .tm-avatar{

        border-radius: 15px ;
    }
    #xoataikhoan{
      color:white;

    }
    #xoataikhoan:hover{
      transition: all 0.1 ease;
     transform: scale(1.02);
     box-shadow: 0px 0px 5px black;
    }
    .tm-bg-primary-dark{  border-radius: 15px ;}
   
    .tm-avatar-container img{
      object-fit:cover;
   }
   input[readonly] {
  background-color: inherit !important; 
  color: white !important;       
  border: 1px solid #ccc !important;
  cursor: text;       
}

   </style>
  </head>

  <body id="reportsPage">
    <div class="" id="home">
    <?php require_once "header.php" ?>
      <div class="container mt-5">
        <div class="row tm-content-row">
          
          <div class="col-12 tm-block-col">
          
   
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">
            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title"></h2>
              <div class="tm-avatar-container" style="height: 240px">
                <img
                  src="./image/<?=  $thongtinhanvien['anh_taikhoan'] ?>"
                  alt="Avatar"
                  id="img"
                  name="img"
                  class="tm-avatar img-fluid mb-4"
                  style="width:130%;height:130%;transform:translate(0px,-30px)"
                />
              </div>
              <div class="custom-file-upload" style="margin-top:30px;">
</div>

               
            
            </div>
          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Cài đặt tài khoản</h2>
              <div  class=" row">
                <div class="form-group col-lg-6">
                  <label for="name"> <i class="fas fa-user tm-nav-icon"></i> Họ tên</label>
                  <input
                  readonly
                    id="name"
                    name="name"
                    type="text"
                    class="form-control validate"
                     value="<?=  $thongtinhanvien['tennguoidung_taikhoan'] ?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email"><i class="fas fa-envelope tm-nav-icon"></i> Email tài khoản</label>
                  <input
                  readonly
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                     value="<?=  $thongtinhanvien['email_taikhoan'] ?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="sdt"><i class="fas fa-phone tm-nav-icon"></i> Số điện thoại</label>
                  <input
                  readonly
                    id="sdt"
                    name="sdt"
                    type="tel"
                    class="form-control validate"
                       value="<?=  $thongtinhanvien['sdt_taikhoan'] ?>"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="pass"><i class="fas fa-lock tm-nav-icon"></i> Mật khẩu hiện tại</label>
                  
                  <input
                  readonly
                    id="pass"
                    name="pass"
                    type="text"
                    class="form-control validate"
                      value='<?=  $thongtinhanvien['matkhau_taikhoan'] ?>'
                  />
                  
                </div>
               
                </div> <a
                  id="xoataikhoan"
                     name="capnhathoso"
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                    style="background-color: red;border-color: red; "
                  >
                  Xóa tài khoản
                        </a> 
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">Thông tin nhân viên</h2>
              <div class="container  text-white ">
        
    </div>  -->
            </div>
          </div>
        </div>
      <?php require_once"footer.php"; ?>
    </div>

    <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>

    <script src="./view/viewadmin/js/bootstrap.min.js"></script>
  
  </body>
  <script>
  const sessionPassword = "<?= $thongtinhanvien['matkhau_taikhoan'] ?>"; 


  const currentPasswordInput = document.getElementById("pass");
  const newPasswordInput = document.getElementById("newpass");
  const confirmPasswordInput = document.getElementById("repass");
  const submitButton = document.getElementById("submitBtn");

  
  function validateInputs() {
    let isValid = true;
  
    if (currentPasswordInput.value !== sessionPassword) {
      currentPasswordInput.classList.add("error"); 
      isValid = false;
    } else {
      currentPasswordInput.classList.remove("error"); 
    }

   
    if (newPasswordInput.value !== confirmPasswordInput.value) {
      newPasswordInput.classList.add("error");
      confirmPasswordInput.classList.add("error");
      isValid = false;
    } else {
      newPasswordInput.classList.remove("error");
      confirmPasswordInput.classList.remove("error");
    }

   
    submitButton.disabled = !isValid;
  }

 
  currentPasswordInput.addEventListener("input", validateInputs);
  newPasswordInput.addEventListener("input", validateInputs);
  confirmPasswordInput.addEventListener("input", validateInputs);

 
  validateInputs();
</script>

<style>
  .error {
    border: 1px solid red; /* Thêm viền đỏ cho ô input khi có lỗi */
  }
</style>

</html>
