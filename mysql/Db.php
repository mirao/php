<?php
require "config.php";

/** Connect and work with DB */
class Db extends PDO
{
    function __construct()
    {
        // Connect to DB
        parent::__construct('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DBNAME . ';charset=utf8', SQL_USERNAME, SQL_PASSWORD, [PDO::MYSQL_ATTR_LOCAL_INFILE => true]);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function last_row_count() {
        return $this->query("SELECT FOUND_ROWS()")->fetchColumn();
    }
}
