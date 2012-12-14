<?php

check_session();

// var_dump($_POST);
// foreach($_POST as $key=>$value){
// 	echo $key." - ".$value."<br>";
// }
// echo "<hr>";

$pnames = $_POST['pnames'];
// var_dump($pnames);
// die();

// echo "<hr>";

foreach($pnames as $key=>$value){
	$pos = strpos($value,'.');
	$val = substr($value, 0, $pos);
	$photo_ext = substr($value, $pos);
	$photo_names[$val] = $_POST['pdesc-'.$val];
	$photo_exts[$val] = $photo_ext;
	// unset($_POST['pdesc-'.$value]);
}

// if(isset($_SESSION['photos'])){
// 	$_SESSION['photos'] = array_merge($_SESSION['photos'],$photo_names);
// 	$_SESSION['photo_exts'] = array_merge($_SESSION['photo_exts'],$photo_exts);
// } else {
	$_SESSION['photos'] = $photo_names;
	$_SESSION['photo_exts'] = $photo_exts;
// }

// var_dump($_SESSION['photos']);
// echo "<hr>";
// var_dump($_SESSION['photo_exts']);

unset($_POST['pnames']);
// unset($_SESSION['pnames']);

// echo "<hr>";

ql_add_input($_POST);

$c_name = $_SESSION['c_name'];
$c_email = $_SESSION['c_email'];
$c_phone = $_SESSION['c_phone'];
$c_job_title = $_SESSION['c_job_title'];
$c_company = $_SESSION['c_company'];
$c_company_rel = $_SESSION['c_company_rel'];
$s_rel = $_SESSION['s_rel'];
$c_address = $_SESSION['c_address'];

$s_issue_desc = $_SESSION['s_issue_desc'];
$s_salt_exp = $_SESSION['s_salt_exp'];
$s_salt_exp_notes = $_SESSION['s_salt_exp_notes'];
$s_year = $_SESSION['s_year'];
$s_year_notes = $_SESSION['s_year_notes'];
$s_address = $_SESSION['s_address'];
$s_purpose = $_SESSION['s_purpose'];
$s_cur_use = $_SESSION['s_cur_use'];
$s_first_noticed = $_SESSION['s_first_noticed'];
$s_other_probs = $_SESSION['s_other_probs'];
$s_why_prob = $_SESSION['s_why_prob'];

// var_dump($_SESSION['photos']);

?>

<h1>Payment</h1>

<div class="qlform">

<p><strong>Please confirm the information below before submiting your case for processing.</strong></p>
<p class="ql_prev"><input type="button" value="Go Back" onClick="parent.location='index.php?page=quicklook&step=3'"></p>

<h2>About You</strong></h2>
<ul class="col1">
	<li>Name: <span class="ans"><?php echo $c_name; ?></span></li>
	<li>Email address: <span class="ans"><?php echo $c_email; ?></span></li>
	<li>Phone number: <span class="ans"><?php echo $c_phone; ?></span></li>
	<li>Mailing address: <br/><span class="ans"><?php echo $c_address; ?></span></li>
</ul>
<ul class="col2">
	<li>Job title: <span class="ans"><?php echo $c_job_title; ?></span></li>
	<li>Company: <span class="ans"><?php echo $c_company; ?></span></li>
	<li>Company role/relationship: <span class="ans"><?php echo $c_company_rel; ?></span></li>
	<li>Relationship to structure: <span class="ans"><?php echo $s_rel; ?></span></li>
</ul>

<h2>About the Structure</strong></h2>
<ul>
	<li>Description of the issue: <span class="ans"><?php echo $s_issue_desc; ?></span></li>
	<li>Salt exposure: <span class="ans"><?php echo $s_salt_exp; ?></span></li>
	<li>More information: <span class="ans"><?php echo $s_salt_exp_notes; ?></span></li>
	<li>Approximate year built: <span class="ans"><?php echo $s_year; ?></span></li>
	<li>More information: <span class="ans"><?php echo $s_year_notes; ?></span></li>
	<li>Address: <br/><span class="ans"><?php echo $s_address; ?></span></li>
	<li>Intended purpose when built: <span class="ans"><?php echo $s_purpose; ?></span></li>
	<li>Current use: <span class="ans"><?php echo $s_cur_use; ?></span></li>
	<li>When was the problem first noticed? <span class="ans"><?php echo $s_first_noticed; ?></span></li>
	<li>Any other problems with the structure or in the area? <span class="ans"><?php echo $s_other_probs; ?></span></li>
	<li>Why is it a problem? What is the underlying concern? <span class="ans"><?php echo $s_why_prob; ?></span></li>
</ul>

<h2>Photos</h2>

<?php

foreach ($_SESSION['photos'] as $key => $value) {
	echo '<div class="pcont"><img src="uploads/'.$_SESSION['id'].'/'.$key.$_SESSION['photo_exts'][$key].'" width="100" height="100"><p>'.$value.'</p></div>';
}

?>

<h2 style="clear:both;">Payment methods</h2>

<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:left;">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZQPUALSK3Z5DW">
<input type="image" style="border:0 !important;" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:left;">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3FGVBNK9FKMYG">
<input type="image" style="border:0 !important;" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payPalForm">
	<input type="hidden" name="custom" value="">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="no_note" value="1">
	<input type="hidden" name="business" value="<?php echo $paypal_account ?>">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="return" value="<?php echo $root; ?>/index.php?page=quicklook&step=5">
	<input name="item_name" type="hidden" id="item_name" value="QuickLook">
	<input name="amount" type="hidden" id="amount" value="<?php echo $ql_cost ?>">
	<input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
	<img alt="" border="0" width="1" height="1"	src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
 -->
<form name="ql1" enctype="multipart/form-data" action="<?php echo $root; ?>/index.php?page=quicklook&step=5" method="get" style="margin-top:4px;float:left;">
	<input type="hidden" name="page" value="quicklook">
	<input type="hidden" name="step" value="5">
	<input type="hidden" name="pay_status" value="cheque">
	<input type="submit" value="Pay by check" class="cheque_btn">
</form>

<div style="clear:both;"></div>

</div>