<?php
require_once '../includes/connection.php';
$id=$_GET['id'];
 $sql="DELETE FROM `news` WHERE `id`=$id";
 $delete=mysqli_query($con,$sql);
 if($delete)
 {
     header('Location:nouvelles.php?msgD=Nouvelle bien supprimée!');
 }
 else
 {
     echo "Error";
 }