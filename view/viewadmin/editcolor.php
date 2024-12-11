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

  .motathem i{
    transform: translate(0,-10px);
  
     
  }
  .motathem:hover{
    color:yellow;
     
  }
  .motathem{
    font-size: 13px;
    color:white;
  }
  .popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 30px;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
}

.popup.show {
  opacity: 1;
  visibility: visible;
  transform: translate(-50%, -50%) scale(1);
}

.popup-content {
  text-align: center;
}

.close-btn {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9998;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s, visibility 0.3s;
}

.overlay.show {
  opacity: 1;
  visibility: visible;
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
                Sửa màu sắc</h2>
            </div>
          </div>
          <form  method="post" enctype="multipart/form-data">
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
      
                <div class="form-group mb-3">
                  <label
                    for="name"><i class="fas fa-tag"></i> Tên màu
                  </label>
                  <input
                    id="name"
                    name="name"
                    type="text"
                    value="<?= $editcolor['mausac_sanphamtext'] ?>"
                    class="form-control validate" />
                </div>
               
         

            </div>
            <div class="form-group mb-3 col-xs-12 col-sm-6">
              <label
                for="hex"><i class="fas fa-hashtag"></i>
                Mã hex của màu </a>


              </label>
              <input
                id="hex"
                name="hex"
                type="text"
                value="<?= $editcolor['mausac_sanphamhex'] ?>"
                class="form-control validate" />
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class=" mx-auto">
                <p style="color:white"><i class="fas fa-image"></i> Ảnh màu tương ứng</p>
                <div>

                  <img
                    src="./image/<?= $editcolor['anh_sanpham'] ?>"
                    alt="Product image"
                    class="img-fluid d-block mx-auto"
                    onclick="document.getElementById('fileInput').click();"
                    style="cursor: pointer;">

                  <input
                    id="fileInput"
                    name="img"
                    type="file"
                    style="display:none;"
                    onchange="uploadImage(this)" />
                </div>
              </div>
            

            </div>
           
            <div class="form-group mb-3 col-xs-12 col-sm-6">
        
            
            </div>
                                         

            <div class="col-12">

              <button name="capnhatmausac" type="submit" class="btn btn-primary btn-block text-uppercase">Sửa</button>
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
 // Kiểm tra tham số trong URL
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('thanhcong') === 'true') {
  // Hiển thị popup thông báo thành công
  showSuccessPopup();
}

function showSuccessPopup() {

  const popup = document.createElement('div');
  popup.classList.add('popup');


  const overlay = document.createElement('div');
  overlay.classList.add('overlay');

  const popupContent = document.createElement('div');
  popupContent.classList.add('popup-content');
  popupContent.innerHTML = `
    <h3>Thành công!</h3>
    <p>Thao tác của bạn đã được thực hiện thành công.</p>
  `;


  popup.appendChild(popupContent);
  document.body.appendChild(overlay);
  document.body.appendChild(popup);


  overlay.addEventListener('click', () => {
    popup.remove();
    overlay.remove();
  });

 
  popup.classList.add('show');
  overlay.classList.add('show');
}
</script>
<script>
       
        window.addEventListener('beforeunload', function () {
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

       
        window.addEventListener('load', function () {
            const scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition));
            }
        });
    </script> 
    
</html>