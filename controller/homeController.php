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
        require_once 'view/viewsignup/signup.php';
    }
    public function db() { 
        require_once 'view/viewdb/db.php';
    }
    public function table() { 
        require_once 'view/viewdb/tables.php';
    }
    public function chitietsp($id) {
        $danhmuc = $this->homeModel->danhmuc();
        $detail = $this->homeModel->findId($id);
        $goiysanpham = $this->homeModel->goiysanpham($id);
        require_once 'view/viewchitietsanpham/chitietsanpham.php';
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
                $_SESSION['login'] = true;

                if ($_SESSION['vaitro'] == 'khachhang') {           
                    header("Location: ./index.php?act=/");
                }
               

                exit;
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