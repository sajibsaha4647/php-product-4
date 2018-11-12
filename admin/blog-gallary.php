<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $title=htmlentities($_POST['title'],ENT_QUOTES);
    $time=htmlentities($_POST['time'],ENT_QUOTES);
    $subtitle=htmlentities($_POST['subtitle'],ENT_QUOTES);
    $admin=htmlentities($_POST['admin'],ENT_QUOTES);
    $button=htmlentities(md5($_POST['button']),ENT_QUOTES);
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO blog_gallary(bgallary_pic,bgallary_admin,blog_time,bgallary_subtitle,bgallary_button,blog_title) VALUES
    ('$imageName','$admin','$time','$subtitle','$button','$title')";
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
                    Add Blog Gallary Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Post Time</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="time">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Admin</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="admin">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">More Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="button">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Picture</label>
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
