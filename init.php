<?php

/* --------- Edit GLOBAL VARIABLES --------------- */

$ql_cost = "$125"; // Cost of Quick Look program (does not affect PayPal)
$cc_email = "jasonryant+blc@gmail.com"; // Administrative email account

/* --------- DON'T EDIT BELOW THIS LINE ---------- */

$root = "/`BLC/caryconcrete.com/web";
$debug = true;

$sections = array("index"=>"Home","materials"=>"Materials","services"=>"Services","jobs"=>"Past Jobs","writings"=>"Writings","book"=>"ABC Book","quicklook"=>"Quick Look","contact"=>"Contact");

$head_spec = array(
"book" => "<script language=\"JavaScript\" type=\"text/javascript\">
function book_open(page)
{
    window.open(page, \"\",\"toolbar=no, location=no, directories=no, statusbar=no, menubar=no, resizable=yes, copyhistory=no, scrollbars=yes, width=530, height=580, top=10, left=50\");
}
</script>
");

function check_session(){
	global $root;
	if(!isset($_SESSION['id'])){
		echo "<b>Error:</b> Session not set!";
		echo '<meta http-equiv="refresh" content="2;url='.$root.'/index.php?page=quicklook">';
	}
}

function clean($var){ 
	echo str_replace("<br />","",$_SESSION[$var]);
}

function ql_add_input($post){
	foreach($post as $key=>$value){
		echo ($debug) ? $key.": ".$value."<br>" : "" ;
		if (isset($post[$key]) && $post[$key]!=""){
			$_SESSION[$key] = (get_magic_quotes_gpc()) ? nl2br($post[$key]) : addslashes(nl2br($_POST[$key])) ;
			// unset($responce['cond-duration']);
		}
	}
	echo ($debug) ? "<hr>" : "" ;
	// var_dump($_SESSION);
	foreach($_SESSION as $key=>$value){
		echo ($debug) ? $key.": ".$value."<br>" : "" ;
	}
	echo ($debug) ? "<hr>" : "" ;
}

// function draw_photo_form(){
// 	echo "<ul class=\"col1\">\n";
// 	for($n=1;$n<=10;$n++){
// 		echo "<li><label for=\"p".$n."desc\">Photo ".$n." description</label><input type=\"text\" name=\"p".$n."desc\"></li>\n";
// 	}
// 	echo "</ul>\n";

// 	echo "<ul class=\"col2\">\n";
// 	for($n=1;$n<=10;$n++){
// 		echo "<li><label for=\"p".$n."file\">&nbsp;</label><input type=\"file\" name=\"p".$n."file\"></li>\n";
// 	}
// 	echo "</ul>\n";
// }

function compress_image($source_url, $destination_url, $quality) {
	$info = getimagesize($source_url);
 
	if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
	elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
	elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
 
	//save file
	imagejpeg($image, $destination_url, $quality);
 
	//return destination file
	return $destination_url;
}

//usage
// $compressed = compress_image('source.png', 'destination.jpg', 90);
 
function email_case($case_number,$c_name,$c_email,$c_phone,$c_job_title,$c_company,$c_address,$s_rel,$s_issue_desc,$s_salt_exp,$s_salt_exp_notes,$s_year,$s_year_notes,$s_address,$s_purpose,$s_cur_use,$s_first_noticed,$s_other_probs,$s_why_prob,$photos_zip,$pay_status){

	global $cc_email;
	$to = $cc_email;
	// $sender_email = "no-reply@caryconcrete.com";
	$subject = "Quick Look Case #".$case_number;
	$headers = "From: ".$c_name." <" . $c_email . ">\r\n" .
				"Reply-To: ".$c_name." <" . $c_email . ">\r\n" .
	    		"X-Mailer: PHP/" . phpversion() .
	    		"MIME-Version: 1.0' . \r\n" .
				"Content-type: text/html; charset=iso-8859-1";
	$message = "<h2>About the Case</h2>

<b>Case Number:</b> $case_number<br />
<b>Status:</b> $pay_status<br />
<b>Date submitted:</b> ".date('y-m-d')."

<h2>About the Customer</h2>

<b>Name:</b> $c_name<br />
<b>Email address:</b> $c_email<br />
<b>Phone number:</b> $c_phone<br />
<b>Mailing address:</b><br />
$c_address<br />
<br />
<b>Job title:</b> $c_job_title<br />
<b>Company:</b> $c_company<br />
<b>Company role/relationship:</b> $c_company_rel<br />
<b>Relationship to structure:</b> $s_rel<br />

<h2>About the Structure</h2>

<b>Description of the issue:</b> $s_issue_desc<br />
<br />
<b>Salt exposure:</b> $s_salt_exp<br />
<b>More information:</b> $s_salt_exp_notes<br />
<br />
<b>Approximate year built:</b> $s_year<br />
<b>More information:</b> $s_year_notes<br />
<br />
<b>Address:</b><br />
$s_address<br />
<br />
<b>Intended purpose when built:</b> $s_purpose<br />
<b>Current use:</b> $s_cur_use<br />
<br />
<b>When was the problem first noticed?</b><br />
$s_first_noticed<br />
<br />
<b>Any other problems with the structure or in the area?</b><br />
$s_other_probs<br />
<br />
<b>Why is it a problem? What is the underlying concern?</b><br />
$s_why_prob<br />
<br />
<b>Photos:</b> <a href='$photos_zip'>$photos_zip</a><br />
<br />
--<br />
<br />
This is an automatically generated email. Please do not reply.";

	mail($to, $subject, $message, $headers) or die("mail error");

}

function notify_c($c_name,$c_email,$case_number){
	$to = $c_email;
	// $sender_email = "no-reply@caryconcrete.com";
	$subject = "Quicklook Case #".$case_number;
	$headers = "From: Cary Concrete <no-reply@caryconcrete.com>\r\n" .
				"Reply-To: Cary Concrete <".$cc_email.">\r\n" .
	    		"X-Mailer: PHP/" . phpversion() .
	    		"MIME-Version: 1.0' . \r\n" .
				"Content-type: text/html; charset=iso-8859-1";
$message = "Dear $c_name,<br />
<br />
This email confirms the start of your Quick Look service request.<br />
<br />
Thank you for using our Quick Look service which provides you with expert-based best guesses about causes and remediation of distressed or problematic precast concrete or similar material. Our report will be based on photos and other information you have supplied to us. You should receive a reply from us within 48 hours of our receipt of payment. Usually our reply will contain your final report from us on the photos you submitted. Sometimes it will be our requesting further information from you. On occasion it will be an acknowledgement with an estimated time to complete.<br />
<br />
Thank you.<br />
<br />
--<br />
<br />
This is an automatically generated email. Please do not reply.";
		
	mail($to, $subject, $message, $headers);
}

/* creates a compressed zip file */
function create_zip($files = array(),$destination = '',$overwrite = false) {
  //if the zip file already exists and overwrite is false, return false
  if(file_exists($destination) && !$overwrite) { return false; }
  //vars
  $valid_files = array();
  //if files were passed in...
  if(is_array($files)) {
    //cycle through each file
    foreach($files as $file) {
      //make sure the file exists
      if(file_exists($file)) {
        $valid_files[] = $file;
      }
    }
  }
  //if we have good files...
  if(count($valid_files)) {
    //create the archive
    $zip = new ZipArchive();
    if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
      return false;
    }
    //add the files
    foreach($valid_files as $file) {
      $zip->addFile($file,$file);
    }
    //debug
    //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
    
    //close the zip -- done!
    $zip->close();
    
    //check to make sure the file exists
    return file_exists($destination);
  }
  else
  {
    return false;
  }
}

function create_case(){
	$file = "counter.txt";
	$handle = fopen($file,"r") or die("Cannot open file to read: ".$file);
	$counter = fread($handle,filesize($file));
	$new_count = (int)$counter+1;
	$handle = fopen($file,"w") or die("Cannot open file to write: ".$file);
	fwrite($handle,$new_count);
	$result = rename('uploads/'.$_SESSION['id'].'/', 'uploads/QL-'.$new_count.'/');
	$_SESSION['case_number'] = "QL-".$new_count; // Success
	// var_dump($result);
	// return $new_count;
}

?>