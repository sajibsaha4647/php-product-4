

<div class="container-fluid content_full">
    <div class="row">
        <div class="col-md-2 sidebar pd0">
          <div class="side_user">
              <img class="img-responsive" src="uploadeds/<?=$_SESSION['Pic']?>"/>
                <h4><?=$_SESSION['name']?></h4>
                <span><i class="fa fa-circle"></i> Online</span>
            </div>
            <h2>Admin <i class="fa fa-paperclip"></i> Panel</h2>
            <ul>
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

          <li>
             	<ul>
						       <li>
							         <div class="dropdown">
								         <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									           <i class="fa fa-cogs"></i> Menu <i class="fa fa-caret-down"></i>
								          </button>
								          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									              <a class="dropdown-item" href="add-menu.php"> Menu Left </a>
                				        <a class="dropdown-item" href="add-right-menu.php"> Menu Right </a>
								           </div>
							         </div>
						         </li>
                  </ul>

              </li>
                <?php  if($_SESSION['role']<=2){?>
                        <li><a href="add-user.php"><i class="fa fa-user-circle"></i> User</a></li>
                <?php  }?>
                    <li><a href="add-banners.php"><i class="fa fa-map"></i>Banner</a></li>

              <li>
                	<ul>
							        <li>
							             <div class="dropdown">
								                <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                									<i class="fa fa-image"></i> Gallary <i class="fa fa-caret-down"></i>
                								  </button>
                								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                									    <a class="dropdown-item" href="work_heading.php"> Work Heading </a>
                				               <a class="dropdown-item" href="work_gallary_menu.php"> Work Gallary Menu </a>
									                     <a class="dropdown-item" href="work_gallary.php"> Work Gallary </a>
								                   </div>
								              </div>
							          </li>
          	      </ul>
            </li>
          <li>
            <ul>
							<li>

							<div class="dropdown">
								  <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-cogs"></i> Manage Website <i class="fa fa-caret-down"></i>
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      									<a class="dropdown-item" href="add-about.php"><i class="fa fa-home"></i>About</a>
                      	<a class="dropdown-item" href="add-counter.php"><i class="fa fa-home"></i>Counter</a>
      									<a class="dropdown-item" href="social_media.php"><i class="fa fa-cloud"></i>Social Media</a>
                      	<a class="dropdown-item" href="video-add.php"><i class="fa fa-cloud"></i>Video</a>
      									<a class="dropdown-item" href="#"><i class="fa fa-wpforms"></i>Contact Address</a>
								  </div>
								</div>
							</li>
            </ul>
              </li>
              <li>
                  <ul>
                       <li>
                           <div class="dropdown">
                             <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fa fa-snowflake-o"></i> Our Team <i class="fa fa-caret-down"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="team_heading"> Team Heading </a>
                                    <a class="dropdown-item" href="team-member-bio.php"> Team Member Info</a>
                               </div>
                           </div>
                         </li>
                      </ul>

                  </li>
                    <li><a href="all-message.php"><i class="fa fa-comments"></i>Visitor Message</a></li>
                    <li><a href="all-message.php"><i class="fa fa-building"></i>Partners</a></li>
                    <li><a href="../index.php"><i class="fa fa-globe"></i>Live Site</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div><!--sidebar end-->
