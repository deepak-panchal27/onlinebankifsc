<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');

$branch_id = mysqli_real_escape_string($conn, str_replace('-', ' ', $_REQUEST['id']));

$result = mysqli_query($conn, "SET NAMES utf8mb4");
$result = mysqli_query($conn, "SELECT * FROM data WHERE md5(id)='$branch_id'");
$run = mysqli_fetch_array($result, MYSQLI_ASSOC);

$pagename = "details";
$bank_name = $run['name'];
$branch_name = $run['branch'];
$heading = "$run[name] - $run[branch] - IFSC Code, MICR, Contact Number, Address";

require_once ($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
?>
	<br>
	<div class="container">
		<div class="box">
			<h1 class="Header h1"><?php echo $heading; ?></h1>
				<div class="row">
					<div class="col-sm-6">
						<table class="maxwidth">
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
								<td><input type="text" value="<?php echo $run['ifsc']; ?>" id="myInput"><button onclick="myFunction()" class="copybutton">Copy IFSC Code</button></td>
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
						<table class="maxwidth">
							<tr>
								<th>Address</th>
								<td><textarea class="addresstextarea"><?php echo "$run[address]"; ?></textarea></td>
							</tr>
						</table>
					</div>
				</div>
		</div>
	</div>
	<br>
	<script>
		function myFunction() {
			var copyText = document.getElementById("myInput");
			copyText.select();
			copyText.setSelectionRange(0, 99999)
			document.execCommand("copy");
		}
	</script>
<?php require_once (PROJECT_PATH."footer.php"); ?>