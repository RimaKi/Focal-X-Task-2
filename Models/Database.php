<?php

class Database
{
    private $host = "localhost";
    private $db_name = "blog_db";
    private $username = "root";
    private $password = "root";
    public $conn;


    /*
     * Connect to database automatically
     *
     * no params.
     * return connection.
     */

    public function __construct()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }


    /*
     * Execute all types of query operations .
     * @param Query operation to be performed and params for query operation
     */
    public function execute($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
