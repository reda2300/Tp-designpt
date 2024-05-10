<?php

require_once 'src/Model/MailBuilder.php';
require_once 'src/Model/Mail.php';

use EsgiIw\TpDesignPattern\Model\MailBuilder;

// Utilisation du Builder pour créer un mail
$mail = (new MailBuilder('destinataire@example.com', 'Sujet du mail', 'Contenu du mail'))
            ->setCc('copie@example.com')
            ->addAttachment('piece_jointe.pdf')
            ->build();

// Affichage des détails du mail créé
echo "Mail destiné à : " . $mail->getTo() . "\n";
echo "Copie à : " . $mail->getCc() . "\n";
echo "Sujet : " . $mail->getSubject() . "\n";
echo "Message : " . $mail->getMessage() . "\n";
echo "Pièces jointes : " . implode(", ", $mail->getAttachments()) . "\n";
