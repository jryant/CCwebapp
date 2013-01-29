<?php 

if(!$_SESSION['id']){
	$_SESSION['id'] = rand(0, 9999999999);
}

// echo $_SESSION['id']."<hr>";

// $_SESSION['c_name'] = "";
// $_SESSION['c_email'] = "";
// $_SESSION['c_phone'] = "";
// $_SESSION['c_job_title'] = "";
// $_SESSION['c_company'] = "";
// $_SESSION['c_company_rel'] = "";
// $_SESSION['s_rel'] = "";
// $_SESSION['c_address'] = "";
// $_SESSION['terms'] = "";

?>

<h1>New Case</h1>

<!-- <div class="ql_prev"><a href="?page=quicklook">Back</a></div> -->

<form class="qlform" name="ql1" action="index.php?page=quicklook&step=2" method="post">
	
	<div class="warning"><img src="images/alert.jpeg" style="float:left;margin:0 6px 6px 0" height="60" />BEFORE PROCEEDING TO ORDER A QUICK LOOK, YOU MUST READ THE PHOTO GUIDELINES AND HAVE APPROPRIATE PICTURES READY FOR UPLOADING.</div>

	<ul class="col1">
		<li><label for="c_name">Name:</label><input type="text" name="c_name" class="required" value="<?php clean('c_name'); ?>"></li>
		<li><label for="c_email">Email address:</label><input type="text" name="c_email" class="required email" value="<?php echo $_SESSION['c_email']; ?>"></li>
		<li><label for="c_phone">Phone number:</label><input type="text" name="c_phone" class="required" value="<?php echo $_SESSION['c_phone']; ?>"></li>
		<li><label for="c_job_title">Job title:</label><input type="text" name="c_job_title" class="required" value="<?php echo $_SESSION['c_job_title']; ?>"></li>
		<li><label for="c_company">Company:</label><input type="text" name="c_company" class="required" value="<?php echo $_SESSION['c_company']; ?>"></li>
		<li><label for="c_company_rel">Company Role/Relationship:</label><input type="text" name="c_company_rel" class="required" value="<?php echo $_SESSION['c_company_rel']; ?>"></li>
	</ul>
	<ul class="col2">
		<li><label for="s_rel">Relationship to structure:</label>
			<ul>
				<li><input type="radio" name="s_rel" value="Owner" class="required" <?php echo ($_SESSION['s_rel']=="Owner") ? " checked=\"checked\"" : "" ?>>Owner</li>
				<li><input type="radio" name="s_rel" value="Contractor" class="required" <?php echo ($_SESSION['s_rel']=="Contractor") ? " checked=\"checked\"" : "" ?>>Contractor</li>
				<li><input type="radio" name="s_rel" value="Property Manager" class="required" <?php echo ($_SESSION['s_rel']=="Property Manager") ? " checked=\"checked\"" : "" ?>>Property Manager</li>
				<li><input type="radio" name="s_rel" value="Attorney" class="required" <?php echo ($_SESSION['s_rel']=="Attorney") ? " checked=\"checked\"" : "" ?>>Attorney</li>
				<li><input type="radio" name="s_rel" value="Other" class="required" <?php echo ($_SESSION['s_rel']=="Other") ? " checked=\"checked\"" : "" ?>>Other: <input type="text" id="rel_other" name="s_rel_other" value="<?php echo $_SESSION['s_rel_other']; ?>"></li>
			</ul>
		</li>
		<br>
		<li><label for="c_address">Mailing address:</label><textarea cols="30" rows="4" name="c_address"><?php clean('c_address'); ?></textarea></li>
	</ul>

	<p style="clear:both;"><br><strong>Terms and conditions</strong></p>
	<p>This is not a service involving licensed design professionals (engineers or architects). We offer the informed opinions of highly experienced, narrowly focused, and knowledgeable professionals. Opinions offered are based solely on information you provide and do not reflect any independent investigation.  <strong><em>You must read the <a href="index.php?page=quicklook#guidelines">Photo Guidelines</a> and have appropriate photos ready for upload before proceeding.</em></strong>  We encourage you to get a second opinion from a competent professional before acting on any recommendations.  By clicking below and sending us money, you agree that you are receiving opinions and that you hold Cary Concrete Products, Inc., and its employees and related consultants, harmless. You acknowledge that there are no refunds. You agree that in no event is there any basis to sue Cary Concrete Products, Inc. or its employees or anyone we involve in evaluating your Quick Look request for any reason. You further agree to accept our analysis on the terms stated herein. You must click below to agree to these terms and conditions. Clicking means that you agree and understand that this is not professional design advice.</p>
	<p class="ql_submit"><input type="checkbox" name="terms" class="required" <?php echo ($_SESSION['terms']=="on") ? " checked=\"checked\"" : "" ?>> <label for="terms">I accept these terms.</label> <input type="submit" value="Next Step"></p>
	<div class="cleafix"></div>

</form>

