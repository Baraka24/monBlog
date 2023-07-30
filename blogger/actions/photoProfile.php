<?php
 if(isset($_POST['updateProfile']))
 {
     $nomFichier=$_FILES['myfile']['name'];//recupère le nom du fichier
     $destination='image/'.$nomFichier;//destination du fichier
     $extension=pathinfo($nomFichier,PATHINFO_EXTENSION);
     $fichier=$_FILES['myfile']['tmp_name'];
     $taille=$_FILES['myfile']['size'];
     if(!in_array($extension, ['jpg','png','jpeg','JPG']))
     {
         echo "L'extension doit être jpg, jpeg ou png";
     }
     
     elseif ($_FILES['myfile']['size']>10000000)
     {
         echo "La taille de l'image est superieur à 2mg";
     }
     else
     {
         if(move_uploaded_file($fichier,$destination))
         {
            $id_blogger=$blogger['id'];
            $sql="UPDATE `blogger` SET `profile`='$destination' WHERE `id`=$id_blogger";
            $updateProfile=mysqli_query($con,$sql);
            if($updateProfile)
            {
                header('Location:profile.php?msgA=Photo de profile bien modifiée!');
            }
         }
         else
         {
             echo "error";
         }
     }
 }