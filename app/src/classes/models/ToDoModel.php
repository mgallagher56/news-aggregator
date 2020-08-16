<?php

namespace MarcsNameSpace\models;

use marcsNameSpace\DB\DbConnection;
use PDO;

class ToDoModel {
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllToDos() {
        $query = $this->db->prepare('SELECT `id`, `task`, `completed` FROM `ToDo` WHERE `completed` = 0;');
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

}