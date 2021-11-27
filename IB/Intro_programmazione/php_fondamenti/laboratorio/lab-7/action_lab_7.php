<?php
//session_destroy();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
    echo "Il tuo nome utente è " . $_SESSION["nome_utente"] . ".<br>";
?>

</body>
</html>