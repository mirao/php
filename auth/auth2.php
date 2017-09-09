<?php
// Repeat login dialog unless user authenticates
if (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER["PHP_AUTH_USER"] == "Honza" && $_SERVER["PHP_AUTH_PW"] == "jezevec") {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
} else {
    Header("WWW-Authenticate: Basic realm=\"Enter username and password\"");
    Header("HTTP/1.0 401 Unauthorized");
}