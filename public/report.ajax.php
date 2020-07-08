<?php
include_once "../private/init.php";

require '../vendor/autoload.php';


$pdf = new \Mpdf\Mpdf();

$data = "
<table>
    <tr>
        <th>Description</th>
        <th>Cost</th>
        <th>Author</th>
        <th>Date Added</th>
        <th>Type</th>
    </tr>
";

if (isset($_POST['submit'])) {

    $dateFrom = $_POST['dateFrom'] ?: '';
    $dateTo = $_POST['dateTo'] ?: '';
    $type = $_POST['type'] ?: '';

    global $db;
    $sql = "SELECT * FROM budget  WHERE date BETWEEN '$dateFrom' AND '$dateTo' AND type = '$type' ";
    $result = $db->pdoQuery($sql)->aResults;

    if (!empty($result)) {
        foreach ($result as $r) {
            extract($r);
            $data .= "<tr>
                <td>$description</td>
                <td>$cost</td>
                <td>$author</td>
                <td>$date</td>
                <td>$type</td>
            </tr>";
        }
    } else {
        redirect_to(url_for('/report.php?error=1'));
    }
}

$data .= "</table>";


$pdf->WriteHTML($data, \Mpdf\HTMLParserMode::HTML_BODY);

$pdf->Output("report.pdf", 'd');
