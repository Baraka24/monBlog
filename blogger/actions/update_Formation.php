<?php
 if(isset($_POST['updateFormation']))
 {
            $catgegorie=$_POST['categorie'];
            $libelle=nl2br(mysqli_real_escape_string($con,$_POST['libelle']));
            $sql="UPDATE `formations` SET 
            `libelle`='$libelle',`categorie`='$catgegorie' WHERE `id`=$id";
            $updtFormation=mysqli_query($con,$sql);
            if($updtFormation)
            {
                header('Location:formations.php?msgS=Formation bien modifiée!');
            }
            else
            {
                echo "Error";
            }
 }