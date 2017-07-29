<?php
require "config.php";

/** Connect and work with DB */
class Db extends PDO
{
    function __construct()
    {
        // Connect to DB
        parent::__construct('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DBNAME, SQL_USERNAME, SQL_PASSWORD);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function last_row_count() {
        return $this->query("SELECT FOUND_ROWS()")->fetchColumn();
    }
}
