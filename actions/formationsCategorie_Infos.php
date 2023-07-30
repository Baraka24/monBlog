<?php
if(empty($_GET['categorie']))
{
    header('Location:formations.php');
}
$categorie=$_GET['categorie'];
$sql="SELECT formations.id as id,formations.libelle as libelle,formations.photo as photo,
formations.date_published as date_published, formations.categorie as id_categorie,
formations_categories.categorie as categorie FROM `formations`,formations_categories 
WHERE formations_categories.id=formations.categorie AND formations.categorie=$categorie
 ORDER BY formations.id DESC ";//limit 3
$formations=mysqli_query($con,$sql);
$sql="SELECT * FROM `formations_categories`";
$categories=mysqli_query($con,$sql);
$sqlcheck="SELECT * FROM `formations_categories` WHERE id=$categorie";
$catCheck=mysqli_query($con,$sqlcheck);
$findcat=mysqli_fetch_array($catCheck);
if(!($findcat))
{
    header('Location:formations.php');
}
