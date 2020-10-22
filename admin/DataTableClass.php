<?php

const DB_HOST = 'localhost';
const DB_NAME = 'mobilelab';
const DB_CHAR = 'utf8';
const DB_USER = "root";
const DB_PASS = "";


class DataTableClass{

    private $db;

    public function __construct()
    {
        $opt  = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => FALSE,
        );
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHAR;
        $this->db = new PDO($dsn, DB_USER, DB_PASS, $opt);
    }

    public function request($query1,$query2,$user,$order)
    {
        $query = $query1;

        if(isset($user['search']['value']))
        {
            $query .= $query2;
        }

        if (isset($user["order"])) {
            $query .= "ORDER BY $order ".$user['order'][0]['dir']." ";
        } else {
            $query .= "ORDER BY $order ASC ";
        }

        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement;
    }
}

?>
