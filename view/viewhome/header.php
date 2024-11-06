<style>
.header{
    height:75px;
}
.header{
    position: relative;
    z-index: 6; 
}
.nav-link{
   font-size: 14.5px;
    color: black; 
}
.nav-item:hover .dropdown-toggle:hover {
background-color: black;
color: #f4f4f4;
border-radius: 40px;
}
.nav-item.dropdown:hover .dropdown-menu {
display: block;
}

.notibanner{
    line-height:45px;
}
.carousel-item {
    transition: transform 0.5s ease, opacity 0.5s ease !important; /* Thay đổi thời gian và độ mềm mại */
}
.dropdown-item{
    font-size: 12px;
    font-family: 'SamsungOne400', arial, sans-serif;
}
.dropdown-item:hover{
    background-color: white;
    color: black !important;
    font-weight: bold !important;
}
.dropdown-toggle::after {
    display: none;
}
</style>



<header>
<div class="container-fluid">
    <div class="row">
    
      <div class="header col-2 p-3 text-center bg-white"><img src="./image/logo.jpg" alt="" class="img-fluid" style=" max-height: 130%;width: auto; "></div>
      <div class="header col-6 p-3 bg-white " >
        <nav class="navbar navbar-expand-lg"style="background-color: white; font-size:13px;"  >
        <div class="container-fluid" >
          <div class="collapse navbar-collapse" id="navbarNavDropdown"  >
            <ul class="navbar-nav" >
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Di động
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ưu đãi 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 AI
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 TV & AV
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Gia Dụng
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Máy tính
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Màn hình
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Phụ kiện
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SmartThings
                </a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
    </div>
      <div class="header col-4   p-3 bg-white" ><nav class="navbar navbar-expand-lg"style="background-color: white; font-size:13px;float:right;margin-right:40px;"   >
        <div class="container-fluid"  >
          <div class="collapse navbar-collapse" id="navbarNavDropdown"   >
            <ul class="navbar-nav" >
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hỗ trợ
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Doanh Nghiệp
                </a>
              </li>
              <li class="nav-item dropdown">
                <a  class="nav-link dropdown-toggle" href="#target-section" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-search"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-cart"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        </nav></div>
      <div class="notibanner   col  bg-white-gray text-center text-black " style="font-size:13px;">Tích lũy thêm đến 5% điểm thưởng với tuần lễ samsung &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#66B2FF    ; font-family: 'Roboto', sans-serif;" ><u><a href="#">Tìm hiểu ngay</a></u></span></div>
    </div>
  </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.nav-item');
    const overlay = document.querySelector('.page-overlay');

    navItems.forEach(navItem => {
        navItem.addEventListener('mouseenter', () => {
            overlay.style.opacity = '1';
        });

        navItem.addEventListener('mouseleave', () => {
            overlay.style.opacity = '0';
        });
    });
});
</script>