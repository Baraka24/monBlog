<?php
$sql="SELECT formations.id as id,formations.libelle as libelle,formations.photo as photo,
formations.date_published as date_published, formations.categorie as id_categorie,
formations_categories.categorie as categorie
FROM `formations`,formations_categories 
WHERE formations_categories.id=formations.categorie ORDER BY formations.id DESC limit 5";//
$formations=mysqli_query($con,$sql);
$sql="SELECT * FROM `formations_categories`";
$categories=mysqli_query($con,$sql);
