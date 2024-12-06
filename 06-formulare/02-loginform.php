<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginformular</title>
    <link rel="stylesheet" type="text/css" href="../styles/simple.css">

</head>

<body>
    <header>
        <h1>Login mit PHP</h1>
    </header>
    <main>
        <h3>LOGIN</h3>
        <form action="login_auswertung.php" method="post">
            <p>Benutzername: <input type="text" name="username"></p>
            <p>Passwort: <input type="password" name="password"></p>

            <p><input type="submit" value="Absenden"><input type="reset" value="Löschen"></p>
        </form>
    </main>
    <footer>
        <p>Das ist die Fußzeile</p>
    </footer>
</body>

</html>