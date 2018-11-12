<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $designation=htmlentities($_POST['designation'],ENT_QUOTES);
    $commend=htmlentities($_POST['commend'],ENT_QUOTES);
    $fb=htmlentities($_POST['fb'],ENT_QUOTES);
    $fburl=htmlentities(md5($_POST['fburl']),ENT_QUOTES);
    $twit=htmlentities($_POST['twit'],ENT_QUOTES);
    $twiturl=htmlentities($_POST['twiturl'],ENT_QUOTES);
    $linkin=htmlentities(md5($_POST['linkin']),ENT_QUOTES);
    $linkinurl=htmlentities(md5($_POST['linkinurl']),ENT_QUOTES);
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);
   $insert="INSERT INTO team_member_boi(teammember_name,teammember_designation,teammember_text,teammember_fb,teammember_fburl ,teammember_twitter,teammember_twiurl,teammember_linkind,teammember_linkindurl,teammember_picture) VALUES
    ('$name','$designation','$commend','$fb','$fburl','$twit','$twiturl','$linkin','$linkinurl','$imageName')";
   if(mysqli_query($con,$insert)){
     move_uploaded_file($image['tmp_name'],'uploadeds/'.$imageName);
     echo "send your message successfuly";
   }else {
     echo "message did not sent";
   }
  }
 ?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Team Member Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Team-Member-Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Team-Member_Designation</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="designation">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Team-Member_Commendation</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="commend">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_Fb</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fb">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_FbUrl</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="fburl">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_Twit</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="twit">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_TwitUrl</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="twiturl">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_Linkin</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="linkin">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Teammember_LinkinUrl</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control" name="linkinurl">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Member Picture</label>
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
