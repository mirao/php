<?php
if (!isset($_SERVER["PHP_AUTH_USER"])) {
    Header("WWW-Authenticate: Basic realm=\"Hesla\"");
    Header("HTTP/1.0 401 Unauthorized");
    echo "Přístup pouze na uživatelské jméno a heslo.";
    exit;
} else {
    if ($_SERVER["PHP_AUTH_USER"]!="Honza") {
        echo "Neplatné přihlašovací jméno!";
        exit;
    }
    if ($_SERVER["PHP_AUTH_PW"]!="jezevec") {
        echo "Neplatné heslo!";
        exit;
    }
}
