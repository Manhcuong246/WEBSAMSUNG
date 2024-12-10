<?php
class homeModel
{

    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }
    function signup($user, $pass, $name, $vaitro, $email, $sdt,$img,$diachi) {
        $sql = "INSERT INTO taikhoan VALUES (null, '$user', '$pass', '$name', '$vaitro', '$email', '$sdt', '$img','$diachi')";
        return $this->conn->prepare($sql)->execute();
    }
    function top16Product()
    {
        $sql = " SELECT sanpham.*, mausacsanpham.*
FROM sanpham
LEFT JOIN mausacsanpham ON sanpham.id_sanpham = mausacsanpham.id_sanpham
ORDER BY RAND() ";
        return $this->conn->query($sql);
    }
    function findId($id)
    {
        $sql = "SELECT * 
                FROM sanpham 
                INNER JOIN mausacsanpham 
                ON sanpham.id_sanpham = mausacsanpham.id_sanpham 
                WHERE sanpham.id_sanpham = $id";
        return $this->conn->query($sql)->fetchAll();
    }
    function login($user, $pass)
    {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan_taikhoan='$user' AND matkhau_taikhoan='$pass'";
        return $this->conn->query($sql)->fetch();
    }
    function themgiohang($idtk, $color, $luachon, $idsp, $number) {
        // Kiểm tra số lượng sản phẩm trong giỏ hàng
        $sql_check = "SELECT COUNT(*) FROM giohang WHERE id_taikhoan_giohang = ? AND id_sanpham_giohang = ?";
        $stmt_check = $this->conn->prepare($sql_check);
        $stmt_check->execute([$idtk, $idsp]);
        $count_exist = $stmt_check->fetchColumn();
    
        // Nếu sản phẩm đã có trong giỏ hàng, cập nhật số lượng
        if ($count_exist > 0) {
            $sql_update = "UPDATE giohang 
                           SET soluong_giohang = soluong_giohang + ? 
                           WHERE id_taikhoan_giohang = ? AND id_sanpham_giohang = ?";
            $stmt_update = $this->conn->prepare($sql_update);
            return $stmt_update->execute([$number, $idtk, $idsp]);
        } else {
            // Nếu chưa có sản phẩm trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
            $sql_insert = "INSERT INTO giohang (id_taikhoan_giohang, mausac_giohang, loai_giohang, id_sanpham_giohang, soluong_giohang)
                           VALUES (?, ?, ?, ?, ?)";
            $stmt_insert = $this->conn->prepare($sql_insert);
            return $stmt_insert->execute([$idtk, $color, $luachon, $idsp, $number]);
        }
    }
    
    function goiysanpham($id)
    {
        $sql = " SELECT *
FROM sanpham
WHERE id_danhmuc = (SELECT id_danhmuc FROM sanpham WHERE id_sanpham = $id)
  AND id_sanpham != $id ORDER BY RAND() LIMIT 2 ;

 ";
        return $this->conn->query($sql);
    }
    function alltaikhoan()
    {
        $sql = "SELECT taikhoan_taikhoan 
FROM taikhoan;
 ";
        return $this->conn->query($sql)->fetchAll();
    }
    function danhmuc()
    {
        $sql = " SELECT 
    danhmuc.id_danhmuc,
    danhmuc.ten_danhmuc,
    sanpham.id_sanpham,
    sanpham.ten_sanpham
    FROM 
        danhmuc
LEFT JOIN 
    sanpham ON danhmuc.id_danhmuc = sanpham.id_danhmuc
ORDER BY 
    danhmuc.id_danhmuc;

;
 ";
        return $this->conn->query($sql);
    }
    function binhluan($id)
    {
        $sql = " SELECT binhluan.*, taikhoan.*
FROM binhluan
INNER JOIN taikhoan ON binhluan.id_taikhoan_binhluan = taikhoan.id_taikhoan
WHERE binhluan.id_sanpham_binhluan = $id;
 ";
        return $this->conn->query($sql)->fetchAll();
    }
    function thembinhluan($idtk,$idsp,$binhluan)
    {
        $sql = " INSERT INTO binhluan (id_binhluan,id_taikhoan_binhluan, id_sanpham_binhluan, binhluan_binhluan) 
VALUES (null,'$idtk', '$idsp', '$binhluan');

 ";
        return $this->conn->query($sql);
    }
}
