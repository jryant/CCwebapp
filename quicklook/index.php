<?php 

include('../includes/header.php');
include('../includes/functions.php');

$page = (isset($_GET['p'])) ? $_GET['p'] : "about" ;

if(isset($page)){
	// include("pages/$page.php");
}

$_SESSION['c_name'] = "";
$_SESSION['c_email'] = "";
$_SESSION['c_phone'] = "";
$_SESSION['c_job_title'] = "";
$_SESSION['c_company'] = "";
$_SESSION['c_company_rel'] = "";
$_SESSION['s_rel'] = "";
$_SESSION['c_address'] = "";

$_SESSION['s_issue_desc'] = "";
$_SESSION['s_salt_exp'] = "";
$_SESSION['s_salt_exp_notes'] = "";
$_SESSION['s_year'] = "";
$_SESSION['s_year_notes'] = "";
$_SESSION['s_address'] = "";
$_SESSION['s_purpose'] = "";
$_SESSION['s_cur_use'] = "";
$_SESSION['s_first_noticed'] = "";
$_SESSION['s_other_probs'] = "";
$_SESSION['s_why_prob'] = "";

$_SESSION['s_photos'] = "";

$_SESSION['case_num'] = "";

var_dump($_SESSION);

include("includes/footer.php");

?>