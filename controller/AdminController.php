<?php
require_once 'model/Admin.php';
class AdminController
{
    public $Admin;

    public function __construct()
    {
        $this->Admin = new Admin();
    }

    public function admin()
    {
        $top5sp = $this->Admin->top5spbanchay();
        $doanhthusanpham = $this->Admin->doanhthusanpham();
        $donhang = $this->Admin->donhang();
        $doanhthutheongay = $this->Admin->doanhthutheongay();
        require_once 'view/viewadmin/index.php';
    }
    public function productadmin()
    {
        $sanpham = $this->Admin->showsanphamadmin();
        require_once 'view/viewadmin/products.php';
    }
    public function thongtinkhachhang($id)
    {

          $thongtinkhachhang = $this->Admin->thongtinkhachhang($id);
        $damua = $this->Admin->damua($id);
        $sotiendatieu = $this->Admin->sotiendatieu($id);
        
        if($sotiendatieu[0]['tong']==null){
            $sotiendatieu[0]['tong']=0;
          }
                $rank = $this->Admin->rank($sotiendatieu[0]['tong']);
        require_once 'view/viewadmin/chitietkhachhang.php';
    }
    public function profileadmin($id)
    
    {   
             
        $sotiendatieu = $this->Admin->sotiendatieu($id);
        
if($sotiendatieu[0]['tong']==null){
    $sotiendatieu[0]['tong']=0;
  }
        $rank = $this->Admin->rank($sotiendatieu[0]['tong']);
        $taikhoan = $this->Admin->taikhoanadmin($id);
        require_once 'view/viewadmin/accounts.php';

        if (isset($_POST['capnhathoso'])) {
            $id = $taikhoan['id_taikhoan'];
            $name = $_POST['name'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $pass = $_POST['newpass'];
            $diachi = $_POST['diachi'];
        
         
            if ($_POST['newpass'] == "") {
                $pass = $taikhoan['matkhau_taikhoan'];
            }

            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/' . $img);
            } else $img = $taikhoan['anh_taikhoan'];

$this->Admin->capnhathoso($id, $pass, $name, $email, $sdt, $img, $diachi);
$taikhoan = $this->Admin->taikhoanadmin($id);
if ($taikhoan) {
    $_SESSION['mk'] = $taikhoan['matkhau_taikhoan'];
    $_SESSION['ten'] = $taikhoan['tennguoidung_taikhoan'];
    $_SESSION['email'] = $taikhoan['email_taikhoan'];
    $_SESSION['sdt'] = $taikhoan['sdt_taikhoan'];
    $_SESSION['anh'] = $taikhoan['anh_taikhoan'];
    $_SESSION['diachi'] = $taikhoan['diachi_taikhoan'];
}


header("Location: ?act=profileadmin&id=$id");
exit;

        }
    }
    public function addproduct()
    {   $danhmuc = $this->Admin->danhmuc();
        require_once 'view/viewadmin/add-product.php';
        if (isset($_POST['capnhatsanpham'])) {
            $name = $_POST['name'];
            $gia = $_POST['gia'];
            $giagoc = $_POST['giagoc'];
            $mota = $_POST['mota'];
            $tieude = $_POST['tieude'];
            $luachon = $_POST['luachon'];
            $uudai = $_POST['uudai'];
            $slkho = $_POST['soluongtrongkho'];
            $banduoc = $_POST['banduoc'];
            $iddanhmuc = $_POST['danhmuc'];
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/' . $img);
              
            } else $img = $suasp['anhgoiy_sanpham'];




            if ($_FILES['anhslideshow']['size'][0] > 0) {

                $fileNames = [];


                foreach ($_FILES['anhslideshow']['name'] as $index => $filename) {
                    $tmp2 = $_FILES['anhslideshow']['tmp_name'][$index];
                    $img2 = $_FILES['anhslideshow']['name'][$index];
                    if (move_uploaded_file($tmp2, './image/' . $img2)) {
                        $fileNames[] = $img2;
                    }


                    $fileNamesString = implode(';', $fileNames);


                    if (!empty($tenanhslideshow)) {
                        $tenanhslideshow .= ";" . $fileNamesString;
                    } else {
                        $tenanhslideshow = $fileNamesString;
                    }
                }
            } else $tenanhslideshow = $_POST['tenanhslideshow'];
            if ($this->Admin->themmoisanpham($id, $iddanhmuc, $name, $gia, $giagoc, $img, $mota, $tieude, $luachon, $uudai, $slkho, $banduoc, $tenanhslideshow)) {
                header("Location: ?act=editsp&id=$id&thanhcong=true");
            }
        }
    }
    
    public function editcolor($id)
    {   
        $editcolor = $this->Admin->editcolor($id);
        require_once 'view/viewadmin/editcolor.php';
        if (isset($_POST['capnhatmausac'])) {
            $name = $_POST['name'];
            $hex = $_POST['hex'];
           
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/' . $img);
            } else $img = $editcolor['anh_sanpham'];

            $this->Admin->capnhatmausac($id, $name, $hex, $img);
            header("Location: ?act=suamausp&id=$id&thanhcong=true");
        }
    }
    public function giaithichuudai()
    {
        $giaithichuudai = $this->Admin->giaithichuudai();
        require_once 'view/viewadmin/giaithichuudai.php';
    }
    public function themmau($id)
    {     
        require_once 'view/viewadmin/addcolor.php';
        if (isset($_POST['themmausac'])) {
            $name = $_POST['name'];
            $hex = $_POST['hex'];
            $img = "vn-11134201-7qukw-ljvcmne4c26ab8.png";
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/' . $img);
            } 

            $this->Admin->themmausac($id, $name, $hex, $img);
            header("Location: ?act=themmau&id=$id&thanhcong=true");
        }
    }
    public function giohang($id)
    {
        $giohang = $this->Admin->giohang($id);
        require_once 'view/viewadmin/giohang.php';
    }
    public function quanlitaikhoan()
    {   
        
        $nhanvien = $this->Admin->nhanvien();
        $khachhang = $this->Admin->khachhang();
        require_once 'view/viewadmin/quanlitaikhoan.php';
    }
    public function thanhtoan($id,$diachi)
    {   
        $this->Admin->thanhtoan($id,$diachi);
        header("Location: ?act=dangxuli&id=$id&thanhcong=true");
    }
    public function chitietdonhang($id)
    {   
        $chitietdonhang= $this->Admin->chitietdonhang($id);
        require_once 'view/viewadmin/chitietdonhang.php';
    }
    public function xacnhangiaohang($id)
    {   
        $chitietdonhang= $this->Admin->xacnhangiaohang($id);
        $dangchoxacnhanadmin = $this->Admin->dangchoxacnhanadmin();
        require_once 'view/viewadmin/dangchoxacnhan.php';
    }
    public function dangxuli($id)
    {   
      
        $dangxuli = $this->Admin->dangxuli($id);
        
        require_once 'view/viewadmin/dangxuli.php';
    }
    public function dangxulinhanvien()
    {   
        $dangxulinhanvien = $this->Admin->dangxulinhanvien();
        require_once 'view/viewadmin/dangxulinhanvien.php';
    }
    public function xoadonhang($id)
    {   
        $this->Admin->xoadonhang($id);
        header("Location: ?act=dangxuli");
    }
      
    public function dahuy($id)
    {   
        $dahuy = $this->Admin->dahuy($id);
        require_once 'view/viewadmin/dahuy.php';
    }
    public function damua($id)
    {   
        $damua = $this->Admin->damua($id);
        
        require_once 'view/viewadmin/spdamua.php';
    }
    public function giaothanhcong($id)
    {   
        $dahuy = $this->Admin->giaothanhcong($id);
        header("Location: ?act=dangxulinhanvien");
       
    }
    public function dangchoxacnhanadmin()
    {   
        $dangchoxacnhanadmin = $this->Admin->dangchoxacnhanadmin();
        require_once 'view/viewadmin/dangchoxacnhan.php';
       
    }
    public function xoamau($id,$idsp)
    {
        $giohang = $this->Admin->xoamau($id,$idsp);
    }
    public function thongtinnhanvien($id)
    {
        $thongtinhanvien = $this->Admin->thongtinnhanvien($id);
        require_once 'view/viewadmin/chitietnhanvien.php';

    }
    public function themdanhmuc()
    {
        require_once 'view/viewadmin/themdanhmuc.php';
        if (isset($_POST['themdanhmuc'])) {
            $name = $_POST['name'];
            $this->Admin->themdanhmuc($name);
            header("Location: ?act=themdanhmuc&thanhcong=true");
        }
    }
    public function editsp($id)
    {
        $suasp = $this->Admin->timsp($id);
        $chonalldanhmuctruid = $this->Admin->chonalldanhmuctruid($id);
        $mausac = $this->Admin->findidmausac($id);

        require_once 'view/viewadmin/edit-product.php';
        if (isset($_POST['capnhatsanpham'])) {
            $id = $suasp['id_sanpham'];
            $name = $_POST['name'];
            $gia = $_POST['gia'];
            $giagoc = $_POST['giagoc'];
            $mota = $_POST['mota'];
            $tieude = $_POST['tieude'];
            $luachon = $_POST['luachon'];
            $uudai = $_POST['uudai'];
            $slkho = $_POST['soluongtrongkho'];
            $banduoc = $_POST['banduoc'];
            $iddanhmuc = $_POST['danhmuc'];
            $tenanhslideshow = $_POST['tenanhslideshow'];
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/' . $img);
              
            } else $img = $suasp['anhgoiy_sanpham'];




            if ($_FILES['anhslideshow']['size'][0] > 0) {

                $fileNames = [];


                foreach ($_FILES['anhslideshow']['name'] as $index => $filename) {
                    $tmp2 = $_FILES['anhslideshow']['tmp_name'][$index];
                    $img2 = $_FILES['anhslideshow']['name'][$index];
                    if (move_uploaded_file($tmp2, './image/' . $img2)) {
                        $fileNames[] = $img2;
                    }


                    $fileNamesString = implode(';', $fileNames);


                    if (!empty($tenanhslideshow)) {
                        $tenanhslideshow .= ";" . $fileNamesString;
                    } else {
                        $tenanhslideshow = $fileNamesString;
                    }
                }
            } else $tenanhslideshow = $_POST['tenanhslideshow'];
            if ($this->Admin->capnhatsanpham($id, $iddanhmuc, $name, $gia, $giagoc, $img, $mota, $tieude, $luachon, $uudai, $slkho, $banduoc, $tenanhslideshow)) {
                header("Location: ?act=editsp&id=$id&thanhcong=true");
            }
        }
    }
    public function xoagiohang($id)
    {
        $this->Admin->xoagiohang($id);
    }
    public function xoabinhluan($id,$idsp)
    {
        $this->Admin->xoabinhluan($id,$idsp);
    }
    public function xoasp($id)
    {
        $this->Admin->xoasp($id);
    }
}
