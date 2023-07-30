<?php
 if(isset($_POST['updateImage']))
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
            $sql="UPDATE `formations` SET 
            `photo`='$destination' WHERE `id`=$id";
            $updtFormation=mysqli_query($con,$sql);
            if($updtFormation)
            {
                header('Location:formations.php?msgS=Image sur formation bien modifiée!');
            }
            else
            {
                echo "Error";
            }
         }
         else
         {
             echo "error";
         }
     }
 }


 