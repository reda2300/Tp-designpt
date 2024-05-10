
<?php

namespace EsgiIw\TpDesignPattern\Model;

class LogLoginAlert implements LoginAlertInterface
{
    public function sendAlert(string $username): void
    {
        
        file_put_contents('login.log', "User $username logged in at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
    }
}

