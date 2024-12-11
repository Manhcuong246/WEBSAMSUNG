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
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />

  <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
  <style>
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

    #xoataikhoan {
      color: white;

    }

    #xoataikhoan:hover {
      transition: all 0.1 ease;
      transform: scale(1.02);
      box-shadow: 0px 0px 5px black;
    }

    .tm-bg-primary-dark {
      border-radius: 15px;
    }

    .tm-avatar-container img {
      object-fit: cover;
    }

    input[readonly] {
      background-color: inherit !important;
      color: white !important;
      border: 1px solid #ccc !important;
      cursor: text;
    }

    .blockmain {
      border-radius: 20px;
    }

    .btn {
      transition: all 0.5s ease;
      border-radius: 15px;
    }

    .tm-product-table-container {
      max-height: 55vh;

    }

    .fa-pencil-alt {

      font-size: 19px;
      color: white;
    }

    .tm-product-delete-link:hover .fa-pencil-alt {
      color: #648198;
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

    #searchInput {
      transition: all 0.5s ease;
      margin-bottom: 30px;
      border-radius: 20px;
    }

    #searchInput::placeholder {
      color: white;
    }
  </style>
</head>

<body id="reportsPage">
  <div class="" id="home">
    <?php require_once "header.php" ?>
    <div class="container mt-5">
      <div class="row tm-content-row">

        <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto" style="margin-bottom:30px">

        <div class="rank">
    <img src="./image/<?= $rank['anh_rank'] ?> " alt="">
    <p><em><?= $rank['ten_rank'] ?></em></p>
  </div>'
    <h2 class="tm-block-title" style="font-size: 35px; margin-bottom: 35px;">Số tiền đã tiêu</h2>
    <div class="container text-white" style="height: 80px;">
      <div style="font-size: 30px; font-weight: 900;">
        <i class="fas fa-coins"></i> <?= number_format($sotiendatieu[0]['tong'], 0, ',', '.') ?> VND
      </div>
    </div>

</div>

          <div class="row tm-content-row">
            <div class="tm-block-col tm-col-avatar">
              <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                <h2 class="tm-block-title"></h2>
                <div class="tm-avatar-container" style="height: 240px">
                  <img
                    src="./image/<?= $thongtinkhachhang['anh_taikhoan'] ?>"
                    alt="Avatar"
                    id="img"
                    name="img"
                    class="tm-avatar img-fluid mb-4"
                    style="width:130%;height:130%;transform:translate(0px,-30px)" />
                </div>
                <div class="custom-file-upload" style="margin-top:30px;">
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
                      readonly
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      value="<?= $thongtinkhachhang['tennguoidung_taikhoan'] ?>" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="email"><i class="fas fa-envelope tm-nav-icon"></i> Email tài khoản</label>
                    <input
                      readonly
                      id="email"
                      name="email"
                      type="email"
                      class="form-control validate"
                      value="<?= $thongtinkhachhang['email_taikhoan'] ?>" />
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="sdt"><i class="fas fa-phone tm-nav-icon"></i> Số điện thoại</label>
                    <input
                      readonly
                      id="sdt"
                      name="sdt"
                      type="tel"
                      class="form-control validate"
                      <?php if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'nhanvien') {
                        echo 'style="width:620px"';
                      } ?>
                      value="<?= $thongtinkhachhang['sdt_taikhoan'] ?>" />
                  </div>

                  <?php


                  if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'admin') {
                    echo '<div class="form-group col-lg-6">
              <label for="pass"><i class="fas fa-lock tm-nav-icon"></i> Mật khẩu hiện tại</label>
              <input
                readonly
                id="pass"
                name="pass"
                type="text"
                class="form-control validate"
                value="' . htmlspecialchars($thongtinkhachhang['matkhau_taikhoan']) . '"
              />
          </div>';
                  }
                  ?>


                </div><?php

                      if (isset($_SESSION['vaitro']) && $_SESSION['vaitro'] == 'admin') {
                        echo '<a
              id="xoataikhoan"
              name="capnhathoso"
              type="submit"
              class="btn btn-primary btn-block text-uppercase"
              style="background-color: red; border-color: red;"
          >
              Xóa tài khoản
          </a>';
                      } // Không làm gì nếu không phải admin

                      ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">

        <div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;">
          <h2 style="color:white;text-align:center;font-weight:900">ĐƠN HÀNG ĐÃ MUA</h2>
          <?php
          $result = [];


          foreach ($damua as $item) {

            if (!isset($result[$item['id_donhang']])) {

              $result[$item['id_donhang']] = [
                "id_donhang" => $item['id_donhang'],
                "id_taikhoan_donhang" => $item['id_taikhoan_donhang'],
                "thoigian_donhang" => $item['thoigian_donhang'],
                "trangthai_donhang" => $item['trangthai_donhang'],
                "diachi_donhang" => $item['diachi_donhang'],
                "chitiet" => []
              ];
            }


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
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-medium tm-product-table">
              <thead>
                <tr>
                  <th scope="col">Mã đơn hàng</th>
                  <th scope="col">Ngày đặt hàng</th>
                  <th scope="col">Tổng tiền</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">&nbsp;</th>

                </tr>
              </thead>
              <tbody id="productTableBody">
                <?php foreach ($donhang as $row) {
                  $tong = 0;
                  foreach ($row['chitiet'] as $item) {
                    $tong += $item['gia_sanpham'] * $item['soluong_chitiet'];
                  }
                ?>
                  <tr class="product-row">
                    <td class="tm-product-name">#<?= $row['id_donhang'] ?></td>




                    <td>
                      <?= $row['thoigian_donhang'] ?>

                    </td>
                    <td>

                      <?= number_format($tong, 0, ',', '.');  ?> VND

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
                    <td><?= $row['diachi_donhang'] ?></td>
                    <td>
                      <a onclick="return" href="?act=chitietdonhang&id=<?= $row['id_donhang'] ?>" class="tm-product-delete-link">
                        <i class="far fa-eye tm-product-view-icon" style="color: white;"></i>

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
  </div>
  <?php require_once "footer.php"; ?>
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
    border: 1px solid red;
  }
</style>

</html>