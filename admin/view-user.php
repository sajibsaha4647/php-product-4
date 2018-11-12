<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();

  $id=$_GET['id'];
  $vsel="SELECT * FROM cit_web_dev_1801 NATURAL JOIN cit_web_dev_role WHERE student_id='$id'";
  $vsq=mysqli_query($con,$vsel);
  $vdata=mysqli_fetch_assoc($vsq);
 ?>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Personal Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="col-md-1">
                          </div>
                          <div class="col-md-9">
                          	<table class="table table-hover table-striped table-responsive view_table_cus">
                              <tr>
                                <td></td>
                                  <td></td>
                                  <td><img src="uploadeds/<?=$vdata['student_picture']?>" height="120px"/></td>
                              </tr>
                            	<tr>
                                	<td>Name</td>
                                    <td>:</td>
                                    <td><?=$vdata['student_name']?></td>
                                </tr>
                                <tr>
                                	<td>Email</td>
                                    <td>:</td>
                                    <td><?=$vdata['student_email']?></td>
                                </tr>
                                <tr>
                                	<td>Phone</td>
                                    <td>:</td>
                                  <td><?=$vdata['stuent_phone']?></td>
                                </tr>
                                <tr>
                                	<td>Username</td>
                                    <td>:</td>
                                    <td><?=$vdata['student_username']?></td>
                                </tr>
                                <tr>
                                	<td>User Role</td>
                                    <td>:</td>
                                    <td><?=$vdata['role_name']?></td>
                                </tr>

                                <tr>
                                	<td>Registration Time</td>
                                    <td>:</td>
                                    <td><?=$vdata['user_time']?></td>
                                </tr>
                            </table>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
          <?php
              get_footer();
            }else {
              header('Location:index.php');
            }
           ?>
