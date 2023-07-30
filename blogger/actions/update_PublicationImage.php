<?php
$id=$_GET['id'];
$sql="SELECT * FROM `news` WHERE id=$id";
$nouvelles=mysqli_query($con,$sql);
$nouvelle=mysqli_fetch_array($nouvelles);
 if(isset($_POST['updateImage']))
 {
     $nomFichier=$_FILES['myfile']['name'];//recupère le nom du fichier
     $destination='imagesNouvelles/'.$nomFichier;//destination du fichier
     $extension=pathinfo($nomFichier,PATHINFO_EXTENSION);
     $fichier=$_FILES['myfile']['tmp_name'];
     $taille=$_FILES['myfile']['size'];
     if(!in_array($extension, ['jpg','png','jpeg','JPG']))
     {
         echo "L'extension doit être jpg, jpeg ou png";
     }
     
     elseif ($_FILES['myfile']['size']>100000000)
     {
         echo "La taille de l'image est superieur à 10mgb";
     }
     else
     {
         if(move_uploaded_file($fichier,$destination))
         {
            $sql="UPDATE `news` SET `image`='$destination'
             WHERE `id`=$id";
            $insertnouvelle=mysqli_query($con,$sql);
            if($insertnouvelle)
            {
                header('Location:nouvelles.php?msgS=Image bien modifiée avec succès!');
            }
         }
         else
         {
             echo "error";
         }
     }
 }