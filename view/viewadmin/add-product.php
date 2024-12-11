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
  <meta name="viewport" content="width=device-width, initial-scale = 1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sửa sản phẩm</title>
  <link 
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />

  <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />

  <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">

</head>
<style>
  input {
    transition: all 0.5s ease !important;
    border-radius: 15px !important;
  }

  button {
    transition: all 0.5s ease !important;
    border-radius: 15px !important;
  }

  .carousel-item {
    padding-left: 4.1rem;
    height: 180px;
    overflow: hidden;
  }

  .carousel-item img {
    object-fit: cover !important;
    width: 80% !important;
    height: 100% !important;
  }

  .motathem i {
    transform: translate(0, -10px);


  }

  .motathem:hover {
    color: yellow;

  }

  .motathem {
    font-size: 13px;
    color: white;
  }
</style>

<body>
  <?php require_once "header.php" ?>
  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block"><i class="fas fa-cog tm-nav-icon"></i>
                Thêm mới sản phẩm</h2>
            </div>
          </div>
          <form method="get" enctype="multipart/form-data">
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">

                <div class="form-group mb-3">
                  <label
                    for="name"><i class="fas fa-tag"></i> Tên sản phẩm
                  </label>
                  <input
                    id="name"
                    name="name"
                    type="text"

                    class="form-control validate" />
                </div>
                <div class="form-group mb-3">
                  <label
                    for="description"><i class="fas fa-info-circle"></i> Mô tả</label>
                  <textarea
                    class="form-control validate tm-small"
                    rows="5"
                    name="mota"
                    required></textarea>
                </div>
                <div class="form-group mb-3">
                  <label for="danhmuc"><i class="fas fa-list"></i> Danh mục</label>
                  <select class="custom-select tm-select-accounts" id="danhmuc" name="danhmuc">
                    <?php
                    foreach ($danhmuc as $key => $rows) {
                    ?>
                      <option value="<?= $rows['id_danhmuc'] ?>"><?= $rows['ten_danhmuc'] ?></option>
                    <?php } ?>
                  </select>

                </div>
                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="gia"><i class="fas fa-dollar-sign"></i> Giá
                    </label>
                    <input
                      id="gia"
                      name="gia"
                      type="text"

                      class="form-control validate"
                      data-large-mode="true" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="giagoc"><i class="fas fa-money-bill-alt"></i> Giá gốc
                    </label>
                    <input
                      id="giagoc"
                      name="giagoc"
                      type="text"

                      class="form-control validate" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="tieude"><i class="fas fa-stream"></i> Tiêu đề phân loại
                    </label>
                    <input
                      id="tieude"
                      name="tieude"
                      type="text"

                      class="form-control validate"
                      data-large-mode="true" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="luachon"><i class="fas fa-sliders-h"></i> Các lựa chọn
                    </label>
                    <input
                      id="luachon"
                      name="luachon"
                      type="text"

                      class="form-control validate" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="tieude"><i class="fas fa-tag"></i> Tên màu
                    </label>
                    <input
                      id="tieude"
                      name="tieude"
                      type="text"

                      class="form-control validate"
                      data-large-mode="true" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="luachon"><i class="fas fa-hashtag"></i>
                      Mã hex của màu
                    </label>
                    <input
                      id="luachon"
                      name="luachon"
                      type="text"

                      class="form-control validate" />
                  </div>
                </div>

              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class=" mx-auto">
                  <p style="color:white"><i class="fas fa-image"></i> Ảnh thumbnail sản phẩm</p>

                  <div>

                    <img
                      name="img"
                      src="./image/wired-outline-120-folder-hover-adding-files.gif"
                      alt="Product image"
                      class="img-fluid d-block mx-auto"
                      onclick="document.getElementById('fileInput').click();"
                      style="cursor: pointer;width:100px;">

                    <input
                      id="fileInput"
                      name="img"
                      type="file"
                      style="display:none;"
                      onchange="uploadImage(this)" />
                  </div>
                  <div class="form-group ">

                    <label
                      for="anhslideshow"><i class="fas fa-plus-circle"></i> Thêm ảnh vào slideshow
                    </label>
                    <button style="margin-bottom:5px;" id="uploadButton" type="button" class="btn btn-primary btn-block text-uppercase">Thêm ảnh slideshow</button>
                    <input id="uploadInput" type="file" name="anhslideshow[]" multiple style="display: none;">
                  </div>

                  <div class="form-group ">
                    <label
                      for="soluongtrongkho"><i class="fas fa-warehouse"></i> Số lượng sản phẩm còn lại trong kho
                    </label>
                    <input
                      id="soluongtrongkho"
                      name="soluongtrongkho"
                      type="text"

                      class="form-control validate" />
                  </div>


                  <div class="form-group ">
                    <label
                      for="banduoc"><i class="fas fa-chart-line"></i> Sản phẩm đã bán được
                    </label>
                    <input
                      id="banduoc"  
                      name="banduoc"
                      type="text"

                      class="form-control validate" />
                  </div>
                  <div class="form-group "> <label for="uudai"><i class="fas fa-tags"></i> Ưu đãi áp dụng <a class="motathem" href="?act=giaithichuudai"><i class="fas fa-question-circle"></i></a> </label> <input id="uudai" name="uudai" type="text" class="form-control validate" /> </div>
                </div>
                <p style="color:white"><i class="fas fa-image"></i> Ảnh tương ứng với màu sắc</p>

<div>

  <img
     name="imgmausac"
    src="./image/wired-outline-120-folder-hover-adding-files.gif"
    alt="Product image"
    class="img-fluid d-block mx-auto"
    onclick="document.getElementById('fileInput2').click();"
    style="cursor: pointer;width:100px;">

  <input
    id="fileInput2"
    name="imgmausac"
    type="file"
    style="display:none;"
    onchange="uploadImage(this)" />
</div>

              </div>



              <div class="col-12">

                <button name="themmoisanpham" type="submit" class="btn btn-primary btn-block text-uppercase">Thêm mới</button>

          </form>
        </div>

      </div>

    </div>

  </div>

  </div>

  </div>

  <?php require_once"footer.php"; ?>

  <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>

  <script src="./view/viewadmin/jquery-ui-datepicker/jquery-ui.min.js"></script>

  <script src="./view/viewadmin/js/bootstrap.min.js"></script>


</body>
<script>
  const imageContainer = document.getElementById('image-container');
  const fileInput = document.getElementById('file-input');
  const imagePreview = document.getElementById('image-preview');


  imageContainer.addEventListener('click', () => {
    fileInput.click();
  });


  fileInput.addEventListener('change', (event) => {
    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const reader = new FileReader();

      reader.onload = function(e) {
        const imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imagePreview.appendChild(imgElement);
      };

      reader.readAsDataURL(file);
    }
  });
</script>
<script>
  // Lắng nghe sự kiện khi nhấn vào nút
  document.getElementById('uploadButton').addEventListener('click', function() {
    document.getElementById('uploadInput').click(); // Kích hoạt input
  });

  // Lắng nghe sự kiện khi chọn file
  document.getElementById('uploadInput').addEventListener('change', function(event) {
    const files = event.target.files;
    console.log('Các file đã chọn:', files); // Xử lý file ở đây
  });
</script>

</html>