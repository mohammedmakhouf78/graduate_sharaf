<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  
  <!-- Sidebar -->
  <div class="sidebar">
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





        <li class="nav-item <?= (getUrl() ==  getpage("users/index.php") || getUrl() ==  getpage("users/create.php")) ? 'menu-open' : '' ?>">

          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("users/index.php") || getUrl() ==  getpage("users/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user-clock"></i>

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







        <li class="nav-item  <?= (getUrl() ==  getpage("message/index.php") || getUrl() ==  getpage("message/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link   <?= (getUrl() ==  getpage("message/index.php") || getUrl() ==  getpage("message/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-comment"></i>
            <p>
              الرساله
              <i class="right fas fa-angle-left"></i>
            </p>

          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("message/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("message/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إنشاء الرسالة</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("message/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("message/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p> إظهار البيانات الرسالة</p>
              </a>
            </li>
          </ul>
        </li>





        <li class="nav-item <?= (getUrl() ==  getpage("chefs/index.php") || getUrl() ==  getpage("chefs/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("chefs/index.php") || getUrl() ==  getpage("chefs/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user-cog"></i>
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
                <p> إظهار البيانات الطباخين</p>
              </a>
            </li>
          </ul>
        </li>






        <li class="nav-item <?= (getUrl() ==  getpage("sliders/index.php") || getUrl() ==  getpage("sliders/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("sliders/index.php") || getUrl() ==  getpage("sliders/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-sliders-h"></i>
            <p>
              المنزلق
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






        <li class="nav-item <?= (getUrl() ==  getpage("about/index.php") || getUrl() ==  getpage("about/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("about/index.php") || getUrl() ==  getpage("about/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-address-card"></i>


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





        <li class="nav-item <?= (getUrl() ==  getpage("news/index.php") || getUrl() ==  getpage("news/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("news/index.php") || getUrl() ==  getpage("news/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-newspaper"></i>


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





        <li class="nav-item  <?= (getUrl() ==  getpage("gallary/index.php") || getUrl() ==  getpage("gallary/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link   <?= (getUrl() ==  getpage("gallary/index.php") || getUrl() ==  getpage("gallary/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-images"></i>

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


        <li class="nav-item <?= (getUrl() ==  getpage("categories/index.php") || getUrl() ==  getpage("categories/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("categories/index.php") || getUrl() ==  getpage("categories/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-hand-rock"></i>


            <p>
              التصنيفات
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("categories/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("categories/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إدخال بيانات التصنيفات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("categories/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("categories/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار بيانات التصنيفات</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item <?= (getUrl() ==  getpage("food/index.php") || getUrl() ==  getpage("food/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("food/index.php") || getUrl() ==  getpage("food/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-utensils"></i>
            <p>
              الوجبات
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("food/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("food/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إدخال بيانات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("food/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("food/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار البيانات للوجبات</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item <?= (getUrl() ==  getpage("feedback/index.php") || getUrl() ==  getpage("feedback/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("feedback/index.php") || getUrl() ==  getpage("feedback/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-comments"></i>

            <p>
              التعليقات
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("feedback/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("feedback/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إضافة بيانات التعليقات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("feedback/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("feedback/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار بيانات التعليقات</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item <?= (getUrl() ==  getpage("tables/index.php") || getUrl() ==  getpage("tables/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("tables/index.php") || getUrl() ==  getpage("tables/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-couch"></i>

            <p>
              الطاولات
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("tables/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("tables/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إضافة بيانات الطاولات</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("tables/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("tables/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار بيانات الطاولات</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item <?= (getUrl() ==  getpage("books/index.php") || getUrl() ==  getpage("books/create.php")) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link  <?= (getUrl() ==  getpage("books/index.php") || getUrl() ==  getpage("books/create.php")) ? 'active' : '' ?>">
            <i class="nav-icon fas fa-scroll"></i>

            <p>
              <i class="right fas fa-angle-left"></i>
              الحجز

            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= getpage("books/create.php") ?>" class="nav-link <?= getUrl() ==  getpage("books/create.php") ? 'active' : '' ?>">
                <i class="far fa-edit nav-icon"></i>
                <p>إضافة بيانات الحجز</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= getpage("books/index.php") ?>" class="nav-link <?= getUrl() ==  getpage("books/index.php") ? 'active' : '' ?>">
                <i class="fas fa-users nav-icon"></i>
                <p>إظهار بيانات الحجز</p>
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