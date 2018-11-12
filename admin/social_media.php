<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $facebook=htmlentities($_POST['facebook'],ENT_QUOTES);
    $twitter=htmlentities($_POST['twitter'],ENT_QUOTES);
    $google=htmlentities($_POST['google'],ENT_QUOTES);
    $linkedin=htmlentities($_POST['linkedin'],ENT_QUOTES);
    $behance=htmlentities(md5($_POST['behance']),ENT_QUOTES);
   $insert="INSERT INTO sm_icon(sm_fb,sm_twiter,sm_linkind,sm_google+,sm_behance) VALUES ('$facebook','$twitter','$linkedin','$google','$behance')";
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
                    Add Social Media Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Facebook</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="facebook">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Twitter</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="twitter">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Google+</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="google+">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Linkedin</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="linkedin">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Behance</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="behance">
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
