<?php
if(isset($_POST['addSkill']))
{
    $skill=mysqli_real_escape_string($con,$_POST['skill']);
    $id_blogger=$blogger['id'];
    $sql="INSERT INTO `skills`(`id`, `skill`, `id_blogger`) VALUES (null,'$skill','$id_blogger')";
    $addSkill=mysqli_query($con,$sql);
    if($addSkill)
    {
        header('Location:profile.php?msgS=Compétence bien ajoutée.');
    }
    else
    {
        echo "Error";
    }
}
?>