<?php

// Pattern singleton
class UserDAO {

    private $instance;
    private $pdo;

    private function __construct()
    {
        $this->pdo = new PDO("mysql:127.0.0.1;dbname=cours");
    }

    public static function getInstance()
    {
        if (self::instance === null) {
            self::instance = new UserDAO();
        }

        return self::instance;
    }

    public function list()
    {
        return $this->pdo->query("SELECT * FROM users");
    }
}

$users = UserDAO::getInstance()->list();
$users = UserDAO::getInstance()->list();
$users = UserDAO::getInstance()->list();
$users = UserDAO::getInstance()->create(new User(awdqwd));
