\<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard1.php'; </script>";
} else{
    
    echo "<script>alert('Invalid Details');</script>";

}

}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
        <link rel="stylesheet" href="css/prism/prism.css" media="screen">
        <link rel="stylesheet" href="css/custom-css.css">
        <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen">
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>

    <body>

        <!-- To replace image, go to custom-css.css and replace the img link -->
        <div style="margin-top: -26px;" class="main-wrapper">
            <div>
                <div class="hd-1">
                    <div class="container-fluid header-bg-main">
                        <div class="center-header">
                            <img class="img-fluid logo-img" src="./images/uni-logo.png" width="80px" height="60px" alt="" srcset="">
                            <h3>Exam Process Management System</h3>
                        </div>
                    </div>
                </div>
                <div style="height: 50px;" class="hd-2">
                    <div class="container-fluid header-bg">
                        <div class="center-header">
                            <h4 style="margin-top:10px" class="ml-20">Uva Wellassa University</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-row">
                <div class="col-md-6">
                    <!-- Student login section -->
                    <section class="section margins-std ">
                        <div class="row ">
                            <div class="col-sm-12 pt-50 mob-rev">
                                <div class="row mt-30 ">
                                    <div class="custom-shadow">
                                        <div style="border:none;" class="panel">
                                            <div class="panel-heading title-style">
                                                <div class="panel-title text-center">
                                                    <h3 style=" color:aliceblue; text-align: center ;font-size:30px; font-family: calibri ;font-weight: bold, Times, serif;">User</h3>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">
                                                <form class="form-horizontal " method="post">
                                                    <div style="margin-top: 30px;" class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">
                                                                Sign
                                                                in
                                                                <span class="btn-label btn-label-right">
                                                                    <i class="fa fa-check"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col">

                                                        <button type="submit" name="newLogin"> <a href="dashboardStudent.php"> click here </a> </button>
                                                    </div>
 -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-11 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
                <div class="col-md-6">
                    <!-- Student login section -->
                    <section class="section margins-adm">
                        <div class="row ">
                            <div class="col-sm-12 pt-50 mob-rev">
                                <div class="row mt-30 ">
                                    <div class="custom-shadow">
                                        <div style="border:none;" class="panel">
                                            <div class="panel-heading title-style">
                                                <div class="panel-title text-center">
                                                    <h3 style=" text-align: center ;font-size:30px; font-family: calibri ;font-weight: bold, Times, serif;">Admin</h3>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">
                                                <form class="form-horizontal " method="post">
                                                    <div style="margin-top: 30px;" class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">
                                                                Sign
                                                                in
                                                                <span class="btn-label btn-label-right">
                                                                    <i class="fa fa-check"></i>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col">

                                                        <button type="submit" name="newLogin"> <a href="dashboardStudent.php"> click here </a> </button>
                                                    </div>
 -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-11 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </section>
                </div>
            </div>
            <!-- Footer -->
            <footer class="page-footer custom-footer font-small blue">
                <div class="footer-copyright text-center pt-15 pb-10">
                    <div class="footer-content">
                        <div class="footer-details" ">
                        <img src="./images/phone.svg " height="24px " width="24px " alt=" " srcset=" ">

                        <div>+98445515511</div>
                    </div>
                    <div class="footer-details " ">
                            <img src="./images/location.svg " height="24px " width="24px " alt=" " srcset=" ">

                            <div>Uva Wellassa University, Passara Road, Badulla, Sri Lanka. </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
            <!-- /.row -->
            <!-- /.main-wrapper -->
            <!-- ========== COMMON JS FILES ========== -->
            <script src="js/jquery/jquery-2.2.4.min.js "></script>
            <script src="js/jquery-ui/jquery-ui.min.js "></script>
            <script src="js/bootstrap/bootstrap.min.js "></script>
            <script src="js/pace/pace.min.js "></script>
            <script src="js/lobipanel/lobipanel.min.js "></script>
            <script src="js/iscroll/iscroll.js "></script>
            <!-- ========== PAGE JS FILES ========== -->
            <!-- ========== THEME JS ========== -->
            <script src="js/main.js "></script>
            <script>
                $(function() {

                });
            </script>
    </body>

    </html>