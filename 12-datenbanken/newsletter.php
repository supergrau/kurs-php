<?php
require_once "../inc/htmlhelper.php";

htmlanfang("Newsletter-Form", "Newsletter-Form");

?>

<form action="newsletter-action.php" method="post">
    <p>Hier können Sie sich anmelden:</p>
    <p>Name: <input type="text" name="UserName" size="50" /></p>
    <p>Mail: <input type="text" name="UserMail" size="50" /></p>
    <p><input type="submit" value="Absenden" name="abschicken" /></p>
</form>

<?php
htmlende();
?>