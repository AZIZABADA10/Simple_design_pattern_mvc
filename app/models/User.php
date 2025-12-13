<?php
require_once __DIR__ . '/../../config/database.php';


class User
{
private $conn;


public function __construct()
{
$this->conn = Database::connect();
}


public function register($name, $email, $password)
{
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $this->conn->prepare($sql);
return $stmt->execute([$name, $email, $hash]);
}


public function login($email)
{
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $this->conn->prepare($sql);
$stmt->execute([$email]);
return $stmt->fetch(PDO::FETCH_ASSOC);
}
}