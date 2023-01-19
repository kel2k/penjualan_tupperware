<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Kel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url('images/download(1).jpg')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo session()->get('username') ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
              <?php   
  if (session()->get('level')==1){
    ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('/home/dashboard/')?>"><i class="fa fa-home"></i>Home</a></li>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('/home/nota/'.$evan->id_nota)?>">Nota</a></li>
                      <li><a href="<?=base_url('/home/barang/'.$evan->id_barang)?>">Barang</a></li>
                      <li><a href="<?=base_url('/home/barang_masuk/'.$evan->id_brg_msk)?>">Barang Masuk</a></li>
                       <li><a href="<?=base_url('/home/barang_keluar/'.$evan->id_brg_klr)?>">Transaksi</a></li>
                    </ul>
                    <li><a><i class="fa fa-desktop"></i></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('/home/l_brg')?>">Barang</a></li>
                      <li><a href="<?=base_url('/home/l_masuk')?>">Barang Masuk</a></li>
                       <li><a href="<?=base_url('/home/l_penjualan')?>">Penjualan</a></li>
                    </ul>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Setting</h3>
                <ul class="nav side-menu">
               <li><a href="<?=base_url('/home/user/')?>"><i class="fa fa-users"></i>User</a></li>
                   
                  </li>
                    <li><a href="<?=base_url('/home/karyawan/')?>"><i class="fa fa-user"></i>Karyawan</a></li>
                    </ul>
                  </li>
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url('/home/logout/')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url('images/download(1).jpg')?>" alt=""><?php echo session()->get('username') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

             
                  </a>
                
                    <li>
                      <a>
                        
                        <span>
                         
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <span class="input-group-btn">  
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php 
          }else if (session()->get('level')==2){
          ?>
           <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('/home/dashboard/')?>"><i class="fa fa-home"></i>Home</a></li>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <!-- <li><a href="<?=base_url('/home/nota/'.$evan->id_nota)?>">Nota</a></li> -->
                      <li><a href="<?=base_url('/home/barang/'.$evan->id_barang)?>">Barang</a></li>
                      <li><a href="<?=base_url('/home/barang_masuk/'.$evan->id_brg_msk)?>">Barang Masuk</a></li> 
                       <li><a href="<?=base_url('/home/barang_keluar/'.$evan->id_brg_klr)?>">Transaksi</a></li>
                    </ul>

                </ul>
              </div>
              <div class="menu_section">
                <h3>Setting</h3>
                <ul class="nav side-menu">
               <li><a href="<?=base_url('/home/user/')?>"><i class="fa fa-users"></i>User</a></li>
                   
                  </li>
                    <li><a href="<?=base_url('/home/karyawan/')?>"><i class="fa fa-user"></i>Karyawan</a></li>
                    </ul>
                  </li> -->
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url('/home/logout/')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url('images/download(1).jpg')?>" alt=""><?php echo session()->get('username') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

             
                  </a>
                
                    <li>
                      <a>
                        
                        <span>
                         
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <span class="input-group-btn">  
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php 
          }else if (session()->get('level')==3){
          ?>
           <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('/home/dashboard/')?>"><i class="fa fa-home"></i>Home</a></li>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('/home/nota/'.$evan->id_nota)?>">Nota</a></li>
                      <li><a href="<?=base_url('/home/barang/'.$evan->id_barang)?>">Barang</a></li>
                      <li><a href="<?=base_url('/home/barang_masuk/'.$evan->id_brg_msk)?>">Barang Masuk</a></li>
                       <li><a href="<?=base_url('/home/barang_keluar/'.$evan->id_brg_klr)?>">Transaksi</a></li>
                    </ul>
  
                    <li><a><i class="fa fa-desktop"></i></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('/home/nota/'.$evan->id_nota)?>">Barang</a></li>
                      <li><a href="<?=base_url('/home/barang_masuk/'.$evan->id_brg_msk)?>">Barang Masuk</a></li>
                       <li><a href="<?=base_url('/home/barang_keluar/'.$evan->id_brg_klr)?>">Penjualan</a></li>
                    </ul>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Setting</h3>
                <ul class="nav side-menu">
               <li><a href="<?=base_url('/home/user/')?>"><i class="fa fa-users"></i>User</a></li>
                   
                  </li>
                    <li><a href="<?=base_url('/home/karyawan/')?>"><i class="fa fa-user"></i>Karyawan</a></li>
                    </ul>
                  </li>
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url('/home/logout/')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url('images/download(1).jpg')?>" alt=""><?php echo session()->get('username') ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

             
                  </a>
                
                    <li>
                      <a>
                        
                        <span>
                         
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <span class="input-group-btn">  
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <?php } ?>
