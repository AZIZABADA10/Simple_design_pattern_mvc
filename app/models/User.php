<?php
require_once __DIR__ . '/../../config/database.php';

class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
