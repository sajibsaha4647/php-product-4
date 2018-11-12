<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $email=htmlentities($_POST['email'],ENT_QUOTES);
    $phone=htmlentities($_POST['phone'],ENT_QUOTES);
    $user=htmlentities($_POST['user'],ENT_QUOTES);
    $pw=htmlentities(md5($_POST['password']),ENT_QUOTES);
    $dateis=date('Y-m-d g:i:s A U');
    $gender=$_POST['gender'];
    $role=$_POST['role'];
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO cit_web_dev_1801(student_name,student_email,stuent_phone,student_username,student_password,role_id,student_picture,user_time) VALUES
    ('$name','$email','$phone','$user','$pw','$role','$imageName','$dateis')";
   if(mysqli_query($con,$insert)){
     move_uploaded_file($image['tmp_name'],'uploadeds/'.$imageName);
     echo "send your message successfuly";
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
                <label for="" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Phone</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control"  name="email">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="user">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Select</label>
                <div class="col-sm-4">
                  <select class="form-control select_cus" name="role">
                      <option value="">Select Role</option>
                      <?php
                          $sel="SELECT * FROM cit_web_dev_role";
                          $QS=mysqli_query($con,$sel);
                          while ($data=mysqli_fetch_assoc($QS)) {
                            ?>
                              <option value="<?=$data['role_id']?>"><?=$data['role_name']?></option>
                            <?php
                          }
                        ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Radio</label>
                <div class="col-sm-8">
                  <div class="radio">
                      <label>
                        <input type="radio" name="gender" value="Male">
                        Male
                      </label>
                      <label>
                        <input type="radio" name="gender" value="Female">
                        Female
                      </label>
                    </div>
                </div>
              </div>
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
