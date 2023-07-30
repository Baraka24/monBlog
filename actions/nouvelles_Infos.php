<?php
$sql="SELECT blogger.noms AS blogger,news.id AS id,
news.image AS imageN,news.description AS descriptionN, news.content AS content,
news.date_hour AS date_hour
 FROM `news`,blogger WHERE blogger.id=news.id_blogger ORDER BY news.id DESC";
$nouvelles=mysqli_query($con,$sql);
