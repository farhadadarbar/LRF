 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="me-1 font-weight-bold text-white">LFR</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
         <li class="nav-item">
          <a class="nav-link " href="{{ route('dashboard') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text me-1">داشبورد</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('getsms') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">mail</i>
            </div>
            <span class="nav-link-text me-1">پیام ها</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('getcontact') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">table_view</i>
            </div>
            <span class="nav-link-text me-1">مخاطبین</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('getcalllog') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text me-1">تاریخچه تلفن</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('getimage') }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text me-1">عکس ها</span>
          </a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link " href="">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text me-1">اعلان ها</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">map</i>
            </div>
            <span class="nav-link-text me-1">جی پی اس</span>
          </a>
        </li>
      
      
      </ul>
    </div>
   
  </aside>