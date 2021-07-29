<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');

$bank_name = str_replace('-', ' ', mysqli_real_escape_string($conn, $_GET['bank_name']));

$query = "SELECT * FROM data WHERE name='$bank_name' GROUP BY state";

$result = mysqli_query($conn, $query);

$total_records = mysqli_num_rows($result);

if ($total_records == 0) {
  echo "<option>No records found</option>";
}
$data = array();
while ($run = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $data[] = array("bankname"=>$run['name'],"value"=>$run['state']);
}
echo json_encode($data);
?>