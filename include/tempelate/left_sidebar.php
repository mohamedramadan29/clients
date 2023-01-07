  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <span class="brand-text font-weight-light"> <?php echo $website_title; ?> </span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3" style="line-height:0">
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item" id="lnk-expenses">
                      <a href="main.php?dir=dashboard&page=dashboard" class="nav-link">
                          <i class="nav-icon fas fa-dashboard"></i>
                          <p>
                              الرئيسية
                          </p>
                      </a>
                  </li>

                  <!-- START EDUCATION WEBSITE  -->

                  <!-- START Admin Users  -->
                  <li class="nav-item" id="lnk-whatsapp">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-users color2"></i>
                          <p>
                              انشاء مستخدم جديد
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-rep-whatsapp">
                              <a href="main.php?dir=admin_users&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p>مشاهدة المستخدمين</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- End Admin Users  -->
                  <!-- START Admin Privilage  -->
                  <li class="nav-item" id="lnk-privilage">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-users color2"></i>
                          <p>
                              صلاحيات المستخدمين
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-rep-privilage">
                              <a href="main.php?dir=privilage&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p>مشاهدة الصلاحيات</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- End Admin Privilage  -->
                  <li class="nav-item">
                      <a href="signout.php" class="nav-link">
                          <i class="fa-solid fa-arrow-right-from-bracket color11"></i>
                          <p>
                              تسجيل خروج
                              <i class=""></i>
                          </p>
                      </a>
                  </li>



                  <!-- END EDUCATION WEBSITE -->
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>