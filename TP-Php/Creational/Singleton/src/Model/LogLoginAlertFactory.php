
<?php

namespace EsgiIw\TpDesignPattern\Model;

class LogLoginAlertFactory
{
    public function createAlert(): LoginAlertInterface
    {
        return new LogLoginAlert();
    }
}