<?php

if ($sotiendatieu[0]['tong'] == null) {
  $sotiendatieu[0]['tong'] = 0;
}

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
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />

  <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
  <style>
    .rank {

      height: 240px;
      width: 240px;
      position: absolute;
      text-align: center;
      right: 0;
      transform: translate(-100px, -55px);
    }

    .rank img {
      height: 95%;
      width: 95%;
    }

    .rank p {
      color: white;
      font-size: 20px;
      transform: translate(0, -20px);
    }

    .form-group input {
      transition: all 0.5s ease;
      border-radius: 15px;
    }

    .btn {
      transition: all 0.5s ease;
      border-radius: 15px;
    }

    .tm-avatar {

      border-radius: 15px;
    }

    .tm-bg-primary-dark {
      border-radius: 15px;
    }

    .tm-avatar-container img {
      object-fit: cover;
    }
  </style>
</head>

<body id="reportsPage">
  <div class="" id="home">
    <?php require_once "header.php" ?>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">

            <?php

            if (isset($_SESSION['vaitro'])) {
              if ($_SESSION['vaitro'] == 'khachhang') {
                echo '<div class="rank">
                <img src="./image/' . $rank['anh_rank'] . '" alt="">
                <p><em>' . $rank['ten_rank'] . '</em></p>
              </div>';
            ?>
                <h2 class="tm-block-title" style="font-size: 35px; margin-bottom: 35px;">Số tiền đã tiêu</h2>
                <div class="container text-white" style="height: 80px;">
                  <div style="font-size: 30px; font-weight: 900;">
                    <i class="fas fa-coins"></i> <?= number_format($sotiendatieu[0]['tong'], 0, ',', '.') ?> VND
                  </div>
                </div>
              <?php
              } elseif ($_SESSION['vaitro'] == 'admin' || $_SESSION['vaitro'] == 'nhanvien') {
              ?>
                <h2 class="tm-block-title">Thông tin tài khoản</h2>
                <div class="container text-white">
                  <div>
                    <i class="fas fa-user"></i> <?= $taikhoan['tennguoidung_taikhoan'] ?>
                  </div>
                  <div>
                    <i class="fas fa-briefcase"></i> <?= $taikhoan['tacnhan_taikhoan'] ?>
                  </div>
                  <div>
                    <i class="fas fa-envelope"></i> <?= $taikhoan['email_taikhoan'] ?>
                  </div>
                  <div>
                    <i class="fas fa-phone"></i> <?= $taikhoan['sdt_taikhoan'] ?>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <form id="formacc" method="post" enctype="multipart/form-data">
          <div class="row tm-content-row">
            <div class="tm-block-col tm-col-avatar">
              <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                <h2 class="tm-block-title"></h2>
                <div class="tm-avatar-container" style="height: 300px">
                  <img
                    src="./image/<?= $taikhoan['anh_taikhoan'] ?>"
                    alt="Avatar"
                    id="img"
                    name="img"
                    class="tm-avatar img-fluid mb-4"
                    style="width:100%;height:100%" />
                </div>
                <div class="custom-file-upload" style="margin-top:30px;">
                  <input type="file" id="file-input" name="img" hidden>
                  <button type="button" class="btn btn-primary btn-block text-uppercase" onclick="document.getElementById('file-input').click()">Tải lên avatar</button>
                </div>
              </div>
            </div>
            <div class="tm-block-col tm-col-account-settings">
              <div class="tm-bg-primary-dark tm-block tm-block-settings">
                <h2 class="tm-block-title">Cài đặt tài khoản</h2>
                <div class=" row">
                  <div class="form-group col-lg-6">
                    <label for="name"> <i class="fas fa-user tm-nav-icon"></i> Họ tên</label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      value="<?= $taikhoan['tennguoidung_taikhoan'] ?>" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="email"><i class="fas fa-envelope tm-nav-icon"></i> Email tài khoản</label>
                    <input
                      id="email"
                      name="email"
                      type="email"
                      class="form-control validate"
                      value="<?= $taikhoan['email_taikhoan'] ?>" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="sdt"><i class="fas fa-phone tm-nav-icon"></i> Số điện thoại</label>
                    <input
                      id="sdt"
                      name="sdt"
                      type="tel"
                      class="form-control validate"
                      value="<?= $taikhoan['sdt_taikhoan'] ?>" />
                  </div>
                  <?php
                  if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'khachhang') {
                    echo '<div class="form-group col-lg-6">
              <label for="sdt"><i class="fas fa-map-marker-alt tm-nav-icon"></i>
              Địa chỉ</label>
              <input
                id="diachi"
                name="diachi"
                type="tel"
                class="form-control validate"
                value="' . htmlspecialchars($taikhoan['diachi_taikhoan']) . '"
              />
          </div>';
                  }
                  ?>

                  <div class="form-group col-lg-6">
                    <label for="pass"><i class="fas fa-lock tm-nav-icon"></i> Mật khẩu hiện tại</label>

                    <input
                      id="pass"
                      name="pass"
                      type="password"
                      class="form-control validate" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="newpass"><i class="fas fa-key tm-nav-icon"></i> Mật khẩu mới</label>
                    <input
                      id="newpass"
                      name="newpass"
                      type="password"
                      class="form-control validate" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="repass"> <i class="fas fa-check tm-nav-icon"></i> Nhập lại mật khẩu</label>
                    <input
                      id="repass"
                      name="repass"
                      type="password"
                      class="form-control validate" />
                  </div>
                  <div class="col-12">
                    <button
                      id="submitBtn"
                      name="capnhathoso"
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase">
                      Cập nhật hồ sơ
                    </button>
                  </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <?php require_once "footer.php"; ?>
  </div>

  <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>

  <script src="./view/viewadmin/js/bootstrap.min.js"></script>

</body>
<script>
  const sessionPassword = "<?= $taikhoan['matkhau_taikhoan'] ?>";


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
    border: 1px solid red;
    /* Thêm viền đỏ cho ô input khi có lỗi */
  }
</style>

</html>