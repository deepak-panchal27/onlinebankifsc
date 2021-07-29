<?php 

$pagename = "index";

include("./header.php"); 
?>
	<br>
	<div class="container">
		<div class="box">
			<h1 class="h1">
				<span>Online Bank IFSC</span>
			</h1>
			<h2 class="h1">
				<span>Find IFSC and MICR Code for Banks in India</span>
			</h2>
		</div>
	</div>
	<br><br>
	<div class="container">

		<div class="row">
			<script>
				$(document).ready(function() {
					if (IsMobile) {
						$('.searchbox').addClass('col-sm-12');
					}
				});
			</script>
			<div class="col-sm-8 searchbox">
				<div class="table-responsive table-home" id="searchBox">
					<table class="table">
						<tbody>
							<tr>
								<td class="bold">Bank</td>
								<td>
									<div id="bank">
										<?php
										$result = mysqli_query($conn, "SET NAMES utf8mb4");
										$result = mysqli_query($conn, "SELECT * FROM bank_names ORDER BY name ASC");
										echo '<div>';
										echo '<select class="mdb-select md-form select1 bank"><option value="" disabled selected>Select Bank</option>';
										while ($run = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
											echo "<option value='" . $run['name'] . "'>" . $run['name'] . "</option>";
										}
										echo '</select></div>';
										?>
									</div>
								</td>
							</tr>
							<tr>
								<td class="bold">State</td>
								<td>
									<div id="state">
										<div>
											<select class="mdb-select md-form select1 state" data-select2-id="state" disabled>
												<option value="" disabled selected>Select Bank Above First</option>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="bold">District</td>
								<td>
									<div id="district">
										<div>
											<select class="mdb-select md-form select1 district" data-select2-id="district" disabled>
												<option value="" disabled selected>Select State Above First</option>
											</select>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="bold">Branch</td>
								<td>
									<div id="branch">
										<div>
											<select class="mdb-select md-form select1 branch" data-select2-id="branch" disabled>
												<option value="" disabled selected>Select District Above First</option>
											</select>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					if (IsMobile) {
						$('.mrec').addClass('dnone');
					}
				});
			</script>
			<div class="col-sm-4 mrec">
			</div>
		</div>
		<br>
		<div class="row">
			<div id="details">
			</div>
		</div>
	</div>
	<div class="center">
	<span>To easily access in future, bookmark this page by pressing Ctrl+D or tapping "Star Symbol" in the url bar.</span>
	</div>
	<br>
	<div class="box">
		<h1 class="Header h1">Everything you should know about Banking Codes and Online Fund Transfer</h1>
		<p>With technological advancement happening every day, financial institutions are also taking steps toward internet banking. Now customers can do their financial transactions using the internet. For such transactions, customers should know some banking codes such as IFSC Code and MICR Code. These codes are important while doing financial transactions through different processes like NEFT, RTGS, and IMPS.</p>
		<ol class="centered">
			<li><a href="#How-to-find-IFSC-Code-for-my-bank-using-the-search-tool">How to find IFSC Code for my bank using the search tool?</a></li>
			<li><a href="#How-to-find-my-Bank-Branch-Details-using-IFSC-Code">How to find my Bank Branch Details using IFSC Code?</a></li>
			<li><a href="#What-is-IFSC-Code-and-what-it-signifies">What is IFSC Code and what it signifies?</a></li>
			<li><a href="#What is MICR Code and what it signifies?">What is MICR Code and what it signifies?</a></li>
			<li><a href="#NEFT-Fund-Transfer-using-IFSC-Code">NEFT Fund Transfer using IFSC Code</a></li>
			<li><a href="#RTGS-Fund-Transfer-using-IFSC-Code">RTGS Fund Transfer using IFSC Code</a></li>
			<li><a href="#Fund-transfer-using-IMPS">Fund transfer using IMPS</a></li>
		</ol>
		<h4 class="Header" id="How-to-find-IFSC-Code-for-my-bank-using-the-search-tool">How to find IFSC Code for my bank using the search tool?</h4>
		<p>Keep your Bank Name, State Name, District Name, and Branch Name handy.</p>
		<div class="schema-how-to wp-block-yoast-how-to-block">
			<p class="schema-how-to-total-time"><span class="schema-how-to-duration-time-text">Time needed: </span>1 minute. </p>
			<p class="schema-how-to-description">You can search the IFSC Code for your Bank Branch using the following steps</p>
			<ol class="schema-how-to-steps centered">
				<li class="schema-how-to-step" id="how-to-step-1598458526153"><strong class="schema-how-to-step-name">Bank Name</strong>
					<p class="schema-how-to-step-text"><strong>Select Bank Name</strong> using the search bar or select from the drop-down.</p>
				</li>
				<li class="schema-how-to-step" id="how-to-step-1598458551402"><strong class="schema-how-to-step-name">State Name</strong>
					<p class="schema-how-to-step-text">After selecting your Bank Name, <strong>select State Name</strong> using the search bar or select from the drop-down.</p>
				</li>
				<li class="schema-how-to-step" id="how-to-step-1598458576881"><strong class="schema-how-to-step-name">District Name</strong>
					<p class="schema-how-to-step-text">After selecting your State Name, <strong>select District Name</strong> using the search bar or select from the drop-down.</p>
				</li>
				<li class="schema-how-to-step" id="how-to-step-1598458577489"><strong class="schema-how-to-step-name">Branch Name</strong>
					<p class="schema-how-to-step-text">After selecting your District Name, <strong>select Branch Name</strong> using the search bar or select from the drop-down.</p>
				</li>
			</ol>
		</div>
		<p>Your IFSC Code for the respective branch would then be displayed at the bottom. You can then copy the IFSC Code using the “COPY Text” Button next to the IFSC Code.</p>
		<p><a href="#searchBox">Click here to use this tool.</a></p>
		<p>Example: If you wish to find the IFSC Code for the below details.&nbsp;</p>
		<p>Bank Name: Punjab National Bank, State: Maharashtra, District: Mumbai, Branch: Mumbai, Opera House.</p>
		<p>Then you can fill the details as instructed above and the IFSC Code of the branch would be displayed below, viz. PUNB0006700</p>
		<h4 class="Header" id="How-to-find-my-Bank-Branch-Details-using-IFSC-Code">How to find my Bank Branch Details using IFSC Code?</h4>
		<p>Keep your IFSC Code handy.</p>
		<p>You can search your Bank Branch Details with the help of your IFSC Code using the following steps.</p>
		<ol class="centered">
			<li><strong>Select “Search by IFSC Code”</strong> on top of our Home Page</li>
			<li>Type/paste your IFSC code in the box.</li>
			<li>Click Submit</li>
		</ol>
		<p>Your Bank Branch details would then be displayed below. The details would include</p>
		<p><strong>State</strong> Name, <strong>District</strong> Name in which your bank branch is located, <strong>Branch</strong> Name, <strong>MICR</strong> Code (if available) <strong>Contact</strong> <strong>Number</strong> of the branch, and <strong>Address</strong> of the Branch.</p>
		<p><a href="https://onlinebankifsc.com/search-bank">Click here to use this tool.</a></p>
		<p>Example: If you wish to find Bank Branch details for IFSC Code: HDFC0000001, then put this code in the box and click submit. The following details would be displayed.</p>
		<p>State MAHARASHTRA</p>
		<p>District GREATER MUMBAI</p>
		<p>Branch TULSIANI CHMBRS - NARIMAN PT</p>
		<p>MICR Code 400240003</p>
		<p>Contact 9890603333</p>
		<p>Address 101-104 TULSIANI CHAMBERSFREE PRESS JOURNAL MARGNARIMAN POINT MUMBAI MAHARASHTRA 400 021</p>
		<h4 class="Header" id="What-is-IFSC-Code-and-what-it-signifies">What is IFSC Code and what it signifies?</h4>
		<p>In the Indian Banking system, every bank branch has a unique identification code. This code is known as IFSC Code. The full form is “The Indian Financial System Code”. It consists of 11 alphanumeric characters. This code is allotted by the Reserve Bank of India (RBI) to the respective Bank. </p>
		<p>You can find your bank branch’s IFSC Code on your checkbook or bank passbook. You can also find using our search tool <a href="#searchBox">here</a></p>
		<p>The first four digits signify bank name, the fifth digit is Zero (0) and the last six digits are branch code. IFSC code is required during fund transfer using online means like NEFT, RTGS, or IMPS. You require the IFSC Code of the recipient's bank branch. It helps in reducing errors and frauds in the online transfer of funds.</p>
		<p>Example: IFSC Code: SBIN0001537. This is the IFSC code of State Bank of India’s Branch. And 001537 is the branch code of the Connaught Place Branch of SBI in New Delhi.</p>
		<h4 class="Header" id="What is MICR Code and what it signifies?">What is MICR Code and what it signifies?</h4>
		<p>MICR Code stands for Magnetic Ink Character Recognition. It’s a nine-digit code printed at the bottom of cheque leaves and is used in ECS (Electronic Clearing System). This is used to identify the authenticity of cheques. It can be read by humans and machines. Each Bank Branch has a unique MICR Code which helps RBI identify the same. The first 3 digits are the city code, the next 3 are bank code and the last 3 are bank branch code.</p>
		<p>Example: 110002087. Here 110 is city code, 002 is State bank of India’s Code and 087 is the branch code</p>
		<p>Search IFSC and MICR codes of every bank branch in India.</p>
		<p>We regularly update our databases. We collect data from RBI (Reserve Bank of India). Even though we make all the efforts to provide you with accurate data, there can be a case where a human error might have occurred. In such a situation, we request you to help us by highlighting our mistake by sending us an email at <a href="mailto:onlinebankifsc@gmail.com"><strong>onlinebankifsc@gmail.com</strong></a>. We appreciate your time in writing us an email. You can also share your suggestion for improving the website.</p>
		<h4 class="Header" id="NEFT-Fund-Transfer-using-IFSC-Code">NEFT Fund Transfer using IFSC Code</h4>
		<p>National Electronic Fund Transfer (NEFT) is an electronic way of transferring between two registered banks. The system is maintained by RBI. It is not a real-time transfer. The money is transferred in batches. Few banks have a limit on the maximum amount of money that can be transferred, however, there is no limit as such set by RBI.</p>
		<h5>Procedure to transfer money using NEFT:</h5>
		<ol class="centered">
			<li>Check whether your bank has NEFT enabled. Generally, most banks have it enabled but you still can check on RBI’s website.</li>
			<li>Complete the Net Banking registration process with the bank and have a user id and password with you.</li>
			<li>Once logged in, you have to create a beneficiary for every new account to which you wish to transfer money. To add a beneficiary, you should have the bank account number, IFSC of the bank branch (you can find it <a href="https://onlinebankifsc.com"><strong>here</strong></a>), and his/her name.</li>
			<li>Once you have added the beneficiary there is generally a waiting period ranging from a few minutes to hours depending upon the bank. After the waiting period, you can transfer the funds to the beneficiary.</li>
			<li>To transfer funds. Log in to your Net Banking Account. Click on fund transfer and select the beneficiary from the list. Enter the amount you wish to send and then verify the transaction using OTP (One Time Password) you would receive on your registered mobile number with the bank.</li>
			<li>The the amount would be transferred during the next settlement batch of NEFT.</li>
		</ol>
		<p>The NEFT service is available during Bank Working Hours and not at night or bank holidays. Changes of NEFT can range from Rs 2.5 to Rs 25 (+ Service Tax).</p>
		<h4 class="Header" id="RTGS-Fund-Transfer-using-IFSC-Code">RTGS Fund Transfer using IFSC Code.</h4>
		<p>Real-Time Gross Settlement (RTGS) is similar to that of NEFT. The only difference being that RTGS is for an amount more than Rs 2 Lac and it is real-time. The fund reaches the beneficiary account in less than 30minutes. There is no upper limit on the amount which can be transferred using RTGS.</p>
		<p>The procedure is the same as NEFT.</p>
		<p>For Fund Transfer up to Rs 5 Lac, it may cost you approx. Rs 35. And for Funds more than 5 Lac, it can be approx. Rs 55</p>
		<h4 class="Header" id="Fund-transfer-using-IMPS">Fund transfer using IMPS</h4>
		<p>The Immediate Payment Service (IMPS) is an instant online fund transferring system that works 24 X 7. You don’t necessarily need to add a beneficiary if you are using Mobile Banking to use IMPS services. It depends on Bank to Bank.&nbsp;</p>
		<p>The procedure is the same as any other online transfer service. You need to log in to your net banking or mobile banking. You will need the beneficiary's name, bank account number, and IFSC. If you are using the mobile app of your bank you will also need MMID (Mobile Money Identifier Code). This Code will be issued by your bank to you when you register for mobile banking.</p>
		<p>Charges for IMPS services are generally Rs 5 for up to Rs 1 Lac and Rs 15 for Rs 1 Lac to 2 Lac. The charges vary from bank to bank.</p>
		<p>References</p>
		<p><a href="https://www.rbi.org.in/SCRIPTs/AboutUsDisplay.aspx?pg=AnnualPublications.htm" target="_blank" rel="noreferrer noopener">Reserve Bank of India</a></p>


	</div>
	<script>
<?php include("./js/script.js"); ?>
	</script>
<?php include("./footer.php"); ?>