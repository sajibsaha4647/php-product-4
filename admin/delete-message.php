<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();

  $id=$_GET['id'];
  $esel="SELECT * FROM user_contacts  WHERE user_id='$id'";
  $SQE=mysqli_query($con,$esel);
  $result=mysqli_fetch_assoc($SQE);

  if(isset($_POST['name'])){
    $update="DELETE FROM user_contacts WHERE user_id='$id'";
    $eresul=mysqli_query($con,$update);
		$einfo=mysqli_fetch_assoc($eresul);
    header("Location:all-user.php");
  }
 ?>
                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="POST">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Delete Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="all-message.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Message</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="name" value="<?=$result['user_name']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" name="email" value="<?=$result['user_email']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Subject</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="phone" value="<?=$result['user_subject']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Message</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="user" value="<?=$result['user_message']?>">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">DELETE</button>
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
