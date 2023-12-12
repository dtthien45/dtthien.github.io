<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
    <div class="sidebar-header">
      <a href="home.php"><img class="main-logo" src="../img/logo/the monkey logo.png" height="200px" width="200px"
          alt="" /></a>
      <strong><a href="home.php"><img src="../img/logo/the monkey logo.png" alt="" /></a></strong>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
      <nav class="sidebar-nav left-sidebar-menu-pro">
        <ul class="metismenu" id="menu1">
          <li class="active">
            <a href="home.php">
              <span class="educate-icon educate-home icon-wrap"></span>
              <span class="mini-click-non">Bảng điều khiển</span>
            </a>
          </li>
          <li>
            <a class="has-arrow" href="#" aria-expanded="false"><span
                class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Quản lý nhân
                sự</span></a>
            <ul class="submenu-angle" aria-expanded="false">
              <li><a title="Danh sách nhân viên" href="employee.php"><span class="mini-sub-pro">Danh
                    sách nhân viên</span></a></li>
              <li><a title="Danh sách chấm công" href="attendance.php"><span class="mini-sub-pro">Danh sách chấm công</span></a></li>
            </ul>
          </li>
          <li>
            <a href="deduction.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span>
              <span class="mini-click-non">Các khoản khấu trừ</span></a>
          </li>
          <li>
            <a href="position.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span>
              <span class="mini-click-non">Vị trí</span></a>
          </li>
          <li>
            <a href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span
                class="mini-click-non">Quản lý tiền lương</span></a>
          </li>
          <li>
            <a href="schedule.php" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span
                class="mini-click-non">Lịch làm việc cố định</span></a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="logo-pro">
          <a href="home.php"><img class="main-logo" src="../img/logo/logo2.png" alt="" /></a>
        </div>
      </div>
    </div>
  </div>
  <div class="header-advance-area">
    <div class="header-top-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="header-top-wraper">
              <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                  <div class="menu-switcher-pro">
                    <button type="button" id="sidebarCollapse"
                      class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                      <i class="educate-icon educate-nav"></i>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                      <li class="nav-item dropdown"> </li>
                      <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                          class="nav-link dropdown-toggle">
                          <img
                            src="<?php echo (!empty($user['photo'])) ? '../img/profile/' . $user['photo'] : '../img/profile/1.jpg'; ?>"
                            class="user-image">
                          <span class="admin-name">
                            <?php echo $user['firstname'] . ' ' . $user['lastname']; ?>
                          </span>
                          <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                        </a>
                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                          <li><a href="#pass_change" data-toggle="modal"><span class="edu-icon edu-home-admin author-log-ic"></span>Đổi mật khẩu</a>
                          </li>
                          <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Đăng
                              xuất</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul class="mobile-menu-nav">
                  <li><a data-toggle="collapse" data-target="#Charts" href="home.php">Bảng điều khiển
                      <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                  </li>
                  
                  <li><a data-toggle="collapse" data-target="#demoevent" href="#">Quản lý nhân sự
                      <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                    <ul id="demoevent" class="collapse dropdown-header-top">
                      <li><a href="employee.php">Danh sách nhân viên</a>
                      </li>
                      <li><a href="attendance.php"> Danh sách chấm công</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="deduction.php">Các khoản khấu trừ</a></li>
                  <li><a href="position.php">Vị trí</a></li>
                  <li><a href="events.html">Quản lý tiền lương</a></li>
                  <li><a href="schedule.php">Lịch làm việc cố định</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/password_modal.php'; ?>
