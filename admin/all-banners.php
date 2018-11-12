<?php
  require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']<=2){
  get_header();
  get_sidebar();
  get_breadcrumb();
 ?>
  <div class="col-md-12">
  	<div class="panel panel-primary">
          <div class="panel-heading">
              <div class="col-md-9 heading_title">
                  All Banners View
               </div>
               <div class="col-md-3 text-right">
               	<a href="add-banners.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Banner</a>
              </div>
              <div class="clearfix"></div>
          </div>
        <div class="panel-body">
            <table class="table table-responsive table-striped table-hover table_cus">
            		<thead class="table_head">
              		<tr>
                      	<th>Title</th>
                          <th>SubTitle</th>
                          <th>ButtonText</th>
                          <th class="hidden-xs">Button URL</th>
                          <th class="hidden-xs">Banner picture</th>
                          <th>Manage</th>
                      </tr>
              	</thead>
                  <tbody>
                    <?php

                      $sel="SELECT * FROM  banner_part  ORDER BY	banner_id DESC";
                      $SQ=mysqli_query($con,$sel);
                      while ($data=mysqli_fetch_assoc($SQ)) {
                        ?>

                        <tr>
                            <td><?=substr($data['banner_title'],0,15)?>....</td>
                              <td><?=substr($data['banner_subtitle'],0,100)?>......</td>
                              <td><?=substr($data['banner_btntext'],0,5)?>...</td>
                              <td class="hidden-xs"><?=substr($data['banner_btnurl'],0,100)?>...</td>
                              <td class="hidden-xs">
                                <img src="uploadeds/<?=$data['banner_image']?>" alt="" height="50px">
                              </td>
                              <td>
                                <a href="view-banner.php?id=<?=$data['banner_id']?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                  <a href="edit-banner.php?id=<?=$data['banner_id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                  <a href="delete-banner.php?id=<?=$data['banner_id']?>"><i class="fa fa-trash fa-lg"></i></a>
                              </td>
                          </tr>

                        <?php
                      }

                      ?>
                  <!--
                      <tr>
                      	<td>Creative IT</td>
                          <td>qeqeasaq@swewas.yuy</td>
                          <td>+880 8976677876</td>
                          <td class="hidden-xs">Dhanmondi, Bangladesh</td>
                          <td class="hidden-xs">8765432198</td>
                          <td>
                          	<a href="view.html"><i class="fa fa-plus-square fa-lg"></i></a>
                              <a href="edit.html"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                          </td>
                      </tr>
                    -->
                  </tbody>
            </table>
        </div>
        <div class="panel-footer">
          <div class="col-md-4">
          	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
              <a href="#" class="btn btn-sm btn-primary">PDF</a>
              <a href="#" class="btn btn-sm btn-danger">SVG</a>
              <a href="#" class="btn btn-sm btn-success">PRINT</a>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4 text-right">
          	<nav aria-label="Page navigation">
                <ul class="pagination pagina_cus">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
  </div><!--col-md-12 end-->
  <?php
    get_footer();
  }else {
    header('Location:index.php');
  }
   ?>
