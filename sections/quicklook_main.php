<?php 
// if(!isset($_SESSION)){session_start();}

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