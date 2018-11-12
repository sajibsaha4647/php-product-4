<?php
require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
  if(!empty($_POST)){
    $title=htmlentities($_POST['title'],ENT_QUOTES);
    $time=htmlentities($_POST['time'],ENT_QUOTES);
    $currency=htmlentities($_POST['currency'],ENT_QUOTES);
    $text1=htmlentities($_POST['text1'],ENT_QUOTES);
    $text2=htmlentities($_POST['text2'],ENT_QUOTES);
    $text3=htmlentities($_POST['text3'],ENT_QUOTES);
    $text4=htmlentities($_POST['text4'],ENT_QUOTES);
    $text5=htmlentities($_POST['text5'],ENT_QUOTES);
    $bottom=htmlentities($_POST['bottom'],ENT_QUOTES);

   $insert="INSERT INTO plans_graph(graph_title,graph_$,graph_time,graph_text1,graph_text2,graph_text3,graph_text4,graph_text5,graph_bottom) VALUES
    ('$title','$currency','$time','$text1','$text2','$text3','$text4','$text5','$bottom')";
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
                    Add Plan Information
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="#" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Time</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="time">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan currency</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="currency">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Text1</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="text1">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Text2</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="text2">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Text3</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="text3">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Text4</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="text4">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Text5</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="text5">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Plan Bottom</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="bottom">
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
