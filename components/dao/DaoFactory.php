<?php

require_once ROOT . '\components\dao\MyDaoInterface.php';

class DaoFactory implements MyDaoInterface
{
    protected $essence;

    public function deleteItem($id)
    {
        $db = new Db();
        $connection = $db->getConnection();
        $query = $connection->prepare("DELETE FROM {$this->essence} WHERE id = :id LIMIT 1");

        if (!$query) {
            echo 'Что-то не так!';
            exit;
        }

        $query->bindParam(':id', $id);

        if ($query->execute()) {
            return true;
        }
        return false;
    }

    public function selectAll()
    {
        $db = new Db();
        $connection = $db->getConnection();
        $query = $connection->query("SELECT * FROM {$this->essence}");

        if (!$query) {
            echo 'Что-то не так!';
            exit;
        }

        if ($result = $query->fetchAll(PDO::FETCH_ASSOC)) {
            return $result;
        }
        return false;
    }

    public function selectOne($id)
    {
        $db = new Db();
        $connection = $db->getConnection();
        $query = $connection->query("SELECT * FROM {$this->essence} WHERE id = $id LIMIT 1");

        if (!$query) {
            echo 'Что-то не так!';
            exit;
        }

        if ($result = $query->fetch(PDO::FETCH_ASSOC)) {
            return $result;
        }
        return false;
    }

    public function insertItem(array $item)
    {
        $db = new Db();
        $connection = $db->getConnection();

        $fieldsAr = array();
        $valuesAr = array();

        for ($i = 0; $i < count($item); $i++) {
            $fieldsAr[] = key($item);
            $valuesAr[] = ':' . key($item);
            next($item);
        }

        $values = implode(", ", $valuesAr);
        $fields = implode(", ", $fieldsAr);

        $sql = "INSERT INTO {$this->essence}($fields) VALUES ($values)";

        $query = $connection->prepare($sql);
        $i = 0;
        foreach ($item as $key => $value) {
            $query->bindParam($valuesAr[$i], $item[$key]);
            $i++;
        }
        if ($query->execute()) {
            return true;
        }
        return false;

    }

    public function updateItem(array $item)
    {
        $db = new Db();
        $connection = $db->getConnection();

        $id = $item['id'];
        unset($item['id']);
        $valuesAr = array();
        $string = "";

        for ($i = 0; $i < count($item); $i++) {
            $valuesAr[] = ':' . key($item);
            $string = $string . key($item) . ' = :' . key($item) . ', ';
            next($item);
        }

        $string = mb_substr($string, 0, -2);
        $sql = "UPDATE {$this->essence} SET {$string} WHERE id = :id";
        $query = $connection->prepare($sql);
        $query->bindParam(':id', $id);
        $i = 0;
        foreach ($item as $key => $value) {
            $query->bindParam($valuesAr[$i], $item[$key]);
            $i++;
        }
        if ($query->execute()) {
            return true;
        }
        return false;
    }
}