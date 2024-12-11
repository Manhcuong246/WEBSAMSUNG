<?php 
require_once 'model/homeModel.php';
class homeController {
    public $homeModel;

    public function __construct() {
        $this->homeModel = new homeModel();
    }
    public function home() {
        $sanpham = $this->homeModel->top16Product();
        $danhmuc = $this->homeModel->danhmuc();
        require_once 'view/viewhome/home.php';
    }
    public function signup() {
        $taikhoan = $this->homeModel->alltaikhoan();
        require_once 'view/viewsignup/signup.php';
        
        if(isset($_POST['signup'])) {
            $name = $_POST['name'];
            $sdt = $_POST['sdt'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $vaitro = 'khachhang';
            $diachi = $_POST['diachi'];
            $img = "anhmacdinh.jpg"; 
            
            if ($_FILES['img']['size'] > 0) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, './image/'.$img);
            }

          $this->homeModel->signup($user, $pass, $name, $vaitro, $email, $sdt,$img,  $diachi);
               header("Location: ?act=login&success=true");
           
        }
    }

    public function admin() { 
        require_once 'view/viewadmin/index.php';
    }
    public function productadmin() { 
        require_once 'view/viewadmin/products.php';
    }
    public function profileadmin() { 
        require_once 'view/viewadmin/accounts.php';
    }
    public function addproduct() { 
        require_once 'view/viewadmin/add-product.php';
    } 
    public function editproduct() { 
        require_once 'view/viewadmin/edit-product.php';
    }
    public function chitietsp($id) {
        $danhmuc = $this->homeModel->danhmuc();
        $detail = $this->homeModel->findId($id);
        $goiysanpham = $this->homeModel->goiysanpham($id);
        $binhluan = $this->homeModel->binhluan($id);
        require_once 'view/viewchitietsanpham/chitietsanpham.php';
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['binhluan'])) {
          
            $idtk = $_SESSION['id'];
            $idsp = $_GET['id'];
            $binhluan2 = $_POST['binhluan'];
            $this->homeModel->thembinhluan($idtk,$idsp,$binhluan2);
            header("Refresh: 0.0000001");
        }
        if (isset($_POST['dathang'])) {
            $idtk = $_SESSION['id'];
            $color = $_POST['color'];
            $luachon = $_POST['selected_option'];
            $number = $_POST['soluong'];
            $idsp= $_GET['id'];
            $this->homeModel->themgiohang( $idtk,  $color,$luachon,$idsp,$number);
            header("Location: ./?act=chitietsp&id=$id&thanhcong=true");
        } 
    }
    public function login() {
        require_once 'view/viewlogin/login.php';

        if (isset($_POST['login'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $account = $this->homeModel->login($user, $pass);

            if ($account) {
                $_SESSION['tk'] = $account['taikhoan_taikhoan'];
                $_SESSION['mk'] = $account['matkhau_taikhoan'];
                $_SESSION['ten'] = $account['tennguoidung_taikhoan'];
                $_SESSION['vaitro'] = $account['tacnhan_taikhoan'];
                $_SESSION['email'] = $account['email_taikhoan'];
                $_SESSION['sdt'] = $account['sdt_taikhoan'];
                $_SESSION['anh'] = $account['anh_taikhoan'];              
                $_SESSION['id'] = $account['id_taikhoan'];
                $_SESSION['diachi'] = $account['diachi_taikhoan'];
                $_SESSION['login'] = true;
        if( $_SESSION['vaitro']==="admin")
                {   header("Location: ./?act=admin");}
                elseif( $_SESSION['vaitro']==="nhanvien")
                {
                    header("Location: ./?act=productadmin");
                }
             else      header("Location: ./?act=/");
            
                

            } else {
                echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác!')</script>";
            }
        }
    }
    function logout() {
       
        session_unset();           
        session_destroy(); 
    header('Location: ./index.php?act=/');
    }
}
?>