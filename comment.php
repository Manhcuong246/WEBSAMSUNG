
  <style>
  .card{
      border: none;

  }
      .card-body {
        transition: all 0.3s ease-in-out;
      }

      .card-body:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 5px rgba(0, 0, 0, 0.1);
      }

      .btn-link:hover {
        text-decoration: underline;
      }

      .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #ddd;
      }

      .form-control {
          transition: all 0.3s ease;
        background-color: #f9f9f9;
      }

      .form-label {
        color: #555;
      }

      
      .d-flex a:hover {
        color: #007bff;
        transition: all 0.3s ease;
      }

      
      .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }
      .small a{
          text-decoration: none;
      }
      .small a:hover{
          text-decoration: underline;
      }
      .avatar{
        margin-right: 10px;
        width: 60px;
        height: 60px;
        overflow: hidden;
        border-radius: 100px;

      }
      .avatar img{
      object-fit: cover;
      width: 100%;
      height: 100%;  
      }
    </style>
  </head>
  <body>

    <section style="width: 100%">

      <div class="container my-5 py-5">
          
        <div class="row d-flex justify-content-center">
              <h1 style="text-align: left;">Bình luận (<?= count($binhluan) ?>)</h1> 
          <div class="col-12">
            <div class="card">
              <?php foreach ($binhluan as $key => $row) {  ?>
            <div class="card-body">
                  <div class="d-flex flex-start align-items-center">
                    <div class="avatar">
                             <img class="rounded-circle shadow-1-strong me-3" src="./image/<?= $row['anh_taikhoan'] ?>" alt="avatar" />
                       </div>
                      <div>
                      <h6 class="fw-bold text-primary mb-1"><?= $row['tennguoidung_taikhoan'] ?></h6>
                      <p class="text-muted small mb-0"><?php
$timestamp = strtotime($row['thoigian_binhluan']);
$formatted_time = date("H:i d/m/Y", $timestamp);
echo $formatted_time;
?>
</p>
                    </div>
                  </div>

                  <p class="mt-3 mb-4 pb-2">
                  <?= $row['binhluan_binhluan'] ?>
                  </p>

                  <div class="small d-flex justify-content-start">
                    <a href="#!" class="d-flex align-items-center me-3">
                    
                      <p class="mb-0"> <i class="far fa-thumbs-up me-2"></i>Thích</p>
                    </a>
                    <a href="#!" class="d-flex align-items-center me-3">
                  
                      <p class="mb-0">    <i class="far fa-comment-dots me-2"></i>Phản hồi</p>
                    </a>
                    <a href="#!" class="d-flex align-items-center me-3">
                    
                      <p class="mb-0"> <i class="fas fa-share me-2"></i>Chia sẻ</p>
                    </a>
                    <?php
// Kiểm tra vai trò người dùng
if ($_SESSION['vaitro'] == 'khachhang') {
    // Kiểm tra nếu ID của người dùng khớp với ID trong $row
    if ($_SESSION['id'] == $row['id_taikhoan']) {
        echo '<a href="?act=xoabinhluan&id=' . $row['id_binhluan'] . '&idsp=' . $row['id_sanpham_binhluan'] . '" class="d-flex align-items-center me-3">
                <p class="mb-0"><i class="fas fa-trash me-2"></i>Xóa bình luận</p>
              </a>';
    }
} 
if ($_SESSION['vaitro'] === 'admin' || $_SESSION['vaitro'] === 'nhanvien') {
    // Nếu vai trò là admin hoặc nhân viên
    echo '<a href="?act=xoabinhluan&id=' . $row['id_binhluan'] . '&idsp=' . $row['id_sanpham_binhluan'] . '" class="d-flex align-items-center me-3">
            <p class="mb-0"><i class="fas fa-trash me-2"></i>Xóa bình luận</p>
          </a>';
} 
?>

                  </div>
              
                </div><?php } ?>
                <div id="commentsContainer"></div>
<div class="card-footer py-3 border-0">
  <div class="d-flex flex-start w-100">
    <div class="avatar" style="width:40px;height:40px;">
      <img class="rounded-circle shadow-1-strong me-3" src="./image/<?= $_SESSION['anh'] ?>" alt="avatar" />
    </div>

    <div class="form-outline w-100">
    <form method="post" id="commentForm" onsubmit="return submitForm(event)">
    <textarea name="binhluan" id="commentText" class="form-control" rows="4" 
        placeholder="Message" style="background: #fff;" 
        onkeydown="checkEnter(event)"></textarea>
</form>
    </div>
  </div>
</div>

                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  </body>
  </html>
  <script>
        // Lưu vị trí cuộn trước khi tải lại
        window.addEventListener('beforeunload', function () {
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        // Khôi phục vị trí cuộn sau khi trang tải xong
        window.addEventListener('load', function () {
            const scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition));
            }
        });
    </script> 
    
<script>
function checkEnter(event) {
    if (event.key === "Enter" && !event.shiftKey) {
        event.preventDefault(); // Ngăn xuống dòng
        document.getElementById("commentForm").submit(); // Gửi form
    }
}

function submitForm(event) {
    return true; // PHP xử lý tại đây
}
</script>
