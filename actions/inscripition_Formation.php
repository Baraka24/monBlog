<?php
if (isset($_POST['sinscrire'])) {
    $date_inscription=date('Y-m-d');
    //$heure_inscription=date('h:i:s');
    //$date_heure_inscrpition=$date_inscription.$heure_inscription;
    $nom = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['nom'])));
    $postnom = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['postnom'])));
    $numTel = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['numTel'])));
    $adresse = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['adresse'])));
    $message = mysqli_real_escape_string($con, nl2br(htmlspecialchars($_POST['message'])));
    $checkInscription="SELECT * FROM `inscription` 
    WHERE nom='$nom' AND postnom='$postnom' AND id_formation=$id";
    $checkInscriptionOk=mysqli_query($con,$checkInscription);
    $findInscription=mysqli_fetch_array($checkInscriptionOk);
    if($findInscription)
    {
        $alertmsg='
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Vous vous êtes déjà inscris à cette formation, inutile de vouloir vous réinscrire.
        <a class="link-success bi bi-check2-square text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> . </button>
        </div>'
        ;
    }
    else
    {
        $sql="INSERT INTO `inscription`(`id`, `nom`, `postnom`, `id_formation`, 
    `numTel`, `date_inscription`, `adresse`, `message`) 
    VALUES (null,'$nom','$postnom',
    $id,'$numTel','$date_inscription','$adresse','$message')";
    $inscrire=mysqli_query($con,$sql);
    if($inscrire)
    {
        $alertmsg='
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Inscription réussie
        <a class="link-success bi bi-check2-square text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" href="">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> . </button>
        </div>'
        ;
    }
    else
    {
        echo "error";
    }
    }
}