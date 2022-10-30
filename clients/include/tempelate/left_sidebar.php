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

                  <!-- START WHATSAPP -->
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

                  <!-- END WHATSAPP -->

                  <!--   START COUNTRY 
                  <li class="nav-item" id="lnk-country">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              الدول
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          
                          <li class="nav-item" id="lnk-rep-country">
                              <a href="main.php?dir=country&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة الدول </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  -->

                  <!-- END   COUNTRY -->
                  <!--   START university 
                  <li class="nav-item" id="lnk-university">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              الجامعات
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                         
                          <li class="nav-item" id="lnk-rep-university">
                              <a href="main.php?dir=university&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة الجامعات </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  -->

                  <!-- END university -->


                  <!--   START SPECIALIST
                  <li class="nav-item" id="lnk-specialist">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              التخصصات
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-rep-specialist">
                              <a href="main.php?dir=specialist&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة التخصصات </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                   -->

                  <!-- END SPECIALIST -->


                  <!--   START DEGREE 
                  <li class="nav-item" id="lnk-degree">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              الدرجات
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                           
                          <li class="nav-item" id="lnk-rep-degree">
                              <a href="main.php?dir=degree&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة الدرجات </p>
                              </a>
                          </li>
                      </ul>
                  </li>
-->
                  <!-- END DEGREE -->

                  <!--   START courses 
                  <li class="nav-item" id="lnk-courses">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              الكروسات
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <!--
                          <li class="nav-item" id="lnk-add-courses">
                              <a href="main.php?dir=courses&page=add" class="nav-link">
                                  <i class="fa fa-plus color2"></i>
                                  <p> اضافة  كورس </p>
                              </a>
                          </li> 
                          <li class="nav-item" id="lnk-rep-courses">
                              <a href="main.php?dir=courses&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة الكورسات </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  -->

                  <!-- END   courses -->

                  <!--   START users  
                  <li class="nav-item" id="lnk-users">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              المستخدمين
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item" id="lnk-add-users">
                              
                              <a href="main.php?dir=users&page=add" class="nav-link">
                                  <i class="fa fa-plus color2"></i>
                                  <p> اضافة  مستخدم جديد </p>
                              </a>
 
                          </li>
                          <li class="nav-item" id="lnk-rep-users">
                              <a href="main.php?dir=users&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة المستخدمين </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  -->

                  <!-- END users -->

                  <!--   START NEWS  
                  <li class="nav-item" id="lnk-news">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-images color2"></i>
                          <p>
                              الاخبار
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                           
                          <li class="nav-item" id="lnk-add-news">
                              <a href="main.php?dir=news&page=add" class="nav-link">
                                  <i class="fa fa-plus color2"></i>
                                  <p> اضافة  خبر جديد </p>
                              </a>
                          </li> 
                          <li class="nav-item" id="lnk-rep-news">
                              <a href="main.php?dir=news&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة الاخبار </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  -->

                  <!-- END NEWS -->

<!--
                  <li class="nav-item" id="lnk-message">
                      <a href="#" class="nav-link nav-link2">
                          <i class="fa-solid fa-envelope color2"></i>
                          <p>
                              الرسائل
                              <i class="right fas fa-angle-left "></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item" id="lnk-contact">
                              <a href="main.php?dir=contact&page=report" class="nav-link">
                                  <i class="far fa-circle nav-icon color3"></i>
                                  <p> مشاهدة جميع الرسائل </p>
                              </a>
                          </li>
                      </ul>
                  </li>
-->
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