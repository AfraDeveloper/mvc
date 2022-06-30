<?php

namespace export;

interface ExportableDocumentInterface
{
    public function export(Document $document);
}