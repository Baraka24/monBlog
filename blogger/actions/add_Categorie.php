<?php
if(isset($_POST['addCat']))
{
$categorie=mysqli_real_escape_string($con,nl2br($_POST['Categ']));
$sql="INSERT INTO `formations_categories`(`id`, `categorie`) 
VALUES (null,'$categorie')";
$addCAteg=mysqli_query($con,$sql);
if($addCAteg)
{
    $msgS='<div class="alert alert-success alert-dismissible fade show" role="alert">
    Categorie bien ajoutée!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">.</button>
    </div>';
}
}
