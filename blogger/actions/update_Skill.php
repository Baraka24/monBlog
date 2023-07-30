<?php
$idS=$_GET['id'];
$sql="SELECT * FROM skills WHERE id=$idS";
$findSkill=mysqli_query($con,$sql);
if(isset($idS))
{
    $mySkill=mysqli_fetch_array($findSkill);
if(isset($_POST['updateSkill']))
{
    $skill=mysqli_real_escape_string($con,$_POST['skill']);
    $sql="UPDATE `skills` SET `skill`='$skill' WHERE `id`=$idS";
    $updateSkill=mysqli_query($con,$sql);
    if($updateSkill)
    {
        header('Location:profile.php?msgS=Compétence bien modifiée!');
    }
    else
    {
        header('Location:profile.php?msgD=Erreur lors de la modification');
    }
}
}


