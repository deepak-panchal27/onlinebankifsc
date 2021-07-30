<?php

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    switch ($pagename) {
		case 'index':
			$title = "Find Bank IFSC | Find MICR Code | Bank Branch Details";
            $description = "Find All India Bank IFSC Code Online using Bank Branch Details. State Bank of India SBI Punjab National Bank PNB HDFC Bank ICICI Bank Allahabad Bank YES Bank";
            break;
    
		case 'bank-list':
			$title = "List of All Banks in India | All bank names | Search Bank Name";
            $description = "List of All Banks in India arranged alphabetically. Select State, district and branch name to get full details. Visit onlinebankifsc.com homepage for more";
            break;
    
		case 'state':
			$title = "Find IFSC Code of ".$bank_name;
            $description = "Find ".$bank_name." IFSC and MICR Code using Bank Branch Details online. Get complete address and contact information of every ".$bank_name." Branch in India";
            break;
    
		case 'district':
			$title = $state_name." State all IFSC Codes of ".$bank_name;
            $description = "Complete information of all ".$bank_name." branches in ".$state_name.". Get Branch's IFSC Code, MICR Code, Contact details and full address";
            break;

		case 'branch':
			$title = $district_name." District IFSC Codes of ".$bank_name;
            $description = "Information of all ".$bank_name." branches in ".$state_name."'s ".$district_name." district. Get Branch's IFSC Code, MICR Code, Contact details and address";
            break;
    
		case 'details':
			$title = $branch_name. " Branch " .$bank_name." IFSC Code and all details";
            $description = $bank_name." ".$branch_name." branch's IFSC Code, MICR Code, Contact details and full address. Find All India bank branch details from our home page.";
            break;
    
		case 'search-bank':
			$title = "Using IFSC Code find Bank Branch Details | Contact Number | Address";
			$description = "Find All India Bank Branch details Online using Bank Branch IFSC Code. State Bank of India SBI, Punjab National Bank PNB, HDFC, ICICI, Bank of India BOI, BOB";
			break;
			
		case 'about':
			$title = 'Find Bank IFSC | Find MICR Code | Contact Details | Address';
			$description = "IFSC and MICR Code Finder using Bank Branch Address and finding Bank Branch Details using IFSC Code. Blogs on Fund Transfer, IFSC, MICR, NEFT, IMPS and RTGS";
			break;	

		case 'contact':
			$title = "Contact Detail of Online Bank IFSC";
			$description = "Contact us on our email id onlinebankifsc@gmail.com for any grievances or feedback. We look forward to hearing from our users.";
			break;

		case 'privacy-policy':
			$title = "Online Bank IFSC Privacy Policy";
			$description = "This privacy policy describes the policies followed by Online Bank IFSC. Read our privacy policy to understand better.";
			break;

		case 'blogs':
			$title = "Using IFSC Code find Bank Branch Details | Contact Number | Address";
			$description = "Find All India Bank Branch details Online using Bank Branch IFSC Code. State Bank of India SBI, Punjab National Bank PNB, HDFC, ICICI, Bank of India BOI, BOB";

	    case 'sbi':
			$title = "State Bank of India (SBI) - Blog";
			$description = "Find All India Bank Branch details Online using Bank Branch IFSC Code. State Bank of India SBI, Punjab National Bank PNB, HDFC, ICICI, Bank of India BOI, BOB";

		default:
			$title = "Find Bank IFSC | Find MICR Code | Bank Branch Details";
            $description = "Find All India Bank IFSC Code Online using Bank Branch Details. State Bank of India SBI Punjab National Bank PNB HDFC Bank ICICI Bank Allahabad Bank YES Bank";
            break;
    }
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description;?>" />
<meta name="keywords" content="IFSC Code, SBI IFSC Code, Bank IFSC Code, ifsc, hdfc ifsc code, axis bank ifsc code, canara bank ifsc code, ifsc code search, indian bank ifsc code, ifsc full form, allahabad bank ifsc code, pnb ifsc code, micr code, punjab national bank ifsc code, icici bank ifsc code, sbi branch code, sbi bank ifsc code, union bank ifsc code, syndicate bank ifsc code, andhra bank ifsc code, hdfc bank ifsc code, uco bank ifsc code, kotak mahindra bank ifsc code, NEFT, RTGS, IMPS, Bank Near Me" />
<meta name="Author" content="OnlineBankIFSC.com" />

<!-- OG Share Properties -> Start -->
<meta property="og:url" content="https://onlinebankifsc.com/" /> 
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:image" content="https://onlinebankifsc.com/images/100x100.png" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="onlinebankifsc">
<meta property="og:locale" content="en_US"/>
<!-- End <- OG Share Properties -->

<!-- Twitter Share Properties -> Start -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@onlinebankifsc" />
<meta name="twitter:creator" content="@onlinebankifscteam" />
<meta name="twitter:url" content="https://onlinebankifsc.com/" />
<meta name="twitter:title" content="<?php echo $title; ?>"/>
<meta name="twitter:description" content="<?php echo $description; ?>" />
<meta name="twitter:image:src" content="https://onlinebankifsc.com/images/100x100.png" />
<!-- End <- Twitter Share Properties -->

<!-- Canonical Notification -> Start -->
<link rel="canonical" href="<?php echo $actual_link;?>" />
<!-- End <- Canonical Notification -->

<!-- WebPage Schema -> Start -->
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebPage",
		"name": "<?php echo $title; ?>",
		"description": "<?php echo $description; ?>",
		"url" : "<?php echo $actual_link;?>",
		"publisher": {
			"@type": "Organization",
			"name": "Online Bank IFSC",
			"url" : "https://onlinebankifsc.com/",
			"logo" : {
				"@type": "ImageObject",
				"contentUrl": "https://onlinebankifsc.com/images/100x100.png"
			}
		}
	}
</script>
<!-- End <- WebPage Schema -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177066746-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-177066746-1');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->