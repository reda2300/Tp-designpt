<?php

namespace EsgiIw\TpDesignPattern\Model\Export;

use EsgiIw\TpDesignPattern\Model\Event;

class EventJsonDecorator implements EventDecorator
{
    private $jsonExporter;

    public function __construct(JsonExport $jsonExporter)
    {
        $this->jsonExporter = $jsonExporter;
    }

    public function exportEvent(Event $event): string
    {
        // Décorateur pour exporter un événement au format JSON
    }
}