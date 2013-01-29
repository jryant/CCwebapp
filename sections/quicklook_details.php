<?php 

check_session();

ql_add_input($_POST);

// $_SESSION['s_issue_desc'] = "";
// $_SESSION['s_salt_exp'] = "";
// $_SESSION['s_salt_exp_notes'] = "";
// $_SESSION['s_year'] = "";
// $_SESSION['s_year_notes'] = "";
// $_SESSION['s_address'] = "";
// $_SESSION['s_purpose'] = "";
// $_SESSION['s_cur_use'] = "";
// $_SESSION['s_first_noticed'] = "";
// $_SESSION['s_other_probs'] = "";
// $_SESSION['s_why_prob'] = "";

?>

<h1>Case Details</h1>

<form class="qlform" name="ql2" action="index.php?page=quicklook&step=3" method="post">

	<ul class="col1">
		<li><label for="s_issue_desc">Description of the issue:</label><textarea cols="30" rows="4" name="s_issue_desc" class="required"><?php echo $_SESSION['s_issue_desc']; ?></textarea></li>
		<li><label for="s_salt_exp">Salt exposure:</label><input type="radio" name="s_salt_exp" value="Yes" class="required" <?php echo ($_SESSION['s_salt_exp']=="Yes") ? " checked=\"checked\"" : "" ?>> Yes <input type="radio" name="s_salt_exp" value="No" class="required" <?php echo ($_SESSION['s_salt_exp']=="No") ? " checked=\"checked\"" : "" ?>> No</li>
		<li><label for="s_salt_exp_notes">More information about salt<br/>or other environmental factors:</label><textarea cols="30" rows="4" name="s_salt_exp_notes"><?php echo $_SESSION['s_salt_exp_notes']; ?></textarea></li>
		<li><label for="s_year" id="s_year">Approximate year built: </label><input type="text" maxlength="4" style="width:30px !important;" name="s_year" class="required" value="<?php echo $_SESSION['s_year']; ?>"></li>
		<li><label for="s_year_notes">More information on the age or history<br/>of this structure or of the problem area:</label><textarea cols="30" rows="4" name="s_year_notes"><?php echo $_SESSION['s_year_notes']; ?></textarea></li>
		<li><label for="s_address">Address or other location information<br/>for this structure:</label><textarea cols="30" rows="4" name="s_address" class="required"><?php echo $_SESSION['s_address']; ?></textarea></li>
	</ul>
	<ul class="col2">
		<li><label for="s_purpose">Intended use when built:</label><input type="text" name="s_purpose" class="required" value="<?php echo $_SESSION['s_purpose']; ?>"></li>
		<li><label for="s_cur_use">Current use:</label><input type="text" name="s_cur_use" class="required" value="<?php echo $_SESSION['s_cur_use']; ?>"></li>
		<li><label for="s_first_noticed">When was the problem first noticed?</label><textarea cols="30" rows="4" name="s_first_noticed" class="required"><?php echo $_SESSION['s_first_noticed']; ?></textarea></li>
		<li><label for="s_other_probs">Any other problems with the structure or<br/>in the area?</label><textarea cols="30" rows="4" name="s_other_probs"><?php echo $_SESSION['s_other_probs']; ?></textarea></li>
		<li><label for="s_why_prob">Why is it a problem?<br/>What is the underlying concern?</label><textarea cols="30" rows="4" name="s_why_prob" class="required"><?php echo $_SESSION['s_why_prob']; ?></textarea></li>
	</ul>

	<p class="ql_prev"><input type="button" value="Go Back" onClick="parent.location='index.php?page=quicklook&step=1'"></p>
	<p class="ql_submit"><input type="submit" value="Next Step"></p>
	<div class="cleafix"></div>

</form>