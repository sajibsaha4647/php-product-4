<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $employee=htmlentities($_POST['employee'],ENT_QUOTES);
    $emtitle=htmlentities($_POST['emtitle'],ENT_QUOTES);
    $project=htmlentities($_POST['project'],ENT_QUOTES);
    $protitle=htmlentities($_POST['protitle'],ENT_QUOTES);
    $team=htmlentities($_POST['team'],ENT_QUOTES);
    $teamtitle=htmlentities($_POST['teamtitle'],ENT_QUOTES);
    $client=htmlentities($_POST['client'],ENT_QUOTES);
    $cltitle=htmlentities($_POST['cltitle'],ENT_QUOTES);
    $dateis=date('Y-m-d g:i:s A U');

   $insert="INSERT INTO counter_section (total_employee,employee_title,total_project,project_title,total_team,team_title,total_client,client_title) VALUES
    ('$employee','$emtitle','$project','$protitle','$team','$teamtitle','$client','$cltitle')";
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
                    Add Counter Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-banners.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Total Employee</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="employee">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Employee Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="emtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Total Project</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="project">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Project Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="protitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Total Team</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="team">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Team Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="teamtitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Total Client</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="client">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Client Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="cltitle">
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
