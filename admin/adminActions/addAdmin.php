<?php

if (isset($_POST['addAdmin'])) {
    $utilisateur = htmlspecialchars($_POST['utilisateur']);
    $motdepasse = md5($_POST['motdepasse']);
    $motdepasseC = md5($_POST['motdepasseC']);
    if ($motdepasse === $motdepasseC) {
        $sql = "insert into admin(id_Ad,user_name,password)
        values(null,'" . $utilisateur . "','" . $motdepasse . "')";
        $addAdmin = mysqli_query($con, $sql);
        if ($addAdmin) {
            $MessageSuccess = '<div class="alert alert-primary alert-dismissible fade show" role="alert">'
                . 'Utilisateur ' . $utilisateur . ' inscrit avec succès, maintenant vous pouvez vous connecter...' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">'
                . '</button>' . '</div>';
        }
    } else {
        $MessageError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
            . 'Echec, vérifiez votre mot de passe et celui de confirmation svp!' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">'
            . '</button>' . '</div>';
    }
}
