<?php
 if(isset($_POST['addFormation']))
 {
     $nomFichier=$_FILES['myfile']['name'];//recupère le nom du fichier
     $destination='imagesFormations/'.$nomFichier;//destination du fichier
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
            $catgegorie=$_POST['categorie'];
            $libelle=nl2br(mysqli_real_escape_string($con,$_POST['libelle']));
            $sql="INSERT INTO `formations`(`id`, `libelle`, `photo`, `categorie`, `date_published`) 
            VALUES (null,'$libelle','$destination','$catgegorie',NOW())";
            $insertFormation=mysqli_query($con,$sql);
            if($insertFormation)
            {
                header('Location:formations.php?msgS=Formation bien ajoutée avec succès!');
            }
         }
         else
         {
             echo "error";
         }
     }
 }