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
    <title>Product Page - Admin HTML Template</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,700" />

    <link rel="stylesheet" href="./view/viewadmin/css/fontawesome.min.css" />

    <link rel="stylesheet" href="./view/viewadmin/css/bootstrap.min.css" />

    <link rel="stylesheet" href="./view/viewadmin/css/templatemostyle.css">
    <style>
        .blockmain {
            border-radius: 20px;
        }

        .btn {
            transition: all 0.5s ease;
            border-radius: 15px;
        }

        .tm-product-table-container {
            max-height: 65vh;

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
    </style>
</head>

<body id="reportsPage">
    <?php require_once "header.php" ?>
    <div class="container mt-5">
        <div class="row tm-content-row">

            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">

                <div class="tm-bg-primary-dark tm-block tm-block-products blockmain" style="width:150%;">
                    <h2 style="color:white;text-align:center;font-weight:900">CHI TIẾT ĐƠN HÀNG MÃ # <?= $chitietdonhang[0]['id_donhang_chitiet'] ?></h2>

                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-medium tm-product-table">
                            <thead>
                                <tr>

                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Màu sắc</th>
                                    <th scope="col">Loại</th>
                                    <th scope="col">Đơn giá</th>

                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                  


                                </tr>
                            </thead>
                            <tbody id="productTableBody">
                                <?php foreach ($chitietdonhang as $row) {  ?>
                                    <tr class="product-row">
                                        <td>
                                            <div class="rounded-circle img-container d-flex justify-content-center align-items-center">
                                                <img src="./image/<?= $row['anhgoiy_sanpham'] ?>" alt="Centered Image" class="img-fluid">
                                            </div>
                                        </td>




                                        <td>
                                            <?= $row['ten_sanpham'] ?>

                                        </td>
                                        <td> <?= $row['mausac_chitiet'] ?> </td>
                                        <td><?= $row['loai_chitiet'] ?></td>
                                        <td>
                                            <?= number_format($row['gia_sanpham'], 0, ',', '.');  ?> VND

                                        </td>

                                        <td>
                                            <?= $row['soluong_chitiet'] ?>

                                        </td>
                                        <td>
                                            <?= number_format($row['gia_sanpham'] * $row['soluong_chitiet'], 0, ',', '.');  ?> VND

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
    <?php require_once "footer.php"; ?>

    <script src="./view/viewadmin/js/jquery-3.3.1.min.js"></script>

    <script src="./view/viewadmin/js/bootstrap.min.js"></script>


</body>

</html>