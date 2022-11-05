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
                      <a href="main.php?dir=dashboard&page=client_dashboard" class="nav-link">
                          <i class="nav-icon fas fa-dashboard"></i>
                          <p>
                              الرئيسية
                          </p>
                      </a>
                  </li>
                  <!-- ******************--------------------->
                  <li class="nav-item" id="lnk-contract">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-users color2"></i>
                          <p>
                              عقد إرتباط مراجعة
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-contract">
                              <a href="main.php?dir=clients/contract_request&page=add" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> اضافة عقد جديد </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-rep-contract">
                              <a href="main.php?dir=clients/contract_request&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة العقود </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- ******************--------------------->
                  <li class="nav-item" id="lnk-accounting">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-users color2"></i>
                          <p>
                              إعداد تقرير محاسبي
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-accounting">
                              <a href="main.php?dir=clients/accounting_report&page=add" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> اضافة عقد جديد </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-rep-accounting">
                              <a href="main.php?dir=clients/accounting_report&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة العقود </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- ******************--------------------->
                  <li class="nav-item" id="lnk-tax-services">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-users color2"></i>
                          <p>
                              خدمة زكاة وضرائب
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-tax-services">
                              <a href="main.php?dir=clients/tax_services&page=add" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> اضافة عقد جديد </p>
                              </a>
                          </li>
                          <li class="nav-item" id="lnk-rep-tax-services">
                              <a href="main.php?dir=clients/tax_services&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة العقود </p>
                              </a>
                          </li>
                      </ul>
                  </li>
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