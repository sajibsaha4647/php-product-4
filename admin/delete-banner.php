<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();

  $id=$_GET['id'];
  $esel="SELECT * FROM banner_part WHERE banner_id='$id'";
  $SQE=mysqli_query($con,$esel);
  $result=mysqli_fetch_assoc($SQE);

  if(isset($_POST['name'])){
    $update="DELETE FROM banner_part WHERE banner_id='$id'";
    $eresul=mysqli_query($con,$update);
		$einfo=mysqli_fetch_assoc($eresul);
    header("Location:all-banners.php");
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
                             	<a href="all-banners.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banners</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Banner Title</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="title" value="<?=$result['banner_title']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Banner SubTitle</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="subtitle" value="<?=$result['banner_subtitle']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">ButtonText</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="btntext" value="<?=$result['banner_btntext']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Button Url</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="btnurl" value="<?=$result['banner_btnurl']?>" disabled>
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
