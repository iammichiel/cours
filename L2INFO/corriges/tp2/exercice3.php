<?php

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['email'] == 'test' && $_POST['password'] == 'test') {
        $_SESSION['isLogged'] = true;
    } else {
        echo 'Authentification failed';
    }
}
?>

<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged']) { ?>
    <p>Vous etes connecté.</p>

    <a href="?logout=true">logout</a>
<?php } else { ?>
    <form id="form_id" action="" method="post">
        <input type="text" name="email" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="submit" value="Connection">
    </form>
<?php } ?>
