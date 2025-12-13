<?php
require_once __DIR__ . '/../../config/database.php';

class Employee
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function getAllEmployees()
    {
        $sql = "SELECT * FROM employees";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}