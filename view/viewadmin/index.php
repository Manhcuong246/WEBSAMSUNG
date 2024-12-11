<?php




if (!isset($_SESSION['id'])) {

    header('Location: ?act=login');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

    <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css">

    <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css">

    <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
    <style>
        .blockmain {
            border-radius: 20px;

        }

        #logout {
            padding: 0;
            margin: 0;
            color: white;
            line-height: 0;
        }

        #searchInput {
            transition: all 0.5s ease;
            margin-bottom: 30px;
            border-radius: 20px;
        }

        #searchInput::placeholder {
            color: white;
        }

        .date-filter-container {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Khoảng cách giữa các nút chọn ngày */
            margin-bottom: 15px;
            /* Khoảng cách bên dưới bộ lọc */
        }

        .date-filter-container .form-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin: 0;
        }

        .date-filter-container label {
            font-size: 0.9rem;
         
            font-weight: bold;
            margin-bottom: 3px;
         
        }

        .date-filter-container input {
            width: 150px;
        
            height: 30px;
       
            font-size: 0.9rem;
           
            padding: 5px;
        }

        .tm-gray-circle img {
            object-fit: cover !important;
            width: 100% !important;
            height: 100% !important;
        }
      
.date-picker-container {
    transform: translate(0,-15px);
  flex: 1;
  max-width: 300px;
}

.custom-date {
  border: 1px solid #007bff; 
  border-radius: 8px; 
  padding: 8px;
  transition: all 0.2s ease-in-out; 
}

.custom-date:focus {
  border-color: #0056b3;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}



.d-flex.gap-3 {
  gap: 16px;
}

    </style>
    <style>
        .tm-product-table th,
        .tm-product-table td {
            text-align: center;
            vertical-align: middle;
        }

        .tm-product-table .trangthai {
            white-space: nowrap !important;        
             overflow: hidden;
            text-overflow: ellipsis;
         
        } 
    </style>


</head>

<body id="reportsPage">
    <div id="home">
        <?php require_once "header.php" ?>
        <div class="container main">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Chào mừng trở lại, <?php if (isset($_SESSION['vaitro'])) {
                                                                            switch ($_SESSION['vaitro']) {
                                                                                case 'admin':
                                                                                    echo '<b>Admin</b>';
                                                                                    break;
                                                                                case 'khachhang':
                                                                                    echo '<b>Quý khách</b>';
                                                                                    break;
                                                                                case 'nhanvien':
                                                                                    echo '<b>Cộng tác viên</b>';
                                                                                    break;
                                                                            }
                                                                        } ?></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block blockmain">
                        <h2 class="tm-block-title"><i class="fas fa-dollar-sign"></i> Doanh thu</h2>
                        <?php require_once "./view/viewadmin/bieudodoanhthu.php"; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 co l-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block blockmain">
                        <h2 class="tm-block-title"><i class="fas fa-chart-line"></i> Bán chạy</h2>

                        <?php require_once "./view/viewadmin/sanphambanchay.php"; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block blockmain">
                        <h2 class="tm-block-title"><i class="fas fa-tags"></i> Doanh thu sản phẩm</h2>

                        <?php require_once "./view/viewadmin/doanhthusanpham.php"; ?>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow blockmain">
                        <h2 class="tm-block-title"><i class="fas fa-bell"></i> Thông báo ( Coming soon )</h2>
                        <div class="tm-notification-items">
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="./image/2-31-14-14-02.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Mạnh Tuấn</b> vừa mới <a href="#"
                                            class="tm-notification-link">cập nhật sản phẩm</a>. Kiểm tra lại .</p>
                                    <span class="tm-small tm-text-color-secondary">6 giờ trước.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="./image/download.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Nguyễn Văn Hưng</b> vừa thêm vào <a href="#"
                                            class="tm-notification-link">sản phẩm mới</a>. Đọc thêm.</p>
                                    <span class="tm-small tm-text-color-secondary">6 giờ trước.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="./image/anh-co-gai-xinh-dep-44.jpg" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Phạm Mai hân</b> vừa đặt đơn hàng về <a href="#"
                                            class="tm-notification-link">Galaxy Fit 3</a> với tổng giá trị 50 triệu VND . Xem ngay.</p>
                                    <span class="tm-small tm-text-color-secondary">1 giờ trước.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Laura Cute</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product records</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Samantha</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">order stuffs</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Sophie</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Lily A</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Amara</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                            <div class="media tm-notification-item">
                                <div class="tm-gray-circle"><img src="" alt="Avatar Image" class="rounded-circle"></div>
                                <div class="media-body">
                                    <p class="mb-2"><b>Cinthela</b> and <b>6 others</b> sent you <a href="#"
                                            class="tm-notification-link">product updates</a>.</p>
                                    <span class="tm-small tm-text-color-secondary">6h ago.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row tm-content-row">

                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">

                            <div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;">
                                <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 30px;"><i class="fas fa-list"></i> Danh sách đơn hàng</h4>
                                <div style="margin-top: 10px;">
                                <input type="text" id="searchInput" class="form-control" placeholder="Tìm kiếm tên khách hàng ...">
                                <div class="d-flex gap-3 align-items-center">
  <div class="date-picker-container">
    <input type="date" id="startDate" class="form-control custom-date" placeholder="Ngày bắt đầu">
  </div>
  <div class="date-picker-container">
    <input type="date" id="endDate" class="form-control custom-date" placeholder="Ngày kết thúc">
  </div>
</div>



</div>
                                <div class="tm-product-table-container">
                                    <table class="table table-hover tm-table-medium tm-product-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="id_donhang">Mã đơn hàng</th>
                                                <th scope="col" class="tenkhachhang">Tên khách hàng</th>
                                                <th scope="col" class="trangthai">Trạng Thái</th>
                                                <th scope="col">Địa chỉ</th>
                                                <th scope="col">Ngày đặt hàng</th>
                                                <th scope="col">Tổng giá trị đơn hàng</th>
                                                <th scope="col">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $result = [];


                                        foreach ($donhang as $item) {

                                            if (!isset($result[$item['id_donhang']])) {

                                                $result[$item['id_donhang']] = [
                                                    "id_donhang" => $item['id_donhang'],
                                                    "id_taikhoan_donhang" => $item['id_taikhoan_donhang'],
                                                    "thoigian_donhang" => $item['thoigian_donhang'],
                                                    "trangthai_donhang" => $item['trangthai_donhang'],
                                                    "diachi_donhang" => $item['diachi_donhang'],
                                                    "diachi_donhang" => $item['diachi_donhang'],
                                                    "ten_taikhoan" => $item['tennguoidung_taikhoan'],
                                                    "anh_taikhoan" => $item['anh_taikhoan'],
                                                    "chitiet" => []
                                                ];
                                            }

                                            $result[$item['id_donhang']]['chitiet'][] = [
                                                "id_chitiet" => $item['id_chitiet'],
                                                "soluong_chitiet" => $item['soluong_chitiet'],
                                                "mausac_chitiet" => $item['mausac_chitiet'],
                                                "id_sanpham" => $item['id_sanpham'],
                                                "ten_sanpham" => $item['ten_sanpham'],
                                                "gia_sanpham" => $item['gia_sanpham'],

                                            ];
                                        }


                                        $donhang = array_values($result);

                                        ?>
                                        <tbody id="productTableBody">
                                            <?php foreach ($donhang as $row) {
                                                $tong = 0;
                                                foreach ($row['chitiet'] as $item) {
                                                    $tong += $item['gia_sanpham'] * $item['soluong_chitiet'];
                                                } ?>
                                                <tr class="product-row">
                                                    <td class="id_donhang">#<?= $row['id_donhang'] ?></td>
                                                    <td class="tennguoi"><a href="?act=thongtinkhachhang&id=<?= $row['id_taikhoan_donhang'] ?>" style="color:white;"><?= $row['ten_taikhoan'] ?></a></td>

                                                    <td class="trangthai">
                                                        <?php
                                                        if ($row['trangthai_donhang'] == 'danggiao') {
                                                            echo '<div class="tm-status-circle pending"></div> Đang giao';
                                                        } elseif ($row['trangthai_donhang'] == 'thanhcong') {
                                                            echo '<div class="tm-status-circle moving"></div> Thành công';
                                                        } elseif ($row['trangthai_donhang'] == 'thatbai') {
                                                            echo '<div class="tm-status-circle cancelled"></div> Thất bại';
                                                        } elseif ($row['trangthai_donhang'] == 'choxacnhan') {
                                                            echo '<div class="tm-status-circle choxacnhan"></div> Chờ xác nhận';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="trangthai"><?= $row['diachi_donhang'] ?></td>
                                                    <td><?= $row['thoigian_donhang'] ?></td>
                                                    <td><?= number_format($tong, 0, ',', '.') ?> VND</td>
                                                    <td><a onclick="return" href="?act=chitietdonhang&id=<?= $row['id_donhang'] ?>" class="tm-product-delete-link">
                                                            <i class="far fa-eye tm-product-view-icon" style="color: white;"></i>
                                                        </a></td>
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
        </div>
        <?php require_once "footer.php"; ?>
    </div>

</body>
<script>
    document.getElementById("searchInput").addEventListener("input", filterOrders);
    document.getElementById("startDate").addEventListener("input", filterOrders);
    document.getElementById("endDate").addEventListener("input", filterOrders);
    function filterOrders() {
    var nameInput = document.getElementById("searchInput").value.toLowerCase();
    var startDateInput = document.getElementById("startDate").value;
    var endDateInput = document.getElementById("endDate").value;

   
    console.log("Start Date Input:", startDateInput);
    console.log("End Date Input:", endDateInput);

    var rows = document.querySelectorAll("#productTableBody .product-row");

    rows.forEach(function(row) {
        var productName = row.querySelector(".tennguoi").textContent.toLowerCase();
        var orderDate = row.cells[4].textContent.split(' ')[0]; 
        var orderDateObj = new Date(orderDate);
        var isNameMatch = productName.includes(nameInput);
        var isDateMatch = true;

        if (startDateInput) {
            var startDateObj = new Date(startDateInput);
            isDateMatch = orderDateObj >= startDateObj;
        }

        if (endDateInput) {
            var endDateObj = new Date(endDateInput);
            isDateMatch = isDateMatch && orderDateObj <= endDateObj;
        }

        if (isNameMatch && isDateMatch) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

</script>

</html>