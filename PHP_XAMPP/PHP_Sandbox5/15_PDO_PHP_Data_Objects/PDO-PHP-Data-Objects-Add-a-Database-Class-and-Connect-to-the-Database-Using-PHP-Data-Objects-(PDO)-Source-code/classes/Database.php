<?php

/**
 * Database
 *
 * A connection to the database
 */
class Database
{
    /**
     * Get the database connection
     *
     * @return PDO object Connection to the database server
     */
    public function getConn()
    {
        $db_host = "localhost";
        $db_name = "cms";
        $db_user = "cms_www";
        $db_pass = "64w6H2rOJ1zwLRyk";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        return new PDO($dsn, $db_user, $db_pass);
    }
}
