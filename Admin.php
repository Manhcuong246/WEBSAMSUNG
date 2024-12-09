<?php
class Admin
{

    public $conn;

    function __construct()
    {
        $this->conn = connectDB();
    }
    function showsanphamadmin()
    {
        $sql = " SELECT * FROM sanpham ;
";
        return $this->conn->query($sql);
    }
    public function doanhthusanpham()   {
        $sql = " SELECT *
FROM sanpham
ORDER BY (sanphambanduoc_sanpham * gia_sanpham) DESC
LIMIT 5;

";
        return $this->conn->query($sql)->fetchAll()    ;
    }
    function taikhoanadmin($id)
    {
        $sql = " SELECT * FROM taikhoan  where id_taikhoan= $id;
";
        return $this->conn->query($sql)->fetch()    ;
    }
    function capnhathoso($id,$pass,$name,$email,$sdt,$img,$diachi)
    {
        $sql = "UPDATE taikhoan
SET 
    matkhau_taikhoan = '$pass', 
    tennguoidung_taikhoan = '$name', 
    email_taikhoan = '$email', 
    sdt_taikhoan = '$sdt', 
    anh_taikhoan = '$img',
      diachi_taikhoan = '$diachi'
WHERE id_taikhoan = '$id';

";
        return $this->conn->query($sql);
    }
    function capnhatsanpham($id,$iddanhmuc,$name,$gia,$giagoc,$img,$mota,$tieude,$luachon,$uudai,$slkho,$banduoc,$tenanhslideshow)
    {
        $sql = "UPDATE sanpham
SET 
     id_danhmuc = '$iddanhmuc', 
    ten_sanpham = '$name', 
    gia_sanpham = '$gia', 
    giagoc_sanpham = '$giagoc', 
     anhgoiy_sanpham = '$img',
       mota_sanpham = '$mota',
        tieudebienthe_sanpham = '$tieude',
         cacluachonbienthe_sanpham = '$luachon',
           id_cacloaiuudai = '$uudai',
             soluongtrongkho_sanpham = '$slkho',
              sanphambanduoc_sanpham = '$banduoc',
               anhslideshow_sanpham = '$tenanhslideshow'
WHERE id_sanpham = '$id';


";
        return $this->conn->query($sql);
    }
    function themmoisanpham($iddanhmuc, $name, $gia, $giagoc, $img, $mota, $tieude, $luachon, $uudai, $slkho, $banduoc, $tenanhslideshow)
{
    $sql = "INSERT INTO sanpham
    (
        id_danhmuc,
        ten_sanpham,
        gia_sanpham,
        giagoc_sanpham,
        anhgoiy_sanpham,
        mota_sanpham,
        tieudebienthe_sanpham,
        cacluachonbienthe_sanpham,
        id_cacloaiuudai,
        soluongtrongkho_sanpham,
        sanphambanduoc_sanpham,
        anhslideshow_sanpham
    ) VALUES
    (
        '$iddanhmuc',
        '$name',
        '$gia',
        '$giagoc',
        '$img',
        '$mota',
        '$tieude',
        '$luachon',
        '$uudai',
        '$slkho',
        '$banduoc',
        '$tenanhslideshow'
    )";

    return $this->conn->query($sql);
}

    function giaithichuudai()
    {
        $sql = "SELECT * FROM cacloaiuudai;

";
        return $this->conn->query($sql)->fetchAll();
    }
    function nhanvien()
    {
        $sql = "SELECT * 
FROM taikhoan 
WHERE tacnhan_taikhoan = 'nhanvien';


";
        return $this->conn->query($sql);
    }
    function khachhang()
    {
        $sql = "SELECT * 
FROM taikhoan 
WHERE tacnhan_taikhoan = 'khachhang';


";
        return $this->conn->query($sql);
    }

function thongtinkhachhang($id)
{
    $sql = "SELECT * 
FROM taikhoan 
WHERE id_taikhoan = $id;
";
    return $this->conn->query($sql)->fetch();
}
    function thongtinnhanvien($id)
    {
        $sql = "SELECT * 
FROM taikhoan 
WHERE id_taikhoan = $id;
";
        return $this->conn->query($sql)->fetch();
    }   
    function thanhtoan($idtk,$diachi)
    {
        $sql = "    INSERT INTO donhang (id_taikhoan_donhang, trangthai_donhang, diachi_donhang)
VALUES ($idtk, 'choxacnhan', '$diachi');
SET @id_donhang = LAST_INSERT_ID();
INSERT INTO chitietdonhang (id_donhang_chitiet, id_sanpham_chitiet, soluong_chitiet, mausac_chitiet, loai_chitiet)
SELECT 
    @id_donhang, 
    id_sanpham_giohang, 
    soluong_giohang, 
    mausac_giohang, 
    loai_giohang
FROM giohang
WHERE id_taikhoan_giohang = $idtk;



DELETE FROM giohang
WHERE id_taikhoan_giohang = $idtk;
";
        return $this->conn->query($sql);
    }
    function dangxuli($id)
    {
        $sql = "SELECT * FROM donhang
        JOIN chitietdonhang ON donhang.id_donhang = chitietdonhang.id_donhang_chitiet
JOIN sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham
 where id_taikhoan_donhang = $id and donhang.trangthai_donhang='danggiao' or donhang.trangthai_donhang='choxacnhan' ;
";
        return $this->conn->query($sql)->fetchAll();
    }
  
    function chitietdonhang($id)
    {
        $sql = "SELECT * FROM chitietdonhang
        join sanpham on id_sanpham = id_sanpham_chitiet
 where id_donhang_chitiet = $id;
";
        return $this->conn->query($sql)->fetchAll();
    }
    function dangxulinhanvien()
    {
        $sql = "SELECT * FROM donhang
        JOIN chitietdonhang ON donhang.id_donhang = chitietdonhang.id_donhang_chitiet
JOIN sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham
JOIN taikhoan ON taikhoan.id_taikhoan = donhang.id_taikhoan_donhang
 where donhang.trangthai_donhang='danggiao';
";
        return $this->conn->query($sql)->fetchAll();
    }
    function dangchoxacnhanadmin()
    {
        $sql = "SELECT * FROM donhang
        JOIN chitietdonhang ON donhang.id_donhang = chitietdonhang.id_donhang_chitiet
JOIN sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham
JOIN taikhoan ON taikhoan.id_taikhoan = donhang.id_taikhoan_donhang
 where donhang.trangthai_donhang='choxacnhan';
";
        return $this->conn->query($sql)->fetchAll();
    }
    function dahuy($id)
    {
        $sql = "SELECT * FROM donhang
        JOIN chitietdonhang ON donhang.id_donhang = chitietdonhang.id_donhang_chitiet
JOIN sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham
 where id_taikhoan_donhang = $id and donhang.trangthai_donhang='thatbai';
";
        return $this->conn->query($sql)->fetchAll();
    }
    function damua($id)
    {
        $sql = "SELECT * FROM donhang
        JOIN chitietdonhang ON donhang.id_donhang = chitietdonhang.id_donhang_chitiet
JOIN sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham
 where id_taikhoan_donhang = $id and donhang.trangthai_donhang='thanhcong';
";
        return $this->conn->query($sql)->fetchAll();
    }
    function sotiendatieu($id)
    {
        $sql = "SELECT SUM(ctdh.soluong_chitiet * sp.gia_sanpham) AS tong
FROM donhang dh
JOIN chitietdonhang ctdh ON dh.id_donhang = ctdh.id_donhang_chitiet
JOIN sanpham sp ON ctdh.id_sanpham_chitiet = sp.id_sanpham
WHERE dh.id_taikhoan_donhang = $id
  AND dh.trangthai_donhang = 'thanhcong';

";
        return $this->conn->query($sql)->fetchAll();
    }
    function rank($tien)
    {
        $sql = "SELECT ten_rank,anh_rank
FROM `rank`
WHERE $tien >= muctien_rank
ORDER BY muctien_rank DESC
LIMIT 1;

";
        return $this->conn->query($sql)->fetch();
    }
    function giaothanhcong($id)
    {
        $sql = "UPDATE donhang SET trangthai_donhang = 'thanhcong' WHERE id_donhang = $id;


        ";
        return $this->conn->query($sql);
    }
    function xacnhangiaohang($id)
    {
        $sql = "UPDATE donhang SET trangthai_donhang = 'danggiao' WHERE id_donhang = $id;


        ";
        return $this->conn->query($sql);
    }
    function xoadonhang($id)
    {
        $sql = "UPDATE donhang SET trangthai_donhang = 'thatbai' WHERE id_donhang = $id;


";
        return $this->conn->query($sql);
    }
    function xoasp($id){
        $sql_one="DELETE FROM sanpham where id_sanpham=$id";  
        $result=$this->conn->prepare($sql_one);
        if ($result->execute()) {
            header("Location: ?act=productadmin");
        }
    }
    function xoamau($id,$idsp){
        $sql_one="DELETE FROM mausacsanpham where id_mausacsanpham=$id";  
        $result=$this->conn->prepare($sql_one);
        if ($result->execute()) {
            header("Location: ?act=editsp&id=$idsp&thanhcong=true");
        }
    }
    function xoagiohang($id){
        $sql_one="DELETE FROM giohang where id_giohang=$id";  
        $result=$this->conn->prepare($sql_one);
        if ($result->execute()) {
            header("Location: ?act=giohang");
        }
    }
    function xoabinhluan($id,$idsp){
        $sql_one="DELETE FROM binhluan where id_binhluan=$id";  
        $result=$this->conn->prepare($sql_one);
        if ($result->execute()) {
            header("Location: ?act=chitietsp&id=$idsp");
        }
    }
    function themdanhmuc($name){
        $sql = "INSERT INTO danhmuc (id_danhmuc, ten_danhmuc)
        VALUES (null, '$name');";

       
        return $this->conn->query($sql);
    }
    function timsp($id) {
        $sql = " SELECT * 
FROM sanpham 
INNER JOIN mausacsanpham 
    ON sanpham.id_sanpham = mausacsanpham.id_sanpham
INNER JOIN danhmuc 
    ON sanpham.id_danhmuc = danhmuc.id_danhmuc
WHERE sanpham.id_sanpham = $id;
";
        return $this->conn->query($sql)->fetch();
    }
    function capnhatmausac($id, $name, $hex, $img) {
        $sql = " UPDATE mausacsanpham
SET anh_sanpham = '$img',
    mausac_sanphamhex = '$hex',
    mausac_sanphamtext = '$name'
WHERE id_mausacsanpham = $id;

";
        return $this->conn->query($sql);
    }
    function themmausac($id, $name, $hex, $img) {
        $sql = " INSERT INTO mausacsanpham (id_mausacsanpham, id_sanpham, anh_sanpham, mausac_sanphamhex, mausac_sanphamtext)
VALUES (null,$id, '$img', '$hex', '$name');


";
        return $this->conn->query($sql);
    }
    function editcolor($id) {
        $sql = " SELECT * 
FROM mausacsanpham
WHERE id_mausacsanpham = $id;
";
        return $this->conn->query($sql)->fetch();
    }
    function chonalldanhmuctruid($id) {
        $sql = "SELECT * 
FROM danhmuc
WHERE id_danhmuc != (
    SELECT id_danhmuc
    FROM sanpham
    WHERE id_sanpham = $id
);

";
        return $this->conn->query($sql)->fetchAll();
    }
    function danhmuc()
    {   
        $sql = " SELECT 
   * FROM danhmuc ;

;
 ";
        return $this->conn->query($sql);
    }
    public function donhang()   {
        $sql = " SELECT 
         donhang.*, 
    taikhoan.*, 
     chitietdonhang.*, 
    sanpham.* 
FROM 
    donhang
INNER JOIN 
    taikhoan ON donhang.id_taikhoan_donhang = taikhoan.id_taikhoan
    INNER JOIN 
    chitietdonhang ON chitietdonhang.id_donhang_chitiet = donhang.id_donhang
INNER JOIN 
    sanpham ON chitietdonhang.id_sanpham_chitiet = sanpham.id_sanpham ORDER BY id_donhang DESC;
";
        return $this->conn->query($sql) ;
    }
    public function top5spbanchay()   {
        $sql = " SELECT *
FROM sanpham
ORDER BY (sanphambanduoc_sanpham * 1.0 / soluongtrongkho_sanpham) * 100 DESC
LIMIT 5;

";
        return $this->conn->query($sql)->fetchAll()    ;
    }
    public function giohang($id)   {
        $sql = " SELECT giohang.*, sanpham.*
FROM giohang
JOIN sanpham ON giohang.id_sanpham_giohang = sanpham.id_sanpham
WHERE giohang.id_taikhoan_giohang = $id;

";
        return $this->conn->query($sql)  ;
    }
    public function findidmausac($id)   {
        $sql = " SELECT * 
FROM mausacsanpham 
WHERE id_sanpham = $id;


";
        return $this->conn->query($sql)->fetchAll()    ;
    }
}
