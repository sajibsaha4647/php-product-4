<?php
require_once('functions/function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel :: Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                              <?php
                                  if(!empty($_POST)){
                                    $luser=htmlentities($_POST['username'],ENT_QUOTES);
                                    $lpw=htmlentities(md5($_POST['password']),ENT_QUOTES);
                                    if(!empty($luser)){
                                        $sel="SELECT * FROM cit_web_dev_1801 WHERE student_username='$luser' AND student_password-'$lpw'";
                                        $lsq=mysqli_query($con,$sel);
                                        $log=mysqli_fetch_assoc($lsq);
                                      if($log){
                                        $_SESSION['name']=$log['student_name'];
                                        $_SESSION['user']=$log['student_username'];
                                        $_SESSION['Pic']=$log['student_picture'];
                                        $_SESSION['role']=$log['role_id'];
                                        header("Location:index.php");
                                      }else {
                                        echo "username or password did not match";
                                      }
                                    }else {
                                      echo "Please enter your name";
                                    }
                                  }
                                ?>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success">Login  </button>
                                    <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account!
                                        <a href="#">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="signupbox" style="display:none; margin-top:100px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
