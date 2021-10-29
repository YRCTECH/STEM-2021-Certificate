       <header class="topbar">
           <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
               <div class="navbar-header">
                   <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                           class="ti-menu ti-close"></i></a>
                   <a class="navbar-brand" href="
                   <?php if($_SESSION['a_id']){ ?>
                        administrator_page.php
                    <?php } else{ ?>
                        index.php 
                    <?php } ?>">

                       <b class="logo-icon">
                       </b>
                       <span class="logo-text">

                           <img src="assets/images/logo-text2.png" class="light-logo" alt="homepage" />
                       </span>
                   </a>
                   <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                       data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                           class="ti-more"></i></a>
               </div>
               <div class="navbar-collapse collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto">
                   </ul>
                   <ul class="navbar-nav justify-content-end">
                       <li class="nav-item dropdown mega-dropdown"> <a
                               class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                   class="mdi mdi-view-grid"></i></a>
                           <div class="dropdown-menu dropdown-menu-animate-up">
                               <div class="mega-dropdown-menu row">
                                   <div class="col-lg-12 col-xl-12 mb-2">
                                       <h4 class="mb-3">
                                        Certificate The 1st National Basic STEM Innovation E-FORUM 2021
                                        <br/>
                                        ระบบเกียรติบัตรงานสะเต็มออนไลน์ 2564
                                        <hr/>
                                           ศูนย์สะเต็มศึกษาภาคเหนือตอนบน โรงเรียนยุพราชวิทยาลัย<br>
                                           238 ถนนพระปกเกล้า ตำบลศรีภูมิ อำเภอเมือง จังหวัดเชียงใหม่ 50200
                                        </h4>
    
                                   </div>

                               </div>
                           </div>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img src="assets/images/logo.svg" alt="user" width="30"
                                   class="profile-pic rounded-circle" />
                           </a>
                           <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                               <div class="d-flex no-block align-items-center p-3 bg-danger text-white mb-2">
                                   <div class=""><img src="assets/images/logo.svg" alt="user" class="rounded-circle"
                                           width="60"></div>
                                   <div class="ms-2">
                                       <h4 class="mb-0 text-white">ศูนย์สะเต็มศึกษาภาคเหนือตอนบน</h4>
                                       <p class="mb-0">โรงเรียนยุพราชวิทยาลัย จังหวัดเชียงใหม่</p>
                                   </div>
                               </div>
                               <?php if(!$_SESSION['a_id']){ ?>



                               <?php }else{ ?>
                               <div class="dropdown-divider"></div>

                               <a class="dropdown-item" href="process/logout.php"><i data-feather="log-out"
                                       class="feather-sm text-danger me-1 ms-1"></i> Logout</a>
                               <?php } ?>
                               <div class="dropdown-divider"></div>
                               <div class="pl-4 p-2"><a href="login_admin.php"
                                       class="btn d-block w-100 btn-info rounded-pill">Administrator</a></div>
                           </div>
                       </li>
                   </ul>
               </div>
           </nav>
       </header>

       <aside class="left-sidebar">
           <!-- Sidebar scroll-->
           <div class="scroll-sidebar">
               <!-- Sidebar navigation-->
               <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="index.php" aria-expanded="false">
                               <i class="mdi mdi-home"></i><span class="hide-menu">หน้าหลัก</span>
                           </a>
                       </li>

                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="print_teacher.php" aria-expanded="false"><i class="mdi mdi-certificate"></i><span class="hide-menu">การแข่งขันของครู</span>
                           </a>
                       </li>

                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="print_student.php" aria-expanded="false"><i class="mdi mdi-certificate"></i><span class="hide-menu">การแข่งขันของนักเรียน</span>
                           </a>
                       </li>

                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="print_yrc.php" aria-expanded="false"><i class="mdi mdi-certificate"></i><span class="hide-menu">การแข่งขันของนักเรียนยุพราช</span>
                           </a>
                       </li>

                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="print_adviser.php" aria-expanded="false"><i class="mdi mdi-certificate"></i><span class="hide-menu">ครูที่ปรึกษาการแข่ง</span>
                           </a>
                       </li>



                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="contact.php" aria-expanded="false">
                               <i class="mdi mdi-inbox"></i>
                               <span class="hide-menu">ติดต่อเรา</span>
                           </a>
                       </li>

                       <li class="sidebar-item">
                           <a class="sidebar-link waves-effect waves-dark" href="policy.php" aria-expanded="false">
                               <i class="mdi mdi-file-document-box"></i>
                               <span class="hide-menu">นโยบายเว็บไซต์</span>
                           </a>

                       </li>
                   </ul>
               </nav>
               <!-- End Sidebar navigation -->
           </div>
           <!-- End Sidebar scroll-->
       </aside>