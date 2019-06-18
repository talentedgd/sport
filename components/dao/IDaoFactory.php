<?php


interface IDaoFactory
{
    public function createEssence(): MyDaoInterface;
}