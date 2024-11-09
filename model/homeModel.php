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
        return $this->conn->query($sql)->fetch();
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
