<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Auswertung</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <header>
        <h1>Auswertung des Login-Formulars</h1>
    </header>
    <main>
        <h3>Login</h3>
        <?php 
            // Diese Daten sind normalerweise hier nicht gespeichert
            $password = "kennwort";
            $user = "lulu";

            if ($_POST['username'] == $user && $_POST['password'] == $password) {
                echo "<h3>Anmeldung erfolgreich :)</h3>";
            }
            else {
                echo "<h3>Anmeldung nicht erfolgreich :(</h3>";
            }
        ?>
    </main>
    <footer>
        <p>Das ist die Fußzeile</p>
    </footer>
</body>

</html>