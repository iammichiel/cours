<?php
    $isEmailValide = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
?>

<form id="form_id" action="" method="post">

    <?php if ($isEmailValide === false) { ?>
        <label style="color:red">Adresse email invalide</label>
    <?php } ?>
    <input type="text" name="email" value="">
    <input type="submit" value="Envoyer">
</form>
