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

    public function getAllUsers():array | bool
    {
        $stmt = $this->pdo->query("SELECT * FROM USER");

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserById($id):array | bool
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateUser($id,$pseudo):array | bool
    {
        $stmt = $this->pdo->prepare("UPDATE user SET pseudo = :pseudo WHERE id = :id");

        $stmt->bindParam(':pseudo', $id);
        $stmt->bindParam(':id', $pseudo);

        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
