<?php
include("../connection.php");

$bank_name = str_replace('-', ' ', mysqli_real_escape_string($conn, $_GET['bank_name']));
$state_name = str_replace('-', ' ', mysqli_real_escape_string($conn, $_GET['state_name']));
$district_name = str_replace('-', ' ', mysqli_real_escape_string($conn, $_GET['district_name']));

$query = "SELECT * FROM data WHERE name='$bank_name' AND state='$state_name' AND district='$district_name' GROUP BY branch";

$result = mysqli_query($conn, $query);

$total_records = mysqli_num_rows($result);

if ($total_records == 0) {
  echo "<option>No records found</option>";
}
$data = array();

while ($run = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  $data[] = array("id"=>md5($run['id']), "value"=>$run['branch']);
}
echo json_encode($data);
?>
