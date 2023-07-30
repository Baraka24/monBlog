<?php
require_once '../includes/connection.php';
$id=$_GET['id'];
    $sql="DELETE FROM `formations_categories` WHERE id=$id";
    $deleteSkill=mysqli_query($con,$sql);
    if($deleteSkill)
    {
        header('Location:nouvelleFormation.php?msgD=Catégorie bien supprimée.');
    }
    else
    {
        echo "Error";
    }

?>