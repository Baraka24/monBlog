<?php
require_once '../../includes/connection.php';
$id=$_GET['id'];
    $sql="DELETE FROM `skills` WHERE id=$id";
    $deleteSkill=mysqli_query($con,$sql);
    if($deleteSkill)
    {
        header('Location:../profile.php?msgD=Compétence bien supprimée.');
    }
    else
    {
        echo "Error";
    }

?>