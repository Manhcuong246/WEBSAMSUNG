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
              <h1 style="text-align: left;">Bình luận (2)</h1> 
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-start align-items-center">
                    <div class="avatar">
                             <img class="rounded-circle shadow-1-strong me-3" src="./image/239462814_2349880831812471_7302002402268342362_n.jpg" alt="avatar" />
                       </div>
                      <div>
                      <h6 class="fw-bold text-primary mb-1">Phùng Thanh Độ</h6>
                      <p class="text-muted small mb-0">Shared publicly - Jan 2020</p>
                    </div>
                  </div>

                  <p class="mt-3 mb-4 pb-2">
                 Đồng hồ đẹp quá ! Có quá đáng lắm không nếu em tặng anh
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
                  </div>
            
                </div>
              <div id="commentsContainer"></div>
              <div class="card-footer py-3 border-0">
                <div class="d-flex flex-start w-100">
                <div class="avatar" style="width:40px;height:40px;">
                             <img class="rounded-circle shadow-1-strong me-3" src="./image/thiet-ke-galaxy-fit-3.jpg" alt="avatar" />
                       </div>
                  <div class="form-outline w-100">
                    <textarea id="commentText" class="form-control" id="textAreaExample" rows="4" placeholder="Message" style="background: #fff;"></textarea>
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
  </html><script>
  document.getElementById("commentText").addEventListener("keypress", function (event) {
    if (event.key === "Enter" && !event.shiftKey) {
      event.preventDefault();
      const commentText = document.getElementById("commentText").value;
      if (commentText.trim() === "") {
        alert("Vui lòng nhập bình luận.");
        return;
      }
      const commentDiv = document.createElement("div");
      commentDiv.classList.add("card-body");
      commentDiv.innerHTML = `
        <div class="d-flex flex-start align-items-center">
          <div class="avatar">
                             <img class="rounded-circle shadow-1-strong me-3" src="./image/thiet-ke-galaxy-fit-3.jpg" alt="avatar" />
                       </div>
          <div>
            <h6 class="fw-bold text-primary mb-1">Cường</h6>
            <p class="text-muted small mb-0">Vừa xong</p>
          </div>
        </div>
        <p class="mt-3 mb-4 pb-2">${commentText}</p>
        <div class="small d-flex justify-content-start">
          <a href="#!" class="d-flex align-items-center me-3">
            <p class="mb-0">Chỉnh sửa</p>
          </a>
          <a href="#!" class="d-flex align-items-center me-3">
            <p class="mb-0">Xóa</p>
          </a>
          
        </div>
      `;
      document.getElementById("commentsContainer").appendChild(commentDiv);
      document.getElementById("commentText").value = "";
    }
  });
</script>