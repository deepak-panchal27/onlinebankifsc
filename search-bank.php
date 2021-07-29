<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/connection.php');

$pagename = "search-bank";

$ifsc_textbox = '';
if (isset($_POST['ifsc_textbox'])) {
	$ifsc_textbox = $_POST['ifsc_textbox'];

	$result = mysqli_query($conn, "SET NAMES utf8mb4");
	$result = mysqli_query($conn, "SELECT * FROM data WHERE ifsc='$ifsc_textbox'");
	$run = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$title = "Bank branch details of IFSC Code ".$run['ifsc']." | Contact Details | Address";
	$description = $run['ifsc']." IFSC Code Bank Branch Information. MICR Code, Contact details and full
	address. Find All India bank branch details from our home page.";

	$heading = $run['name']. "-" .$run['branch']. "- MICR, Contact Number, Address";
}


require_once ($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
?>
	<br>
	<div class="container">
		<div class="row">
			<script>
				$(document).ready(function() {
					if (IsMobile) {
						$('.search').addClass('col-sm-12');
					}
				});
			</script>
			<div class="col-sm-8 search">
				<form id='form' onsubmit="return validateForm()" method="post">
				<h1 class="h1 searchbank">Enter IFSC Code:</h1>
					<input type="text" name="ifsc_textbox" class="ifsc_textbox" value="<?php echo $ifsc_textbox ?>" />
					<input id='submit' type="submit" name="submit" />
				</form>
				<?php
				if (isset($run['branch'])) {?>
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
					<td><textarea class="addresstextarea"><?php echo $run['address']; ?></textarea></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php
					
				} else {
					if ($ifsc_textbox != '') {
						echo "<div>No record found</div>";
					}
				}
				?>
			</div>
			<div class="col-sm-4 mrec">
			</div>
		</div>
		<script>
			function validateForm() {
				var x = document.querySelector('.ifsc_textbox').value;
				if (x == "") {
					alert("Please enter IFSC code");
					return false;
				}
			}
		</script>
	</div>
	<br>
	<?php
	require_once(PROJECT_PATH."footer.php")
	?>