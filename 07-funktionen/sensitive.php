<?php
// Ohne Sensitive Parameter
function passwort_bearbeiten(string $passwort): string
{
    throw new Exception('Fehler');
    return md5($passwort);
}
try {
    $erg = passwort_bearbeiten("Geheimes Passwort");
} catch (Exception $e) {
    echo $e;
}

echo '<br /><br />';

// Mit Sensitive Parameter
function passwort_bearbeiten_sicher(#[SensitiveParameter] string $passwort): string
{
    throw new Exception('Fehler');
    return md5($passwort);
}
try {
    $erg = passwort_bearbeiten_sicher("Geheimes Passwort");
} catch (Exception $e) {
    echo $e;
}
