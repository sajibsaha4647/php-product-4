<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $title=htmlentities($_POST['title'],ENT_QUOTES);
    $subtitle=htmlentities($_POST['subtitle'],ENT_QUOTES);
    $btntext=htmlentities($_POST['btntext'],ENT_QUOTES);
    $btnurl=htmlentities($_POST['btnurl'],ENT_QUOTES);
    $dateis=date('Y-m-d g:i:s A U');
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO banner_part (banner_title,banner_subtitle,banner_btntext,banner_btnurl,banner_image,bannerset_time) VALUES
    ('$title','$subtitle','$btntext','$btnurl','$imageName','$dateis')";
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
                    Add Banners Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-banners.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banners</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">BannerTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">BannerSubtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Button Text</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="btntext">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Button Url</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="btnurl">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Banner Images</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">SUBMIT</button>
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
