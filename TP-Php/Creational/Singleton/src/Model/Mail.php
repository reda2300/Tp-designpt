<?php

namespace EsgiIw\TpDesignPattern\Model;

class Mail
{
    private $to;
    private $cc;
    private $subject;
    private $message;
    private $attachments;

    public function __construct(string $to, string $subject, string $message)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->attachments = [];
    }

    public function setCc(string $cc): void
    {
        $this->cc = $cc;
    }

    public function addAttachment(string $attachment): void
    {
        $this->attachments[] = $attachment;
    }

   // getters
?>