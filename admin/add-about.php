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

    $devtitle=htmlentities($_POST['devtitle'],ENT_QUOTES);
    $devsubtitle=htmlentities($_POST['devsubtitle'],ENT_QUOTES);
    $gtitle=htmlentities($_POST['gtitle'],ENT_QUOTES);
    $gsubtitle=htmlentities($_POST['gsubtitle'],ENT_QUOTES);
    $seotitle=htmlentities($_POST['seotitle'],ENT_QUOTES);
    $seosubtitle=htmlentities($_POST['seosubtitle'],ENT_QUOTES);
    $vititle=htmlentities($_POST['vititle'],ENT_QUOTES);
    $visubtitle=htmlentities($_POST['visubtitle'],ENT_QUOTES);
    $autitle=htmlentities($_POST['autitle'],ENT_QUOTES);
    $ausubtitle=htmlentities($_POST['ausubtitle'],ENT_QUOTES);
    $dateis=date('Y-m-d g:i:s A U');
    $weblogo=$_FILES['pic'];
    $weblogoName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($weblogo['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO about_section(about_title ,about_subtitle ,about_webtitle ,about_websubtitle,about_weblogo,about_devtitle,about_devsubtitle,about_gtitle,about_gsubtitle ,about_seotitle,about_seosubtitle,about_vititle,about_visubtitle,about_autitle,about_ausubtitle,about_time) VALUES
    ('$title','$subtitle','$webtitle','$websubtitle','$weblogoName','$devtitle','$devsubtitle','$gtitle','$gsubtitle','$seotitle','$seosubtitle','$vititle','$visubtitle','$autitle','$ausubtitle','$dateis')";
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
