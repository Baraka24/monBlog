<?php

if(empty($_GET['id']))
{
    header('Location:formations.php');
}

$id=$_GET['id'];
$sql="SELECT formations.id AS id,formations.libelle AS libelle,formations.photo AS photo,
formations.date_published AS date_published, 
formations_categories.categorie AS categorie,formations_categories.id AS idCat
FROM `formations`,formations_categories 
WHERE formations_categories.id=formations.categorie AND formations.id=$id";
$formations=mysqli_query($con,$sql);
$formation=mysqli_fetch_array($formations);
if(!($formation))
{
    header('Location:formations.php');
}
$sql="SELECT * FROM `formations_categories`";
$categories=mysqli_query($con,$sql);