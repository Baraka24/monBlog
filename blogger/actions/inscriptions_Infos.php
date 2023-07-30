<?php
$sql="SELECT inscription.id AS id, inscription.nom AS nom, inscription.postnom AS postnom, 
formations.libelle AS libelle, inscription.id_formation AS id_formation,inscription.numTel AS numTel,
inscription.date_inscription AS date_inscription, inscription.message AS messageF, formations.categorie
 AS id_categorie, formations_categories.categorie AS categorie,inscription.adresse AS adresse 
 FROM formations_categories,formations,inscription
 WHERE formations_categories.id=formations.categorie AND formations.id=inscription.id_formation";
 $inscriptionsInfos=mysqli_query($con,$sql);
 