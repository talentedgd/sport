<?php

class Admin
{
    public static function checkUserData($username, $password)
    {
        $db = Db::getInstance();
        $connection = $db->getConnection();

        if ($_SESSION['db']) {
            $query = $connection->prepare("SELECT id, password_hash FROM admin WHERE username = :username");
            $query->bindParam(':username', $username);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $result['password_hash'])) {
                $_SESSION['admin_id'] = $result['id'];
                return true;
            }
            return false;
        } else {
            $result = $connection->admins->findOne(['name' => $username]);
            if (password_verify($password, $result['password_hash'])) {
                $_SESSION['admin_id'] = $result['_id'];
                return true;
            }
            return false;
        }
    }
}