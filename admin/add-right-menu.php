<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $menu=htmlentities($_POST['menu'],ENT_QUOTES);
    $link=htmlentities($_POST['link'],ENT_QUOTES);
    $dateis=date('Y-m-d g:i:s A U');

   $insert="INSERT INTO menu_left(menuleft_name ,menuleft_link ,menuleft_time) VALUES
    ('$menu','$link','$dateis')";
   if(mysqli_query($con,$insert)){
     echo "send your message successfuly";
   }
  }
 ?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Right Menu Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Menu Information</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Right Menu Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="menu">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Right Menu Link</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="link">
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
