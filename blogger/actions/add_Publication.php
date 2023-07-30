<?php
 if(isset($_POST['addPublication']))
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
            $id_blogger=1;
            $descr=nl2br(mysqli_real_escape_string($con,$_POST['descr']));
            $contenu=nl2br(mysqli_real_escape_string($con,$_POST['contenu']));
            $sql="INSERT INTO `news`(`id`, `id_blogger`, `description`, `content`, 
            `image`, `date_hour`) 
            VALUES (null,$id_blogger,'$descr',
            '$contenu','$destination',NOW())";
            $insertnouvelle=mysqli_query($con,$sql);
            if($insertnouvelle)
            {
                header('Location:nouvelles.php?msgS=Nouvelle bien ajoutée avec succès!');
            }
         }
         else
         {
             echo "error";
         }
     }
 }