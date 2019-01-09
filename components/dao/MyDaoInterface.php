<?php

interface MyDaoInterface
{
    public function deleteItem($id);
    public function selectAll();
    public function selectOne($id);
    public function insertItem(array $item);
    public function updateItem(array $item);
}