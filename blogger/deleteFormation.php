<?php
require_once '../includes/connection.php';
require '../actions/formation_Infos.php';
 $sql="DELETE FROM `formations` WHERE `id`=$id";
 $updtFormation=mysqli_query($con,$sql);
 if($updtFormation)
 {
     header('Location:formations.php?msgD=Formation bien supprimée!');
 }
 else
 {
     echo "Error";
 }