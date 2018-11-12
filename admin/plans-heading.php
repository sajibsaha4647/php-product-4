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
    $webtitle=htmlentities($_POST['webtitle'],ENT_QUOTES);
    $websubtitle=htmlentities($_POST['wsubtitle'],ENT_QUOTES);

   $insert="INSERT INTO about_section(about_title ,about_subtitle ) VALUES ('$title','$subtitle',)";
   if(mysqli_query($con,$insert)){
     move_uploaded_file($weblogo['tmp_name'],'uploadeds/'.$weblogoName);
     echo "send your message successfuly";
   }
  }
 ?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add About Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Web Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="webtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Web SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="wsubtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Web Logo</label>
                <div class="col-sm-8">
                  <input type="file" name="pic">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Web-development Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="devtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Web-development SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="devsubtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Graphics Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="gtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Graphics SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="gsubtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Seo Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="seotitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Seo SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="seosubtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video Editing Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="vititle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Video Editing SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="visubtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Autocate Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="autitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Autocate SubTitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="ausubtitle">
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
