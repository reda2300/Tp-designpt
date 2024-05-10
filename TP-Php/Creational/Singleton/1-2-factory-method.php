<?php

require_once 'src/Model/LoginAlertInterface.php';
require_once 'src/Model/LogLoginAlert.php';
require_once 'src/Model/LogLoginAlertFactory.php';
require_once 'src/Model/DatabaseLoginAlert.php';
require_once 'src/Model/DatabaseLoginAlertFactory.php';
require_once 'src/Model/MailLoginAlert.php';
require_once 'src/Model/MailLoginAlertFactory.php';

use EsgiIw\TpDesignPattern\Model\LogLoginAlertFactory;
use EsgiIw\TpDesignPattern\Model\DatabaseLoginAlertFactory;
use EsgiIw\TpDesignPattern\Model\MailLoginAlertFactory;

// Utilisation de la factory pour l'alerte de connexion par log
$logFactory = new LogLoginAlertFactory();
$logAlert = $logFactory->createAlert();
$logAlert->sendAlert("UtilisateurA");

// Utilisation de la factory pour l'alerte de connexion par base de données
$databaseFactory = new DatabaseLoginAlertFactory();
$databaseAlert = $databaseFactory->createAlert();
$databaseAlert->sendAlert("UtilisateurB");

// Utilisation de la factory pour l'alerte de connexion par e-mail
$mailFactory = new MailLoginAlertFactory();
$mailAlert = $mailFactory->createAlert();
$mailAlert->sendAlert("UtilisateurC");
