<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){

    $video=$_FILES['video'];
    $videoName="video-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($video['name'],PATHINFO_EXTENSION);
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO  video_section (video_name,video_background) VALUES ('$videoName','$imageName')";

   if(mysqli_query($con,$insert)){
     move_uploaded_file($video['tmp_name'],'uploadeds/'.$videoName);
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
                    Add Video
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-banners.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banners</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video</label>
                <div class="col-sm-8">
                  <input type="file" name="video">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video Background</label>
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
