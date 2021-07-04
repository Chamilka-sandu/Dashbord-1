<?php
//including the database
include('includes/config.php');
//getting id of the data from url

$id = $_GET['subjectid'];

//deleting the row from table
$sql = "DELETE FROM tblcode WHERE id=:id";
$query = $dbh->prepare($sql);
$query->execute(array(':id' => $id));
header('location:manage-subjects.php');

?>
   
