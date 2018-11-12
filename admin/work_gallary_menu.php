<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $menu=htmlentities($_POST['menu'],ENT_QUOTES);

   $insert="INSERT INTO work_gallary_menu (menu_name) VALUES
    ('$menu')";
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
                    Add Gallary Menu Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="add-right-menu.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Menu Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="menu">
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
