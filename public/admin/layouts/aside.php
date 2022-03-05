<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= asset('adminLTE/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= asset('adminLTE/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item <?= getUrl() ==  getpage("users") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user"></i>

            <p>
              المستخدم
              <i class="right fas fa-angle-left"></i>


            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("users/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("users/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>

                <p>إنشاء</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("users/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("users/index.php") ? 'active' : '' ?>">


                <i class="fas fa-users nav-icon"></i>

                <p>إظهار البيانات</p>
              </a>
            </li>



          </ul>
        </li>


        <li class="nav-item <?= getUrl() ==  getpage("message") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user"></i>

            <p>
              الرساله
              <i class="right fas fa-angle-left"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= getpage("message/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("message/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>

                <p>إنشاء</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("message/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("message/index.php") ? 'active' : '' ?>">

                <i class="fas fa-users nav-icon"></i>

                <p>إظهار البيانات</p>
              </a>
            </li>



          </ul>
        </li>

        <li class="nav-item <?= getUrl() ==  getpage("chefs") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user"></i>

            <p>
              الطباخ
              <i class="right fas fa-angle-left"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= getpage("chefs/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("chefs/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>

                <p>إنشاء</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("chefs/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("chefs/index.php") ? 'active' : '' ?>">

                <i class="fas fa-users nav-icon"></i>

                <p>إظهار البيانات</p>
              </a>
            </li>



          </ul>
        </li>

        <li class="nav-item <?= getUrl() ==  getpage("sliders") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user"></i>

            <p>
              sliders
              <i class="right fas fa-angle-left"></i>

            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?= getpage("sliders/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("sliders/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>

                <p>إنشاء</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("sliders/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("sliders/index.php") ? 'active' : '' ?>">

                <i class="fas fa-users nav-icon"></i>

                <p>إظهار البيانات</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item <?= getUrl() ==  getpage("about") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="far fa-address-card nav-icon"></i>
            <p>
              حول المواقع
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("about/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("about/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إدخال بيانات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("about/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("about/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار بيانات المواقع</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item <?= getUrl() ==  getpage("news") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-image"></i>

            <p>
              الإخبارية
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("news/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("news/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>

                <p>إدخال بيانات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("news/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("news/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار البيانات الإخبارية</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item <?= getUrl() ==  getpage("gallary") ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link active">
            <i class="far fa-address-card nav-icon"></i>
            <p>
              معرض الصور
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("gallary/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("gallary/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إدخال الصور</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("gallary/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("gallary/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار صور المواقع</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>