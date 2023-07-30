<?php
$id=$_GET['id'];
$sql="SELECT * FROM `news` WHERE id=$id";
$nouvelles=mysqli_query($con,$sql);
$nouvelle=mysqli_fetch_array($nouvelles);
 if(isset($_POST['updatePublication']))
 {
    $descr=nl2br(mysqli_real_escape_string($con,$_POST['descr']));
    $contenu=nl2br(mysqli_real_escape_string($con,$_POST['contenu']));
    $sql="UPDATE `news` SET `description`='$descr',
    `content`='$contenu' WHERE `id`=$id";
    $insertnouvelle=mysqli_query($con,$sql);
    if($insertnouvelle)
    {
        header('Location:nouvelles.php?msgS=Nouvelle bien modifiée avec succès!');
    }
 }