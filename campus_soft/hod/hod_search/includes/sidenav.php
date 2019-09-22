<!-- /side nav -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                           <!-- <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                           /input-group 
                        </li>-->
                        <li>
                            <a href="dash_home.php"><i class="fa fa-user fa-fw"></i>PRINCIPAL</a>
                                <?php

                       // $r=mysql_query("select name from faculty_details where fid='$fid'");
                        //while($d=mysql_fetch_array($r))
                        //{
                          //  $fname=$d["name"];
                           
                        //}
                        //echo $fname;
                        ?>       
                            </a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-search fa-fw"></i>Student Search<span class="fa arrow"</span></a>
                           <ul class="nav nav-second-level">
                                <li>
                                    <a href="pplsingle.php">Personal Details</a>
                                </li>
                                <li>
                                    <a href="morris.html">Attendance Details</a>
                                </li>
								<li>
                                    <a href="morris.html">Sessional Marks</a>
                                </li>
                            </ul>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-search fa-fw"></i> Class Search<span class="fa arrow"</span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="\v2\Principal\classsearch\search-form.php">Class Details</a>
                                </li>
                                <li>
                                    <a href="morris.html">Attendence Details</a>
                                </li>
								<li>
                                    <a href="morris.html">Sessional Marks</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-search fa-fw"></i>Faculty Search<span class="fa arrow"</span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="pplfacultysearch.php">Faculty Details</a>
                                </li>
                                
                            </ul>
                        </li>
						 <li>
                            <a href="cc.php"><i class="fa fa-bar-chart-o fa-fw"></i>Grievances</a>
                        </li>
						 <li>
                            <a href="chagepass.php"><i class="fa fa-bar-chart-o fa-fw"></i>Notifications</a>
                        </li>
						<li>
							<a href="chagepass.php"><i class="fa fa-bar-chart-o fa-fw"></i>Change Password</a>
	 				    </li>
						 <li>
                            <a href="logout.php"><i class="fa fa-bar-chart-o fa-fw"></i> Logout</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>