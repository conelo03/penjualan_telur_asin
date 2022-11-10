<div id="app">
  <div class="main-wrapper container" style="">
    <div class="navbar-bg" style="height: 70px"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <a href="<?= base_url('dashboard-pelanggan') ?>" class="navbar-brand sidebar-gone-hide">Endogasin</a>
      <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
      </div>
      <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
          <i class="fas fa-ellipsis-v"></i>
        </a>
        <ul class="navbar-nav">
          <li class="nav-item <?= $title == 'Home' ? 'active' : '' ?>"><a href="<?= base_url('dashboard-pelanggan') ?>" class="nav-link">Home</a></li>
          <li class="nav-item <?= $title == 'My Order' ? 'active' : '' ?>"><a href="<?= base_url('order-pelanggan') ?>" class="nav-link">My Order</a></li>
          <li class="nav-item <?= $title == 'Riwayat Order' ? 'active' : '' ?>"><a href="<?= base_url('riwayat-order') ?>" class="nav-link">Riwayat Order</a></li>
        </ul>
      </div>
      <!-- <form class="form-inline ml-auto">
        <ul class="navbar-nav">
          <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
          <button class="btn" type="submit"><i class="fas fa-search"></i></button>
          <div class="search-backdrop"></div>
          <div class="search-result">
            <div class="search-header">
              Histories
            </div>
            <div class="search-item">
              <a href="#">How to hack NASA using CSS</a>
              <a href="#" class="search-close"><i class="fas fa-times"></i></a>
            </div>
            <div class="search-item">
              <a href="#">Kodinger.com</a>
              <a href="#" class="search-close"><i class="fas fa-times"></i></a>
            </div>
            <div class="search-item">
              <a href="#">#Stisla</a>
              <a href="#" class="search-close"><i class="fas fa-times"></i></a>
            </div>
            <div class="search-header">
              Result
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                oPhone S9 Limited Edition
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                Drone X2 New Gen-7
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                Headphone Blitz
              </a>
            </div>
            <div class="search-header">
              Projects
            </div>
            <div class="search-item">
              <a href="#">
                <div class="search-icon bg-danger text-white mr-3">
                  <i class="fas fa-code"></i>
                </div>
                Stisla Admin Template
              </a>
            </div>
            <div class="search-item">
              <a href="#">
                <div class="search-icon bg-primary text-white mr-3">
                  <i class="fas fa-laptop"></i>
                </div>
                Create a new Homepage Design
              </a>
            </div>
          </div>
        </div>
      </form> -->
      <ul class="ml-auto navbar-nav navbar-right">
        <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Messages
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
              <a href="#" class="dropdown-item dropdown-item-unread">
                <div class="dropdown-item-avatar">
                  <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                  <div class="is-online"></div>
                </div>
                <div class="dropdown-item-desc">
                  <b>Kusnaedi</b>
                  <p>Hello, Bro!</p>
                  <div class="time">10 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item dropdown-item-unread">
                <div class="dropdown-item-avatar">
                  <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                </div>
                <div class="dropdown-item-desc">
                  <b>Dedik Sugiharto</b>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                  <div class="time">12 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item dropdown-item-unread">
                <div class="dropdown-item-avatar">
                  <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                  <div class="is-online"></div>
                </div>
                <div class="dropdown-item-desc">
                  <b>Agung Ardiansyah</b>
                  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <div class="time">12 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-avatar">
                  <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                </div>
                <div class="dropdown-item-desc">
                  <b>Ardian Rahardiansyah</b>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                  <div class="time">16 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-avatar">
                  <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                </div>
                <div class="dropdown-item-desc">
                  <b>Alfa Zulkarnain</b>
                  <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                  <div class="time">Yesterday</div>
                </div>
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
              <a href="#" class="dropdown-item dropdown-item-unread">
                <div class="dropdown-item-icon bg-primary text-white">
                  <i class="fas fa-code"></i>
                </div>
                <div class="dropdown-item-desc">
                  Template update is available now!
                  <div class="time text-primary">2 Min Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-info text-white">
                  <i class="far fa-user"></i>
                </div>
                <div class="dropdown-item-desc">
                  <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                  <div class="time">10 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-success text-white">
                  <i class="fas fa-check"></i>
                </div>
                <div class="dropdown-item-desc">
                  <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                  <div class="time">12 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-danger text-white">
                  <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="dropdown-item-desc">
                  Low disk space. Let's clean it!
                  <div class="time">17 Hours Ago</div>
                </div>
              </a>
              <a href="#" class="dropdown-item">
                <div class="dropdown-item-icon bg-info text-white">
                  <i class="fas fa-bell"></i>
                </div>
                <div class="dropdown-item-desc">
                  Welcome to Stisla template!
                  <div class="time">Yesterday</div>
                </div>
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li> -->
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="image" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block"><?= $this->session->userdata('nama_pelanggan') ?></div></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="<?= base_url('profile-pelanggan/'.$this->session->userdata('id_pelanggan')) ?>" class="dropdown-item has-icon">
              <i class="far fa-user"></i> Profile
            </a>
            <a href="<?= base_url('password-pelanggan/'.$this->session->userdata('id_pelanggan')) ?>" class="dropdown-item has-icon">
              <i class="fas fa-key"></i> Ganti Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('logout-pelanggan') ?>" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- <nav class="navbar navbar-secondary navbar-expand-lg">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a href="index-0.html" class="nav-link">General Dashboard</a></li>
              <li class="nav-item"><a href="index.html" class="nav-link">Ecommerce Dashboard</a></li>
            </ul>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Top Navigation</span></a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Multiple Dropdown</span></a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
              <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                  <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                      <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav> -->
    