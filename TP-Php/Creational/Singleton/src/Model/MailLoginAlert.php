<?php

namespace EsgiIw\TpDesignPattern\Model;

class MailLoginAlert implements LoginAlertInterface
{
    public function sendAlert(string $username): void
    {
        // mailer.php j'ai un probleme de port dans mon Pc donc je ne peux pas envoyer de mail
        
    }
}
?>

<?php

namespace EsgiIw\TpDesignPattern\Model;

class MailLoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new MailLoginAlert();
    }
}
?>