<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();

  $id=$_GET['id'];
  $vsel="SELECT * FROM user_contacts  WHERE user_id='$id'";
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
                             	<a href="all-message.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Message</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="col-md-1">
                          </div>
                          <div class="col-md-9">
                          	<table class="table table-hover table-striped table-responsive view_table_cus">
                            	<tr>
                                	<td>Name</td>
                                    <td>:</td>
                                    <td><?=$vdata['user_name']?></td>
                                </tr>
                                <tr>
                                	<td>Email</td>
                                    <td>:</td>
                                    <td><?=$vdata['user_email']?></td>
                                </tr>
                                <tr>
                                	<td>Subject</td>
                                    <td>:</td>
                                  <td><?=$vdata['user_subject']?></td>
                                </tr>
                                <tr>
                                	<td>Message</td>
                                    <td>:</td>
                                    <td><?=$vdata['user_message']?></td>
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
