<style>    .img-container {
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
  #searchInput{
    transition: all 0.5s ease;
    margin-bottom: 30px;
    border-radius: 20px;
  }
  #searchInput::placeholder{
   color:white;
  }

  .card {
   
    margin-top: 10px;
    margin-bottom: 20px;
      position: relative;
      background: #fff;
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      background-color: #567187;
      padding: 20px;
      text-align: center;
    }

    .card-body h5 {
      font-size: 1.5rem;
      color: white;
      font-weight: bold;
    }

    .card-body p {
      color: white !important;
      margin: 10px 0;
    }

    /* Shine effect */
    .shine-effect {
      position: absolute;
      top: -150%;
      left: -150%;
      width: 300%;
      height: 300%;
      background: rgba(255, 255, 255, 0.5);
      transform: rotate(45deg);
      transition: opacity 0.3s ease-out;
      opacity: 0;
      pointer-events: none;
    }

    .card:hover .shine-effect {
      opacity: 1;
      animation: shine 1s ease-in-out;
    }
</style>
<div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;" >
          <h3 style="color:white;font-weight:900;text-align:center">  NHÂN VIÊN  </h3>
      <input  type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm theo tên ...">
 
            <div class="tm-product-table-container" >
            <div class="container">
    <div class="row g-4">
   <?php foreach ($nhanvien as $key => $row) { ?>
      <div class="col-md-4">
      <a href="?act=thongtinnhanvien&id=<?= $row['id_taikhoan']?>">
        <div class="card">
          <div class="shine-effect"></div>
          <img src="./image/<?= $row['anh_taikhoan']?>" alt="User 1">
          <div class="card-body">
            <h5 class="tm-product-name"><?= $row['tennguoidung_taikhoan']?></h5>
            <p><?= $row['email_taikhoan']?></p>
          </div>
          </a>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
            </div>
          
            
          </div>
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