
<?php

namespace EsgiIw\TpDesignPattern\Model;

class DatabaseLoginAlert implements LoginAlertInterface
{
    public function sendAlert(string $username): void
    {
        
    }
}

// src/Model/DatabaseLoginAlertFactory.php
<?php

namespace EsgiIw\TpDesignPattern\Model;

class DatabaseLoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new DatabaseLoginAlert();
    }
}
