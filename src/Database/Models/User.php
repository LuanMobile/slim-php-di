<?php

namespace App\Database\Models;

use Doctrine\DBAL\Connection;

class User
{
    public function __construct(
        private Connection $connection
    ) {
    }

    public function users()
    {
        $users = "select * from users";
        $prepare = $this->connection->prepare($users);

        return $prepare->executeQuery()->fetchAllAssociative();
    }

    public function findBy(string $field, string $value)
    {
        $users = "select * from users where " . $field . " = :" . $field;

        $prepare = $this->connection->prepare($users);
        $prepare->bindValue($field, $value);

        return $prepare->executeQuery()->fetchAssociative();
    }

    public function insert(array $data)
    {
        unset($data['confirm_password']);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $sql = "insert into users(firstName, lastName, email, password) values(:firstName, :lastName, :email, :password)";
        $stmt = $this->connection->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        return $stmt->executeStatement();
    }
}
