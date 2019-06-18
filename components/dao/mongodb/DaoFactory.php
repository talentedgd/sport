<?php


class DaoFactory implements MyDaoInterface
{
    protected $essence;

    public function deleteItem($id)
    {
        // TODO: Implement deleteItem() method.
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
        // TODO: Implement selectOne() method.
    }

    public function insertItem(array $item)
    {
        // TODO: Implement insertItem() method.
    }

    public function updateItem(array $item)
    {
        // TODO: Implement updateItem() method.
    }
}