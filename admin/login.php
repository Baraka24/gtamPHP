<?php
if (isset($_POST['submit'])) {
    $password = md5($_POST['pwd']);
    $username = $_POST['Uid'];
    $loginUser = mysqli_query($con, "select * from admin where user_name='" . $username . "' and password=
    '" . $password . "'");
    if ($row = mysqli_fetch_array($loginUser)) {
        $_SESSION['admin'] = $row['id_Ad'];
        $_SESSION['userName'] = $row['user_name'];
        header('location:admin.php');
    } else {
        $MessageError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
            . 'Nom d\'utilisateur ou mot de passe incorrect, réessayer svp!' . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">'
            . '</button>' . '</div>';
    }
}
