<?php 
// if(!isset($_SESSION)){session_start();}

echo "<div id='browser-warning'><strong>Attention!</strong> You are using an unsupported browser! We recommend using Chrome, Firefox, Safari, or Internet Explorer (v. 8 or later) for using our Quick Look service. Thank you.</div>";

$step = 0;
if(isset($_GET['step'])){
	$step = $_GET['step'];
}

if($step == 0){
	include("quicklook_about.php");
}
elseif ($step == 1) {
	include("quicklook_new.php");
}
elseif ($step == 2) {
	include("quicklook_details.php");
}
elseif ($step == 3) {
	include("quicklook_photos.php");
}
elseif ($step == 4) {
	include("quicklook_payment.php");
}
elseif ($step == 5) {
	include("quicklook_confirm.php");
}
elseif ($step == "cancel") {
	include("quicklook_cancel.php");
}
else {
?>
<h1>How did you get here?</h1>
<p>This page shouldn't be accessible.</p>
<?php } ?>