<?php

namespace EsgiIw\TpDesignPattern\Model;

class MailBuilder
{
    private $mail;

    public function __construct(string $to, string $subject, string $message)
    {
        $this->mail = new Mail($to, $subject, $message);
    }

    public function setCc(string $cc): self
    {
        $this->mail->setCc($cc);
        return $this;
    }

    public function addAttachment(string $attachment): self
    {
        $this->mail->addAttachment($attachment);
        return $this;
    }

    public function build(): Mail
    {
        return $this->mail;
    }
}