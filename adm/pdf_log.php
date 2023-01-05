<?php
include_once("../dompdf/autoload.inc.php"); 
include_once("../controller/config.php"); 
$html = '<table';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>ID do usuario</th>';
$html .= '<th>Data e Hora</th>';
$html .= '<th>Ação</th>';
$html .= '<th>Status</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';



$query_log = "SELECT * FROM logs";
$result_log = mysqli_query($conexao, $query_log); 
while ($log = mysqli_fetch_assoc($result_log)) { 
	$html .= '<tr><td>' . $log['id'] . "</td>";
	$html .= '<td>' . $log['log_data'] . "</td>";
	$html .= '<td>' . $log['log_acao'] . "</td>";
	$html .= '<td>' . $log['log_status'] . "</td>";
}

$html .= '</tbody>';
$html .= '</table';

use Dompdf\Dompdf; //aqui ele chama a biblioteca que sera usada para baixar pdfs

$dompdf = new DOMPDF(); //aqui essa biblioteca é instanciada

$dompdf->load_html('
			<h1 style="text-align: center;">Logs do Sistema</h1>
			' . $html . '
		');

$dompdf->render(); 

$dompdf->stream(
	"logs_telecall.pdf",
	array(
		"Attachment" => true
	)
);
?>