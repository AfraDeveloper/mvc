<?php

namespace export;

class PdfExportDocument implements ExportableDocumentInterface
{
    public function export(Document $document)
    {
        echo "DOCUMENT EXPORTED TO PDF" . PHP_EOL;
        echo "Title: " . $document->getTitle() . PHP_EOL;
        echo "Content: " . $document->getContent() . PHP_EOL . PHP_EOL;
    }
}