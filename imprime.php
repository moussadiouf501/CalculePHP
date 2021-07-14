<?php

use Dompdf\Dompdf;
use Dompdf\options;

require_once 'dompdf/dompdf/autoload.inc.php';

ob_start();

require_once 'contenPDF.php';
$html = ob_get_contents();
ob_end_clean();



$options = new options();
$options->set ('defaultFont','courier')  ;

$domPdf = new Dompdf($options);

$domPdf->loadHTML($html);

$domPdf->setPaper('A4', 'portrait');

$domPdf->render();

$fichier = 'Résumé du QUIZZ';

$domPdf->stream($fichier);


?>