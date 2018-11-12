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

  if(isset($_POST['title'])){
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $btntext=$_POST['btntext'];
    $btnurl=$_POST['btnurl'];
    $image=$_FILES['pic'];
    $imageName="user-".time().rand(100000,1000000).".".rand(10000,100000).".".pathinfo($image['name'],PATHINFO_EXTENSION);

    $update="UPDATE banner_part SET banner_title='$title',banner_subtitle='$subtitle',banner_btntext='$btntext',banner_btnurl='$btnurl',banner_image='$imageName' WHERE banner_id=$id";
	   if($eresul=mysqli_query($con,$update)){
       move_uploaded_file($image['tmp_name'],'uploadeds/'.$imageName);
         header("Location:all-banners.php");
     }

}
 ?>
                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Update Information
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
                            <label for="" class="col-sm-3 control-label">Button Text</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="btntext" value="<?=$result['banner_btntext']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Button URL</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="btnurl" value="<?=$result['banner_btnurl']?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Banner</label>
                            <div class="col-sm-8">
                                <td><img src="uploadeds/<?=$result['banner_image']?>" height="120px"/></td>
                              <input type="file" name="pic">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">UPDATE</button>
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
