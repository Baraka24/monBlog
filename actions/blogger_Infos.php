<?php
$sql="SELECT * FROM blogger";
$blogger=mysqli_query($con,$sql);
$blogger=mysqli_fetch_array($blogger);
$id_blogger=$blogger['id'];
$sql="SELECT * FROM skills WHERE id_blogger=$id_blogger";
$bloggerSkills=mysqli_query($con,$sql);


