<?php

namespace EsgiIw\TpDesignPattern\Model;

class SmsAlertContentFactory
{
    public function createContent(): AlertContentInterface
    {
        return new SmsAlertContent();
    }
}