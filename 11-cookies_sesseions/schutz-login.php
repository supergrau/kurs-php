<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Login", "Login-Seite");

// Vor Beenden der Session wieder aufnehmen
session_start();

// Beenden der Session
session_destroy();
$_SESSION = array();

?>
<form action="schutz-intro.php" method="post">
    <p><input name="name"> Name</p>
    <p><input type="password" name="passwort"> Passwort</p>
    <p><input type="submit" value="Anmeldung"></p>
</form>

<?php
htmlende();
?>