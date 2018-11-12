<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $menu=$_POST['btitle'];
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO work_gallary(gallary_title,gallary_subtitle,menu_id,gallary_picture) VALUES
    ('$title','$subtitle','$menu','$imageName')";
   if(mysqli_query($con,$insert)){
     move_uploaded_file($image['tmp_name'],'uploadeds/'.$imageName);
     echo "send your message successfuly";
   }else {
     echo "did not send your Message";
   }
  }
 ?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Menu_Id</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="btitle">
                </div>
              </div>
            <!--
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Select</label>
                <div class="col-sm-4">
                  <select class="form-control select_cus" name="role">
                      <option value="">Select Role</option>
                      <php
                          $sel="SELECT * FROM cit_web_dev_role";
                          $QS=mysqli_query($con,$sel);
                          while ($data=mysqli_fetch_assoc($QS)) {
                            ?>
                              <option value="<=$data['role_id']?>"><=$data['role_name']?></option>
                            <php
                          }
                        ?>
                  </select>
                </div>
              </div>
            -->
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Upload</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">REGISTRATION</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
    <?php
        get_footer();
      }else {
        header('Location:index.php');
      }
      ?>
