<?php

// $paypal_account = "paypal@bluelotuscreative.com";
// $ql_cost = "0.01";

/* --------- DON'T EDIT BELOW THIS LINE ---------- */

$root = "/`BLC/caryconcrete.com/web";
$counter = 5;

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
		echo "<strong>Error:</strong> Session not set!";
		echo '<meta http-equiv="refresh" content="2;url='.$root.'/index.php?page=quicklook">';
	}
}

function clean($var){ 
	echo str_replace("<br />","",$_SESSION[$var]);
}

function ql_add_input($post){
	foreach($post as $key=>$value){
		// echo $key.": ".$value."<br>";
		if (isset($post[$key]) && $post[$key]!=""){
			$_SESSION[$key] = (get_magic_quotes_gpc()) ? nl2br($post[$key]) : addslashes(nl2br($_POST[$key])) ;
			// unset($responce['cond-duration']);
		}
	}
	// echo "<hr>";
	// var_dump($_SESSION);
	// foreach($_SESSION as $key=>$value){
	// 	echo $key.": ".$value."<br>";
	// }
	// echo "<hr>";
}

function draw_photo_form(){
	echo "<ul class=\"col1\">\n";
	for($n=1;$n<=10;$n++){
		echo "<li><label for=\"p".$n."desc\">Photo ".$n." description</label><input type=\"text\" name=\"p".$n."desc\"></li>\n";
	}
	echo "</ul>\n";

	echo "<ul class=\"col2\">\n";
	for($n=1;$n<=10;$n++){
		echo "<li><label for=\"p".$n."file\">&nbsp;</label><input type=\"file\" name=\"p".$n."file\"></li>\n";
	}
	echo "</ul>\n";
}

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

	$to = "jasonryant@gmail.com";
	$sender_email = "no-reply@caryconcrete.com";
	$subject = "Quick Look Case #".$case_number;
	$headers = "From: ".$c_name." <" . $c_email . ">\r\n" .
				"Reply-To: ".$c_name." <" . $c_email . ">\r\n" .
	    		"X-Mailer: PHP/" . phpversion();
	$message = "<strong>Case Number:</strong> $case_number
	<strong>Status:</strong> $pay_status

	<h2>About the Customer</h2>

	<strong>Name:</strong> $c_name
	<strong>Email address:</strong> $c_email
	<strong>Phone number:</strong> $c_phone
	<strong>Mailing address:</strong>
	$c_address

	<strong>Job title:</strong> $c_job_title
	<strong>Company:</strong> $c_company
	<strong>Company role/relationship:</strong> $c_company_rel
	<strong>Relationship to structure:</strong> $s_rel

	<h2>About the Structure</h2>

	<strong>Description of the issue:</strong> $s_issue_desc
	<strong>Salt exposure:</strong> $s_salt_exp
	<strong>More information:</strong> $s_salt_exp_notes
	<strong>Approximate year built:</strong> $s_year
	<strong>More information:</strong> $s_year_notes
	
	<strong>Address:</strong>
	$s_address

	<strong>Intended purpose when built:</strong> $s_purpose
	<strong>Current use:</strong> $s_cur_use
	
	<strong>When was the problem first noticed?</strong>
	$s_first_noticed
	
	<strong>Any other problems with the structure or in the area?</strong>
	$s_other_probs

	<strong>Why is it a problem? What is the underlying concern?</strong>
	$s_why_prob

	<strong>Photos:<strong> <a href='$photos_zip'>$photos_zip</a>
	";

	mail($to, $subject, $message, $headers) or die("mail error");

}

function notify_c($c_name,$c_email,$case_number){
	$to = $c_email;
	$sender_email = "no-reply@caryconcrete.com";
	$subject = "Quicklook Case #".$case_number;
	$headers = "From: Cary Concrete <no-reply@caryconcrete.com>\r\n" .
				"Reply-To: Cary Concrete <leo@caryconcrete.com>\r\n" .
	    		"X-Mailer: PHP/" . phpversion();

$message = "
Dear $c_name,

This email confirms the start of your Quick Look service request.

Thank you for using our Quick Look service which provides you with expert-based best guesses about causes and remediation of distressed or problematic precast concrete or similar material. Our report will be based on photos and other information you have supplied to us. You should receive a reply from us within 48 hours of our receipt of payment. Usually our reply will contain your final report from us on the photos you submitted. Sometimes it will be our requesting further information from you. On occasion it will be an acknowledgement with an estimated time to complete.

Thank you.

--

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
	// global $counter;
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