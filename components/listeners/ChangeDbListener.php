<?php

require_once ROOT.'/components/Observer.php';

class ChangeDbListener implements Observer
{

    public function handleEvent()
    {
        unset($_SESSION['admin_id']);
        header('Location: http://sport/admin');
    }
}