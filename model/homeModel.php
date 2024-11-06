<?php
class homeModel {

    public $conn;

    function __construct() {
        $this->conn = connectDB();
    }
    function top16Product() {   
        $sql = " SELECT sanpham.*, mausacsanpham.*
FROM sanpham
LEFT JOIN mausacsanpham ON sanpham.id_sanpham = mausacsanpham.id_sanpham
ORDER BY RAND() "

;
        return $this->conn->query($sql);
    }
    

}