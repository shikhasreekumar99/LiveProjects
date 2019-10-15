    
      <header class="main-header">
        <a href="Home.php" class="logo"><b>Admin</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
         <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>-->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
               <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>-->
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <!--<span class="label label-warning">10</span>
                </a>-->
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
               <!--   <span class="label label-danger">9</span>
                </a>-->
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>-->
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
<!--                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
-->                    <p>
                    Admin - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="Home.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />-->
            </div>
            <div class="pull-left info">
              <p>Admin</p>

            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="Home.php">
                <i class="fa fa-dashboard"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="Home.php"><i class="fa fa-circle-o"></i>Home</a></li>
                <li><a href="change_password.php"><i class="fa fa-circle-o"></i> Change Password</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>News</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
              <ul class="treeview-menu">
                  <li><a href="add_news.php"><i class="fa fa-circle-o"></i>Add News</a></li>
                <li><a href="view_news.php"><i class="fa fa-circle-o"></i> Manage News</a></li>
               
              </ul>
            </li>
            <li>
  
                  
          <li class="treeview">
              <a href="#">
                <i class="fa fa-picture-o"></i> <span>Gallery</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_gallery.php"><i class="fa fa-circle-o"></i> Add Gallery</a></li>
                <li><a href="View_gallery.php"><i class="fa fa-circle-o"></i> Manage Gallery</a></li>
              </ul>
            </li>
            
          <li class="treeview">
              <a href="#">
                <i class="fa fa-comments-o"></i> <span>Testimonials</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_testimonals.php"><i class="fa fa-circle-o"></i> Add Testimonials</a></li> 
                 <li>
                <a href="View_testimonals.php"><i class="fa fa-circle-o"></i> Manage Testimonials</a> 
                 
                </li>
              
              </ul>
            </li>
         
            
            
            <li class="treeview">
              <a href="view_health.php">
                <i class="fa fa-leaf"></i> <span>Health Tourism</span>
              </a>
              
            </li>
            
            <li class="treeview">
              <a href="view_video.php">
                <i class="fa fa-leaf"></i> <span>Latest Video</span>
              </a>
              
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fire"></i> <span>Tour Package</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="view_leisure.php"><i class="fa fa-circle-o"></i>Manage Leisure</a></li> 
                
                 <li>
                <a href="view_adventure.php"><i class="fa fa-circle-o"></i> Manage Adventure</a> 
                 
                </li>
              
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-plane"></i> <span>Cute Destinations</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_leisure_dest.php"><i class="fa fa-circle-o"></i> Add Leisure Destinations</a></li> 
                 <li>
                <a href="view_leisure_dest.php"><i class="fa fa-circle-o"></i> Manage Leisure Destinations</a> 
                 
                </li>
              
              
                 <li><a href="add_adventure_dest.php"><i class="fa fa-circle-o"></i> Add Adventure Destinations</a></li> 
                 <li>
                <a href="view_adventure_dest.php"><i class="fa fa-circle-o"></i> Manage Adventure Destinations</a> 
                 
                </li>

              
              </ul>
            </li>
            
            
            
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-plane"></i> <span>Cute Destinations</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Leisure<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="add_leisure_dest.php"><i class="fa fa-circle-o"></i> Add Leisure places</a></li>
                    <li>
                      <a href="view_product_details.php"><i class="fa fa-circle-o"></i> Manage Leisure places <i class="fa fa-angle-left pull-right"></i></a>
                    </li>
                  </ul>
                </li>
                
                
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Adventure <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="add_adventure_dest.php"><i class="fa fa-circle-o"></i> Add Adventure places</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Manage Adventure places <i class="fa fa-angle-left pull-right"></i></a>
                      
                    </li>
                  </ul>
                </li>
                
                
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>-->
            
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-file-video-o"></i> <span>Cute DESTINATIONS</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="add_adventure.php"><i class="fa fa-circle-o"></i>Adventure</a></li> 
                 <li>
                <a href="add_leisure_cute.php"><i class="fa fa-circle-o"></i> Leisure</a> 
                 
                </li>
              
              </ul>
            </li>-->
      
         </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
