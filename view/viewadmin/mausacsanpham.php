<style>
    .blockmain{
        padding: 0;
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
   .tm-block{
    min-height: auto !important;
   }
  </style>
<div class="container mt-5">
  <div class="row tm-content-row">
    
    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                
<h5 style="color:white;"> <i class="fas fa-palette"></i>
 Bảng màu</h5>
      <div class="tm-bg-primary-dark tm-block  blockmain" style="width:155%;  ">

        <div class="tm-product-table-container">
          <table class="table table-hover tm-table-medium tm-product-table">
            <thead>
              <tr>
                <th scope="col">Ảnh minh họa</th>
                <th scope="col">Mã màu</th>
                <th scope="col">Tên màu</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody id="productTableBody">
              <?php foreach ($mausac as $row) { ?>
              <tr class="product-row">
                <td>
                  <div class="rounded-circle img-container d-flex justify-content-center align-items-center">
                    <img src="./image/<?= $row['anh_sanpham'] ?>" alt="Centered Image" class="img-fluid">
                  </div>
                </td>
                <td><?= $row['mausac_sanphamhex'] ?></td>
                <td><?= $row['mausac_sanphamtext'] ?></td>
                <td>
                  <a href="?act=suamausp&id=<?= $row['id_mausacsanpham'] ?>" class="tm-product-delete-link">
                    <i class="fas fa-pencil-alt tm-product-edit-icon"></i>
                  </a>
                </td>
                <td>
                  <a onclick="return confirm('Bạn có muốn xóa không?')" href="?act=xoamausp&id=<?= $row['id_mausacsanpham'] ?>&idsp=<?= $row['id_sanpham'] ?>" class="tm-product-delete-link">
                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          
        </div>
        <a href="?act=themmau&id=<?= $row['id_sanpham']?>"><button class="btn btn-primary btn-block text-uppercase">Thêm màu</button></a>
      </div>
    </div>
  </div>
</div>
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