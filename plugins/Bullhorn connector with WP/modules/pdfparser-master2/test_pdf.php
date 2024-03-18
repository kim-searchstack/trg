<?php

include 'alt_autoload.php-dist';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile($pdf_path);
 
$text = $pdf->getText();
$ccc = $text;