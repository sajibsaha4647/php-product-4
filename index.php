<?php
    require_once('config.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zhakkash</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/venobox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <div class="back_top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--    navbar start -->
    <nav class="navbar navbar-expand-lg navbar-expand-md menu_area" id="navbar-example">
        <div class="container">
            <a class="navbar-brand res_logo d-lg-none" href="#"><img src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#omonu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars togbut"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="omonu">
                <ul class="navbar-nav custom_nav mr-auto nav nav-pills">
                  <?php
                      $sel="SELECT * FROM menu_section";
                      $row=mysqli_query($con,$sel);
                      while ($mresult=mysqli_fetch_assoc($row)) {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?=$mresult['menu_link']?>"><?=$mresult['menu_name']?></a>
                        </li>
                        <?php
                      }
                   ?>
                     </ul>
                  <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#work">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Servise">searvise</a>
                    </li>
                  -->


                <div class="logo">
                    <a class="navbar-brand menu_logo d-lg-block" href="#"><img src="images/logo.png" alt=""></a>
                </div>

                <ul class="navbar-nav custom_nav ml-auto adjust">
                  <?php
                      $sel="SELECT * FROM menu_left";
                      $row=mysqli_query($con,$sel);
                      while ($menuresult=mysqli_fetch_assoc($row)) {
                        ?>

                        <li class="nav-item">
                <a class="nav-link" href="<?=$menuresult['menuleft_link']?>"><?=$menuresult['menuleft_name']?></a>
                        </li>
                        <?php
                      }
                   ?>
                   <!--
                    <li class="nav-item ">
                        <a class="nav-link" href="#team">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">price</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#blog">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact</a>
                    </li>
                  -->
                </ul>
            </div>
        </div>
    </nav>
    <!--    navbar end-->

    <!--slider start-->

    <section class="slider_area" id="home">
        <i class="fa fa-long-arrow-right prevbtn"></i>
        <i class="fa fa-long-arrow-left nxtbtn"></i>
        <div class="slick_slider">
          <?php
              $sel="SELECT * FROM banner_part ORDER BY 	banner_id DESC LIMIT 0,3";
              $SQ=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($SQ)) {
                ?>
                <div class="slider fix_area" style="background: url('admin/uploadeds/<?=$data['banner_image']?>')no-repeat">
                    <div class="container text-center slider_caption">
                        <h2><?=$data['banner_title']?></h2>
                        <p><?=$data['banner_subtitle']?></p>
                        <a href="<?=$data['banner_btnurl']?>"><?=$data['banner_btntext']?></a>
                        <a href="#">BUY NOW</a>
                    </div>
                </div>
                <?php
              }
           ?>
        </div>
    </section>

    <!--slider end-->

    <!--about part-->
    <?php
        $about="SELECT * FROM about_section";
        $asq=mysqli_query($con,$about);
        $adata=mysqli_fetch_assoc($asq);
     ?>
    <section class="about_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="about_heading">
                        <h3><?=$adata['about_title']?></h3>
                        <p><?=$adata['about_subtitle']?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_left text-right m-auto">
                        <h3><?=$adata['about_webtitle']?><i class="fa fa-globe"></i></h3>
                        <p><?=$adata['about_websubtitle']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_right text-left m-auto">
                        <h3><i class="fa fa-diamond"></i><?=$adata['about_devtitle']?></h3>
                        <p><?=$adata['about_devsubtitle']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_left border_shep text-right m-auto">
                        <h3><?=$adata['about_gtitle']?><i class="fa fa-diamond"></i></h3>
                        <p><?=$adata['about_gsubtitle']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_right text-left m-auto">
                        <h3><i class="fa fa-diamond"></i><?=$adata['about_seotitle']?></h3>
                        <p><?=$adata['about_seosubtitle']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_left text-right m-auto">
                        <h3><?=$adata['about_vititle']?><i class="fa fa-globe"></i></h3>
                        <p><?=$adata['about_visubtitle']?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="about_in_right text-left m-auto">
                        <h3><i class="fa fa-diamond"></i><?=$adata['about_autitle']?></h3>
                        <p><?=$adata['about_ausubtitle']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about part end-->


    <!--countar part-->
    <section class="counter_part text-center" id="">
        <div class="container">
          <?php
                $counter="SELECT * FROM counter_section";
                $csql=mysqli_query($con,$counter);
                $cdata=mysqli_fetch_assoc($csql);
            ?>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="counter_inner">
                        <div class="c_ico">
                            <a href="#"><i class="fa fa-free-code-camp"></i></a>
                        </div>
                        <span class="count"><?=$cdata['total_employee']?></span>
                        <h4><?=$cdata['employee_title']?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="counter_inner">
                        <div class="c_ico">
                            <a href="#"><i class="fa fa-diamond"></i></a>
                        </div>
                        <span class="count"><?=$cdata['total_project']?></span>
                        <h4><?=$cdata['project_title']?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="counter_inner">
                        <div class="c_ico">
                            <a href="#"><i class="fa fa-reddit-alien"></i></a>
                        </div>
                        <span class="count"><?=$cdata['total_team']?></span>
                        <h4><?=$cdata['team_title']?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="counter_inner">
                        <div class="c_ico">
                            <a href="#"><i class="fa fa-users"></i></a>
                        </div>
                        <span class="count"><?=$cdata['total_client']?></span>
                        <h4><?=$cdata['client_title']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--countar part end-->

    <!--filterize area-->
    <section class="filteriz" id="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="about_heading">
                      <?php
                          $whselect="SELECT * FROM work_heading";
                          $whresult=mysqli_query($con,$whselect);
                          $whdata=mysqli_fetch_assoc($whresult);
                       ?>
                        <h3><?=$whdata['heading_title']?></h3>
                        <p><?=$whdata['heading_subtitle']?></p>
                    </div>
                </div>
            </div>

            <div class="row mx-0">
                <div class="col-lg-10 px-0 text-center">
                    <ul class="filter_menu">
                      <li class="active" data-filter="all">All</li>
                      <?php
                          $select="SELECT * FROM work_gallary_menu";
                          $mresult=mysqli_query($con,$select);
                          while ($datagv=mysqli_fetch_assoc($mresult)) {
                            ?>
                              <li data-filter="<?=$datagv['menu_id']?>"><?=$datagv['menu_name']?></li>
                            <?php
                          }
                       ?>
                    <!--
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">webdesign</li>
                        <li data-filter="2">graphics</li>
                        <li data-filter="3">develop</li>
                        <li data-filter="4">apps</li>
                        <li data-filter="5">photos</li>
                    -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mx-0 work_part filtr-container">
          <?php
              $selecti="SELECT * FROM  work_gallary ORDER BY 	gallary_id DESC LIMIT 0,8";
              $result=mysqli_query($con,$selecti);
              while ($rdata=mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="<?=$rdata['menu_id']?>">
                    <img src="admin/uploadeds/<?=$rdata['gallary_picture']?>" class="img-fluid" alt="">
                    <div class="overlay">
                        <div class="over_cap">
                            <h3><?=$rdata['gallary_title']?></h3>
                            <span><?=$rdata['gallary_subtitle']?></span>
                            <div class="over_butt">
                                <a class="venobox" href="admin/uploadeds/<?=$rdata['gallary_picture']?>"><i class="fa fa-eye"></i></a>
                                <a href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
              }
           ?>

          <!--
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="1">
                <img src="images/work-3.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-3.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="4">
                <img src="images/work-8.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-8.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="4">
                <img src="images/work-8.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-8.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="2">
                <img src="images/work-7.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-7.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="2">
                <img src="images/work-4.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-4.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="3">
                <img src="images/work-6.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-6.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  px-0 filtr-item" data-category="1">
                <img src="images/work-2.jpg" class="img-fluid" alt="">
                <div class="overlay">
                    <div class="over_cap">
                        <h3>My Project title</h3>
                        <span>Web Design</span>
                        <div class="over_butt">
                            <a class="venobox" href="images/work-2.jpg"><i class="fa fa-eye"></i></a>
                            <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
   -->
        </div>
    </section>
    <!--filterize area end-->

    <!--    srevise area start-->
    <section class="servise_area" id="Servise">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="about_heading">
                      <?php
                          $sselect="SELECT * FROM service_heading";
                          $sresult=mysqli_query($con,$sselect);
                          $sdata=mysqli_fetch_assoc($sresult);
                       ?>
                        <h3><?=$sdata['ser_heading_title']?></h3>
                        <p><?=$sdata['ser_heading_subtitle']?></p>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="row servise_inner text-center">
                      <?php

                          $sql="SELECT * FROM service_item";
                          $results=mysqli_query($con,$sql);
                          while ($datas=mysqli_fetch_assoc($results)) {
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                                <div class="servise_item">
                                    <i class="<?=$datas['service_icon']?>"></i>
                                    <h3><?=$datas['service_title']?></h3>
                                    <p><?=$datas['service_subtitle']?></p>
                                </div>
                            </div>
                            <?php
                          }

                       ?>
                    <!--
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-diamond"></i>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-database"></i>
                                <h3>Web Hosting</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-lightbulb-o"></i>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-code"></i>
                                <h3>Web Development</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-cubes"></i>
                                <h3>Web Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 tlb">
                            <div class="servise_item">
                                <i class="fa fa-snowflake-o"></i>
                                <h3>Web Graphics</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim, distinctio eveniet laboriosam dolores sapiente repudiandae earum eius praesentium reprehenderit.</p>
                            </div>
                        </div>
                      -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--    srevise area end-->

    <!--    skills area-->
    <section class="skill">
        <div class="row mx-0">
            <div class="col-lg-6 col-md-6 col-sm-12 rfil">
                <div class="skill_area_left">
                  <?php
                      $selct="SELECT * FROM skill_text";
                      $result=mysqli_query($con,$selct);
                      $data=mysqli_fetch_assoc($result);
                   ?>
                    <h2><?=$data['skill_title']?></h2>
                    <p><?=$data['skill_subtitle']?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 lfil">
                <div class="skill_area_right">

                    <ul class="skills-bar-container">

                        <?php
                              $progess="SELECT * FROM  skill_progressbar";
                              $result=mysqli_query($con,$progess);
                              while ($datap=mysqli_fetch_assoc($result)) {
                                ?>


                                <?php
                              }
                          ?>
                          <li>
                              <div class="progressbar-title">
                                  <h3></h3>
                                  <span class="percent" id="html-pourcent"></span>
                              </div>
                              <div class="bar-container">
                                  <span class="progressbar progressred" id="progress-html"></span>
                              </div>
                          </li>
                        <li>
                            <div class="progressbar-title">
                                <h3>WEB DESIGN</h3>
                                <span class="percent" id="html-pourcent"></span>
                            </div>
                            <div class="bar-container">
                                <span class="progressbar progressred" id="progress-html"></span>
                            </div>
                        </li>
                        <li>
                            <div class="progressbar-title">
                                <h3>WEB DEVELOPMENT</h3>
                                <span class="percent" id="css-pourcent"></span>
                            </div>
                            <div class="bar-container">
                                <span class="progressbar progressblue" id="progress-css"></span>
                            </div>
                        </li>

                        <li>
                            <div class="progressbar-title">
                                <h3>GRAPHICS DESIGN</h3>
                                <span class="percent" id="javascript-pourcent"></span>
                            </div>
                            <div class="bar-container">
                                <span class="progressbar progresspurple" id="progress-javascript"></span>
                            </div>
                        </li>

                        <li>
                            <div class="progressbar-title">
                                <h3>MANAGEMENT</h3>
                                <span class="percent" id="php-pourcent"></span>
                            </div>
                            <div class="bar-container">
                                <span class="progressbar progressorange" id="progress-php"></span>
                            </div>
                        </li>
               -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--    skills area end-->

    <!--    team area-->
    <section class="team_area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-12 text-center m-auto">
                    <div class="about_heading">
                      <?php
                          $selectth="SELECT * FROM team_heading";
                          $resultth=mysqli_query($con,$selectth);
                          $datath=mysqli_fetch_assoc($resultth);
                       ?>
                        <h3><?=$datath['team_title']?></h3>
                        <p><?=$datath['team_subtitle']?></p>
                    </div>
                </div>
            </div>
            <div class="row team_member">
              <?php
                  $selecttp="SELECT * FROM team_member_boi";
                  $resulttp=mysqli_query($con,$selecttp);
                  while ($datatp=mysqli_fetch_assoc($resulttp)) {
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="team_inner">
                            <img src="admin/uploadeds/<?=$datatp['teammember_picture']?>" alt="">
                        </div>
                    </div>
                    <?php
                  }
               ?>
              <!--
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="team_inner">
                        <img src="images/team_1.jpg" alt="">
                    </div>
                </div>
              -->
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-lg-10 team_mess ">
                   <?php
                      $selecttp="SELECT * FROM team_member_boi";
                      $tresult=mysqli_query($con,$selecttp);
                      while ($tdata=mysqli_fetch_assoc($tresult)) {
                        ?>
                        <div class="about_team_item">
                            <h3><?=$tdata['teammember_name']?></h3>
                            <span><?=$tdata['teammember_designation']?></span>
                            <p><?=$tdata['teammember_text']?></p>
                            <a href="<?=$tdata['teammember_fburl']?>"><i class="<?=$tdata['teammember_fb']?>"></i></a>
                            <a href="<?=$tdata['teammember_twiurl']?>"><i class="<?=$tdata['teammember_twitter']?>"></i></a>
                            <a href="<?=$tdata['teammember_linkindurl']?>"><i class="<?=$tdata['teammember_linkind']?>"></i></a>
                        </div>

                        <?php
                      }
                    ?>

                <!--
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex? Quidem possimus, sint id. Optio!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex? Quidem possimus, sint id. Optio!</p>
						<a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </div>
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex?</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex?</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex?</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex?</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="about_team_item">
                        <h3>john de</h3>
                        <span>Web Designer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio quibusdam laudantium neque minus assumenda molestias expedita libero rerum labore, cum quia facere voluptates harum ex?</p>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                 -->
                </div>
            </div>
        </div>
    </section>
    <!--    team area end-->

    <!--    feedback area-->
    <section class="feedback_area">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="feedback_slick">

                          <?php
                              $selectf="SELECT * FROM feedback";
                              $resultf=mysqli_query($con,$selectf);
                              while ($dataf=mysqli_fetch_assoc($resultf)) {
                                ?>

                                <div class="feed_con">
                                  <h3><?=$dataf['client_title']?></h3>
                                  <p><?=$dataf['client_subtitle']?></p>
                                  <h5><?=$dataf['client_name']?>,<span>Client</span></h5>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>

                                <?php
                              }

                           ?>
                        <!--
                        <div class="feed_con">
                            <h3>feedback</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
                            <h5>Smith,<span>Client</span></h5>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                      -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    feedback area end-->

    <!--    price plane-->
    <section class="price_area" id="price">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 text-center m-auto">
                    <div class="about_heading">
                        <h3>Our plans</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                    $selctp="SELECT * FROM plans_graph";
                    $plan=mysqli_query($con,$selctp);
                    while ($datap=mysqli_fetch_assoc($plan)) {
                      ?>
                      <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                          <div class="price_table">
                              <h2><?=$datap['graph_title']?></h2>
                              <h3><?=$datap['graph_$']?><span></span><?=$datap['graph_time']?></h3>
                              <p><?=$datap['graph_text1']?></p>
                              <p><?=$datap['graph_text2']?></p>
                              <p><?=$datap['graph_text3']?></p>
                              <p><?=$datap['graph_text4']?></p>
                              <p><?=$datap['graph_text5']?></p>
                              <a href="#"><?=$datap['graph_bottom']?></a>
                          </div>
                      </div>
                      <?php
                    }
               ?>
               <!--
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="price_table">
                        <h2>STANDARed</h2>
                        <h3>$ 10 / <span>Per Month</span></h3>
                        <p>10 GB Disk Space</p>
                        <p>100 GB Monthly Bandwith</p>
                        <p>30 Email Accounts</p>
                        <p>Unlimited Subdomains</p>
                        <p>24/7 Support</p>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="price_table">
                        <h2>STANDARed</h2>
                        <h3>$ 10 / <span>Per Month</span></h3>
                        <p>10 GB Disk Space</p>
                        <p>100 GB Monthly Bandwith</p>
                        <p>30 Email Accounts</p>
                        <p>Unlimited Subdomains</p>
                        <p>24/7 Support</p>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="price_table">
                        <h2>STANDARed</h2>
                        <h3>$ 10 / <span>Per Month</span></h3>
                        <p>10 GB Disk Space</p>
                        <p>100 GB Monthly Bandwith</p>
                        <p>30 Email Accounts</p>
                        <p>Unlimited Subdomains</p>
                        <p>24/7 Support</p>
                        <a href="#">buy now</a>
                    </div>
                </div>
              -->
            </div>
        </div>
    </section>
    <!--    price plane end-->

    <!--video ppart-->
    <section class="video_part" id="video_part">
        <div class="row mx-0">
            <div class="col-lg-12 text-center">
                <div class="cideo_link">
                    <i class="fa fa-youtube-play" data-toggle="modal" data-target=".bd-example-modal-lg"></i>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body video_modal ">
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/ZSaMhZBSxH8"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--video ppart end-->


    <!--    blog area-->
    <section class="blog_area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="about_heading">
                        <h3>Our blog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
                    </div>
                </div>
            </div>
            <div class="row blog_slick">
              <?php
                  $bolg="SELECT * FROM blog_gallary";
                  $blogresult=mysqli_query($con,$bolg);
                  while ($blogdata=mysqli_fetch_assoc($blogresult)) {
                    ?>
                    <div class="col-lg-4">
                        <div class="blog_content">
                            <img src="admin/uploadeds/<?=$blogdata['bgallary_pic']?>" alt="">
                            <h2><?=$blogdata['blog_title']?></h2>
                            <h3>by <span>admin |</span><?=$blogdata['blog_time']?></h3>
                            <p><?=$blogdata['bgallary_subtitle']?></p>
                            <a href="#"><?=$blogdata['bgallary_button']?></a>
                        </div>
                    </div>
                    <?php
                  }
               ?>
               <!--
                <div class="col-lg-4">
                    <div class="blog_content">
                        <img src="images/blog-1.jpg" alt="">
                        <h2>blog post title here</h2>
                        <h3>by <span>admin |</span> December 30, 2016. at 11:00 AM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
                        <a href="#">Read More..</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_content">
                        <img src="images/blog-2.jpg" alt="">
                        <h2>blog post title here</h2>
                        <h3>by <span>admin |</span> December 30, 2016. at 11:00 AM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
                        <a href="#">Read More..</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_content">
                        <img src="images/blog-3.jpg" alt="">
                        <h2>blog post title here</h2>
                        <h3>by <span>admin |</span> December 30, 2016. at 11:00 AM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
                        <a href="#">Read More..</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_content">
                        <img src="images/blog-3.jpg" alt="">
                        <h2>blog post title here</h2>
                        <h3>by <span>admin |</span> December 30, 2016. at 11:00 AM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.</p>
                        <a href="#">Read More..</a>
                    </div>
                </div>
              -->
            </div>
        </div>
    </section>
    <!--    blog area end-->

    <!--market area-->
    <section class="market_area">
        <div class="container">
            <div class="row market_slick">
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_market">
                        <img src="images/market3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--market area end-->

    <!--    contact area-->
    <section class="contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center m-auto">
                    <div class="about_heading">
                        <h3>Contact Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-lg-6 px-0">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5980565565408!2d90.38113704256999!3d23.74099108770836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b7b0500001%3A0x9eebb5e029db12a4!2sCreative+IT+Institute!5e0!3m2!1sen!2sbd!4v1508696305252" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="contact_form">
                    <h3>Get In Touch</h3>
                    <?php
                    if(!empty($_POST['name'])){
                      $name=htmlentities($_POST['name'],ENT_QUOTES);
                      $email=htmlentities($_POST['email'],ENT_QUOTES);
                      $sub=htmlentities($_POST['subject'],ENT_QUOTES);
                      $mess=htmlentities($_POST['message'],ENT_QUOTES);
                      $timein=date('d-m-Y g:i:s A');
                      if(!empty($name)){
                        $insert="INSERT INTO user_contacts(user_name,user_email,user_subject,user_message,user_time) VALUES ('$name','$email','$sub','$mess','$timein')";
                        if(mysqli_query($con,$insert)){
                          echo "Send your message successfuly";
                        }else {
                          echo "Please try again";
                        }
                      }
                    }
                      ?>
                    <form action="" method="post">
                        <div class="row mx-0">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder=" Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder=" Email">
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-lg-12">
                                <input type="text" name="subject" placeholder=" Subject">
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-lg-12">
                                <textarea type="text" name="message" id="" placeholder=" Message"></textarea>
                            </div>
                        </div>
                        <div class="row mx-0 text-center">
                            <div class="col-lg-12">
                                <input class="but" type="submit" value="SUBMIT">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--    contact area end-->

    <footer class="footer_part">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 justify-content-center">
                    <div class="f_logo">
                        <img src="images/logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="place">
                        <i class="fa fa-home"></i>
                        <span>Momtaz Plaza (4th Floor) House#7, Road#4, Dhanmondi Dhaka-1205. Bangladesh</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="phone">
                        <div class="phone1">
                            <i class="fa fa-phone"></i>
                            <span>+880 1730691136 </span>
                        </div>
                        <div class="phone2">
                            <i class="fa fa-phone"></i>
                            <span>+880 1931262534</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="place">
                        <i class="fa fa-envelope"></i>
                        <span>cit.info@gamil.com</span>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="f_ico">
                      <?php
                          $select="SELECT * FROM sm_icon";
                          $smresult=mysqli_query($con,$select);
                          $smdata=mysqli_fetch_assoc($smresult);
                       ?>
                          <a href="<?=$smdata['sm_fb']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="<?=$smdata['sm_twiter']?>" target="_blank">  <i class="fa fa-twitter"></i></a>
                          <a href="<?=$smdata['sm_google']?>" target="_blank">  <i class="fa fa-google"></i></a>
                          <a href="<?=$smdata['sm_linkind+']?>" target="_blank">  <i class="fa fa-linkedin"></i></a>
                          <a href="<?=$smdata['sm_behance']?>" target="_blank">  <i class="fa fa-behance"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- juery satart -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.filterizr.min.js"></script>
    <script src="js/controls.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
