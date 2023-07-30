<?php
require_once '../includes/connection.php';
$id=$_GET['id'];
 $sql="DELETE FROM `inscription` WHERE `id`=$id";
 $deleteFormation=mysqli_query($con,$sql);
 if($deleteFormation)
 {
     header('Location:inscriptions.php?msgD=Inscription bien supprimée!');
 }
 else
 {
     echo "Error";
 }