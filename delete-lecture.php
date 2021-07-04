<?php
//including the database
include('includes/config.php');
//getting id of the data from url

$id = $_GET['lecid'];

//deleting the row from table
$sql = "DELETE FROM tbllectures WHERE Id=:id";
$query = $dbh->prepare($sql);
$query->execute(array(':id' => $id));
header('location:manage-lecture.php');

?>

