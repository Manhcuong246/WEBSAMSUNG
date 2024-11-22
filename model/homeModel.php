<?php
class homeModel
{

    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }
    function top16Product()
    {
        $sql = " SELECT sanpham.*, mausacsanpham.*
FROM sanpham
LEFT JOIN mausacsanpham ON sanpham.id_sanpham = mausacsanpham.id_sanpham
ORDER BY RAND() ";
        return $this->conn->query($sql);
    }
              function findId($id) {
              $sql = "SELECT * 
                FROM sanpham 
                INNER JOIN mausacsanpham 
                ON sanpham.id_sanpham = mausacsanpham.id_sanpham 
                WHERE sanpham.id_sanpham = $id";
               return $this->conn->query($sql)->fetchAll();
    }
    function login($user, $pass) {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan_taikhoan='$user' AND matkhau_taikhoan='$pass'";
        return $this->conn->query($sql)->fetch();
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
}
