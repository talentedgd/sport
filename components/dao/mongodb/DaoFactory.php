<?php


class DaoFactory implements MyDaoInterface
{
    protected $essence;

    public function deleteItem($id)
    {
        $collectionName = $this->essence;

        $db = Db::getInstance();
        $connection = $db->getConnection();
        if ($connection->$collectionName->remove(['_id' => $id])) return true;
        return false;
    }

    public function selectAll()
    {
        $collectionName = $this->essence;

        $db = Db::getInstance();
        $connection = $db->getConnection();
        $result = $connection->$collectionName->find()->toArray();
        return $result;
    }

    public function selectOne($id)
    {
        $collectionName = $this->essence;

        $db = Db::getInstance();
        $connection = $db->getConnection();
        $result = $connection->$collectionName->findOne(['_id' => $id]);
        return $result;
    }

    public function insertItem(array $item)
    {
        $collectionName = $this->essence;

        $db = Db::getInstance();
        $connection = $db->getConnection();
        if ($connection->$collectionName->insertOne($item)) return true;
        return false;
    }

    public function updateItem(array $item)
    {
        $collectionName = $this->essence;

        $db = Db::getInstance();
        $connection = $db->getConnection();
        if ($connection->$collectionName->updateOne(['_id' => $item['id']], ['$set' => $item])) return true;
        return false;
    }
}