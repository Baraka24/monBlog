<?php
if(isset($_POST['updateBlogger']))
{
    $id_blogger=$blogger['id'];
    $noms=mysqli_real_escape_string($con,$_POST['noms']);
    $fb=mysqli_real_escape_string($con,$_POST['fb']);
    $wh=mysqli_real_escape_string($con,$_POST['wh']);
    $tw=mysqli_real_escape_string($con,$_POST['tw']);
    $numTel=mysqli_real_escape_string($con,$_POST['numTel']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $descr=mysqli_real_escape_string($con,$_POST['descr']);
    $sql="UPDATE `blogger` SET `noms`='$noms',
    `facebook`='$fb',`whatsapp`='$wh',`twitter`='$tw',
    `phone`='$numTel',`gmail`='$email',
    `description`='$descr' WHERE `id`=$id_blogger";
    $updateBlogger=mysqli_query($con,$sql);
    if($updateBlogger)
    {
        header('Location:profile.php?msgU= Mise à jour du profil réussit.');
    }
}