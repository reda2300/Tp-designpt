<?php

require_once 'src/Model/AlertContentInterface.php';
require_once 'src/Model/EmailAlertContent.php';
require_once 'src/Model/EmailAlertContentFactory.php';
require_once 'src/Model/SmsAlertContent.php';
require_once 'src/Model/SmsAlertContentFactory.php';

use EsgiIw\TpDesignPattern\Model\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Model\SmsAlertContentFactory;

// Utilisation de la factory d'alerte par e-mail
$emailFactory = new EmailAlertContentFactory();
$emailContent = $emailFactory->createContent();
echo "Contenu d'alerte par e-mail : " . $emailContent->getContent() . "\n";

// Utilisation de la factory d'alerte par SMS
$smsFactory = new SmsAlertContentFactory();
$smsContent = $smsFactory->createContent();
echo "Contenu d'alerte par SMS : " . $smsContent->getContent() . "\n";
