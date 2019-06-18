<?php

class Location extends DaoFactory
{
    protected $essence = "location";

    public function getLocationByCityId($id)
    {
        $db = Db::getInstance();
        $connection = $db->getConnection();
        $query = $connection->prepare("SELECT * FROM {$this->essence} WHERE city_id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($result = $query->fetchAll()) {
            return $result;
        }
        return false;
    }
}