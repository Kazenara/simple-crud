<?php
require ("koneksi.php");
header('Content-Type: application/json');

$sqlQuery = "SELECT sample_jual.id_user, 
sample_jual.jml_jual, user_detail.username 
FROM sample_jual INNER JOIN user_detail 
ON sample_jual.id_user = user_detail.id;";
// echo $sqlQuery;
$result = mysqli_query($koneksi,$sqlQuery);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

mysqli_close($koneksi);

echo json_encode($data);
?>