<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
{
$lectureid=$_POST['lecture_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$roolid=$_POST['rollid']; 
$lectureemail=$_POST['email']; 
$password=$_POST['password'];
 $subject=$_POST['code'];
$faculty=$_POST['faculty']; 
$department=$_POST['department']; 
$dob=$_POST['dob']; 

$sql="INSERT INTO  tbllectures(lecture_Id,first_name,last_name,roll_id,email,password,subject,faculty,department,dob) VALUES(:lectureid,:firstname,:lastname,:roolid,:lectureemail,:password,:subject,:faculty,:department,:dob)";
$query = $dbh->prepare($sql);
$query->bindParam(':lectureid',$lectureid,PDO::PARAM_STR);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':roolid',$roolid,PDO::PARAM_STR);
$query->bindParam(':lectureemail',$lectureemail,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':faculty',$faculty,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);


$query->execute();

$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Student info added successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| Lecture Admission< </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar1.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar1.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Lecture Admission</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard2.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Lecture Admission</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill the Lecture info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
<?php if($msg){?>
<div class="alert alert-success left-icon-alert" role="alert">
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                                <form class="form-horizontal" method="post">
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Lecture Id</label>
<div class="col-sm-10">
<input type="text" name="lecture_id" class="form-control" id="lecture_id" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">FIrst Name</label>
<div class="col-sm-10">
<input type="text" name="firstname" class="form-control" id="firstname" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Last Name</label>
<div class="col-sm-10">
<input type="text" name="lastname" class="form-control" id="lastname" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Roll Id</label>
<div class="col-sm-10">
<input type="text" name="rollid" class="form-control" id="rollid" maxlength="5" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Lecture Email</label>
<div class="col-sm-10">
<input type="email" name="email" class="form-control" id="email" required="required" autocomplete="off">
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="password" name="password" class="form-control" id="password" required="required" autocomplete="off">
</div>
</div>

  <div class="form-group">
   <label for="default" class="col-sm-2 control-label">Subject</label>
    <div class="col-sm-10">
 <select name="code" class="form-control" id="default" required="required" >
<option value="">Select subject</option>
<?php $sql = "SELECT * from tblcode";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->code); ?>&nbsp; -<?php echo htmlentities($result->credit_base); ?></option>
<?php }} ?>
 </select>
                  
</div>
 </div>



 <div class="form-group">
<label for="default" class="col-sm-2 control-label">Faculty</label>
<div class="col-sm-10">
 <select name="faculty" class="form-control" id="default" required="required">
 <option > select Faculty</option>
<option >Faculty Of Animal Science & Export Agriculture </option>
<option >Faculty of Management</option>
<option >Faculty of Applied Sciences</option>
<option >Faculty of Technological Studies</option>
 </select>
 </div>
  </div>

  
                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Department</label>
                                                        <div class="col-sm-10">
 <select name="department" class="form-control" id="default" required="required">
 <option > select Department</option>
<option value="">Department of Animal Science</option>
<option >Department of Export Agriculture</option>
<option >Department of Applied Earth Sciences </option>
<option >Department of Computer Science and Informatic</option>
<option >Department of Science and Technology </option>
<option >Department of Tourism Studies (DTS)</option>
<option >Department of Public Administration </option>
<option >Entrepreneurship and Management</option>
<option > Department of English Language Teaching (DELT)</option>

 </select>
 </div>
  </div>



<div class="form-group">
                     <label for="date" class="col-sm-2 control-label">DOB</label>
                      <div class="col-sm-10">
                        <input type="date"  name="dob" class="form-control" id="date">
                           </div>
                              </div>
                                                    

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP } ?>
