<?php
include("../connection.php");

$branch_id = mysqli_real_escape_string($conn, str_replace('-', ' ', $_GET['branch_id']));

$result = mysqli_query($conn, "SET NAMES utf8mb4");
$result = mysqli_query($conn, "SELECT * FROM data WHERE md5(id)='$branch_id'");
$run = mysqli_fetch_array($result, MYSQLI_ASSOC);

$title = "$run[name] - $run[branch] - IFSC Code, MICR, Contact Number, Address";
?>
<h4 class="Header"><?php echo $title; ?></h4>
	<div class="row">
		<div class="col-sm-6">
			<table style="width: 100%;">
				<tr>
					<th>State</th>
					<td><?php echo $run['state']; ?></td>
				</tr>
				<tr>
					<th>District</th>
					<td><?php echo $run['district']; ?></td>
				</tr>
				<tr>
					<th>Branch</th>
					<td><?php echo $run['branch']; ?></td>
				</tr>
				<tr>
					<th>IFSC Code</th>
					<td style='font-weight: bold; text-decoration: underline;'><input type="text" value="<?php echo $run['ifsc']; ?>" id="myInput" style="width: 120px;"><button onclick="myFunction()" style="margin-left: 10px;">Copy IFSC Code</button></td>
				</tr>
				<tr>
					<th>MICR Code</th>
					<td><?php echo $run['micr']; ?></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><?php echo $run['contact']; ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-6">
			<table style="width: 100%;">
				<tr>
					<th>Address</th>
					<td><textarea style='width:200px; height: 150px; resize: none;'><?php echo "$run[address]"; ?></textarea></td>
				</tr>
			</table>
		</div>
	</div>