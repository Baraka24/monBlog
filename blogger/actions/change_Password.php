<?php
if(isset($_POST['changePwd']))
{
    $pwd=md5($_POST['pwd']);
    $pwdN=md5($_POST['pwdN']);
    $pwdC=md5($_POST['pwdC']);
    $id_blogger=$blogger['id'];
    $sql="SELECT * FROM blogger WHERE id=$id_blogger";
    $blogger=mysqli_query($con,$sql);
    $bloggerFind=mysqli_fetch_array($blogger);
    $ancientPwd=$bloggerFind['pwd'];
    if($pwd==$ancientPwd)
    {
        if($pwdN==$pwdC)
        {
            $sql="UPDATE `blogger` SET `pwd`='$pwdN' WHERE `id`=$id_blogger";
            $changePwd=mysqli_query($con,$sql);
            if($changePwd)
            {
                header('Location:profile.php?msgA=Votre mot de passe a été mise à jour avec succès!');
            }
        }
        else
        {
            header('Location:modifierPhotoProfile.php?msgErr=Erreur, nouveau mot de passe différent du mot de passe de confirmation.');
        }
    }
    else
    {
        header('Location:modifierPhotoProfile.php?msgErr=Erreur, ancient mot de passe différent...');
    }
}