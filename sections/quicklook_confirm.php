<?php

check_session();
ql_add_input($_POST);
create_case();
// $_SESSION['case_number'] = "QL-14141"; // temp

// var_dump($_SESSION);

$path = "uploads/".$_SESSION['case_number']."/";
// $path = "uploads/QL-14117/";

$contents = scandir($path);
if ($contents) {
	// echo "<ul>";
	foreach($contents as $key => $value) {
		if ($value == "." || $value == "..") {
	            unset($key);
	    } else {
	    	$old_name = $path.$value;
	    	$new_name = $path.$_SESSION['case_number']."-".$value;
	    	$result = rename($old_name,$new_name);
	    	// echo var_dump($result)."<br>";
	    	// echo "<li>".$path." - ".$value."</li>";
	  		$files_to_zip[] = $path.$_SESSION['case_number']."-".$value;
	  	}
	}
	// echo "</ul>";
}

$result = create_zip($files_to_zip,$path.$_SESSION['case_number'].'-photos.zip',true);
// var_dump($result);
$_SESSION['photos_zip'] = ($result) ? $root.'/'.$path.$_SESSION['case_number'].'-photos.zip' : 'error' ;

// echo '<a href="'.$root.'/'.$path.'photos.zip">'.$root.'/'.$path.'photos.zip</a>';

$debug = $_SESSION['case_number']."<br/>".$_SESSION['c_name']."<br/>".$_SESSION['c_email']."<br/>".$_SESSION['c_phone']."<br/>".$_SESSION['c_job_title']."<br/>".$_SESSION['c_company']."<br/>".$_SESSION['c_address']."<br/>".$_SESSION['c_company_rel']."<br/>".$_SESSION['s_rel']."<br/>".$_SESSION['s_rel_other']."<br/>".$_SESSION['s_issue_desc']."<br/>".$_SESSION['s_salt_exp']."<br/>".$_SESSION['s_salt_exp_notes']."<br/>".$_SESSION['s_year']."<br/>".$_SESSION['s_year_notes']."<br/>".$_SESSION['s_address']."<br/>".$_SESSION['s_purpose']."<br/>".$_SESSION['s_cur_use']."<br/>".$_SESSION['s_first_noticed']."<br/>".$_SESSION['s_other_probs']."<br/>".$_SESSION['s_why_prob']."<br/>".$_SESSION['photos_zip']."<br/>"."Not Paid (check)"."<br/>".$_SESSION["photos"];

// echo $debug;
echo "<script>console.log(\"".$debug."\");</script>";

if ($_GET['pay_status']=="cheque"){
	email_case($_SESSION['case_number'],$_SESSION['c_name'],$_SESSION['c_email'],$_SESSION['c_phone'],$_SESSION['c_job_title'],$_SESSION['c_company'],$_SESSION['c_address'],$_SESSION['c_company_rel'],$_SESSION['s_rel'],$_SESSION['s_rel_other'],$_SESSION['s_issue_desc'],$_SESSION['s_salt_exp'],$_SESSION['s_salt_exp_notes'],$_SESSION['s_year'],$_SESSION['s_year_notes'],$_SESSION['s_address'],$_SESSION['s_purpose'],$_SESSION['s_cur_use'],$_SESSION['s_first_noticed'],$_SESSION['s_other_probs'],$_SESSION['s_why_prob'],$_SESSION['photos_zip'],"Not Paid (check)",$_SESSION["photos"]);

	$msg = "<p>Thank you for using our Quick Look service. Please make checks payable to Cary Concrete Products with the case number (".$_SESSION['case_number'].") on the check. Mail to:</p>
		<p align=center>Cary Concrete Products
		<br>211 Dean St, Suite 1D
		<br>Woodstock, Illinois 60098</p>
	<p>When we receive the check we will send an email acknowledging receipt of your check. After that you should receive another email from us within 48 hours. Usually that email will contain your final report from us on the photos you submitted. Sometimes it will be our requesting further information from you. On occasion it will be an acknowledgement and will state an estimated time for us to complete your report.</p>";
}
else {
	email_case($_SESSION['case_number'],$_SESSION['c_name'],$_SESSION['c_email'],$_SESSION['c_phone'],$_SESSION['c_job_title'],$_SESSION['c_company'],$_SESSION['c_address'],$_SESSION['c_company_rel'],$_SESSION['s_rel'],$_SESSION['s_rel_other'],$_SESSION['s_issue_desc'],$_SESSION['s_salt_exp'],$_SESSION['s_salt_exp_notes'],$_SESSION['s_year'],$_SESSION['s_year_notes'],$_SESSION['s_address'],$_SESSION['s_purpose'],$_SESSION['s_cur_use'],$_SESSION['s_first_noticed'],$_SESSION['s_other_probs'],$_SESSION['s_why_prob'],$_SESSION['photos_zip'],"Paid with PayPal",$_SESSION["photos"]);
	
	$msg = "<p>Thank you for using our Quick Look service. You should receive a reply from us within 48 hours. Usually that reply will contain your final report from us on the photos you submitted. Sometimes it will be our requesting further information from you. On occasion it will be an acknowledgement that we have everything along with an estimated time for us to complete your report.</p>";
}

notify_c($_SESSION['c_name'],$_SESSION['c_email'],$_SESSION['case_number']);

?>

<h1>Thank You</h1>

<div class="qlform">

<?php

echo $msg;

// echo "Payment method: ".$_GET['pay_status']."<br />";
echo "<p>Case number: <span class=\"ans\">".$_SESSION['case_number']."</span></p>";

?>

</div>

<?php session_destroy(); ?>