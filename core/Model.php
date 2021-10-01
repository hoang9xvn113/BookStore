<?php

namespace Core;

use mysqli;

class Model
{
    private $conn;
    private $error;

    public function __construct()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("d ket noi duoc");
    }

    public  function insert(string $query): bool
    {
        return $this->conn->query($query);
    }

    public function insert_multi(string $query): bool
    {
        return $this->conn->multi_query($query);
    }

    public  function update(string $query): bool
    {
        return $this->conn->query($query);
    }

    public  function delete(string $query): bool
    {
        return $this->conn->query($query);
    }

    public  function select(string $query): array
    {
        $result = $this->conn->query($query);

        $data = [];

        if (!$result) {
            return $data;
        }

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}
