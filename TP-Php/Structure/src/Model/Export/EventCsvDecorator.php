<?php

namespace EsgiIw\TpDesignPattern\Model\Export;

use EsgiIw\TpDesignPattern\Model\Event;

class EventCsvDecorator implements EventDecorator
{
    private $csvExporter;

    public function __construct(CsvExport $csvExporter)
    {
        $this->csvExporter = $csvExporter;
    }

    public function exportEvent(Event $event): string
    {
        // Décorateur pour exporter un événement au format CSV
    }
}