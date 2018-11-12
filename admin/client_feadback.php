<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){

    $title=htmlentities($_POST['title'],ENT_QUOTES);
    $sms=htmlentities($_POST['sms'],ENT_QUOTES);
    $name=htmlentities($_POST['name'],ENT_QUOTES);
   $insert="INSERT INTO feedback (client_title,client_subtitle,client_name) VALUES ('$title','$sms','$name')";
   if(mysqli_query($con,$insert)){

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
                <label for="" class="col-sm-3 control-label">Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client SMS</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="sms">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="name">
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
