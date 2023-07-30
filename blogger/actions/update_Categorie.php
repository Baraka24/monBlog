<?php
$id=$_GET['id'];
$maCategorie=mysqli_query($con,"SELECT * FROM `formations_categories` WHERE id=$id");
$catU=mysqli_fetch_array($maCategorie);
if(isset($_POST['addCat']))
{
$categorie=mysqli_real_escape_string($con,nl2br($_POST['Categ']));
$sql="UPDATE `formations_categories` SET  `categorie`='$categorie'
WHERE `id`=$id";
$addCAteg=mysqli_query($con,$sql);
if($addCAteg)
{
    header('Location:nouvelleFormation.php?msgU=Catégorie bien modifiée.');
}
}
