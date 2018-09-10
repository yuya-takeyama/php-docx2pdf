<?php

include 'vendor/autoload.php';

\PhpOffice\PhpWord\Settings::setPdfRendererPath('vendor/tecnickcom/tcpdf');
\PhpOffice\PhpWord\Settings::setPdfRendererName('TCPDF');

if (isset($argv[1])) {
    $temp = \PhpOffice\PhpWord\IOFactory::load($argv[1], 'Word2007');
    $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($temp , 'PDF');
    $xmlWriter->save('result.pdf', true);
    error_log("Saved: result.pdf");
} else {
    error_log("Usage: $ php ${argv[0]} FILE.docx");
    exit(1);
}
