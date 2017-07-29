<?php
require "config.php";

/** Connect and work with DB */
class Db
{
    public $dbh;

    function __construct()
    {
        // Connect to DB
        $this->dbh = new PDO('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DBNAME, SQL_USERNAME, SQL_PASSWORD);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function __destruct()
    {
        $this->dbh = null;
    }
}
