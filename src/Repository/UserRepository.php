<?php

namespace App\Repository;

use App\Repository\AbstractRepository;

class UserRepository extends AbstractRepository
{
    public function getUserByEmail(string $email):array | bool
    {
        $stmt = $this->pdo->prepare("SELECT * FROM USER WHERE email = :email");

        $stmt->bindParam(':email', $email);

        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
