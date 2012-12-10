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
		<li><label for="s_issue_desc">Description of the issue:</label><textarea cols="30" rows="4" name="s_issue_desc"><?php echo $_SESSION['s_issue_desc']; ?></textarea></li>
		<li><label for="s_salt_exp">Salt exposure:</label><input type="radio" name="s_salt_exp" value="Yes"> Yes <input type="radio" name="s_salt_exp" value="No"> No</li>
		<li><label for="s_salt_exp_notes">More information:</label><textarea cols="30" rows="4" name="s_salt_exp_notes"><?php echo $_SESSION['s_salt_exp_notes']; ?></textarea></li>
		<li><label for="s_year" id="s_year">Approximate year built: </label><input type="text" maxlength="4" style="width:30px !important;" name="s_year"></li>
		<li><label for="s_year_notes">More information:</label><textarea cols="30" rows="4" name="s_year_notes"><?php echo $_SESSION['s_year_notes']; ?></textarea></li>
		<li><label for="s_address">Address:</label><textarea cols="30" rows="4" name="s_address"><?php echo $_SESSION['s_address']; ?></textarea></li>
	</ul>
	<ul class="col2">
		<li><label for="s_purpose">Intended use when built:</label><input type="text" name="s_purpose"></li>
		<li><label for="s_cur_use">Current use:</label><input type="text" name="s_cur_use"></li>
		<li><label for="s_first_noticed">When was the problem first noticed?</label><textarea cols="30" rows="4" name="s_first_noticed"><?php echo $_SESSION['s_first_noticed']; ?></textarea></li>
		<li><label for="s_other_probs">Any other problems with the structure or in the area?</label><textarea cols="30" rows="4" name="s_other_probs"><?php echo $_SESSION['s_other_probs']; ?></textarea></li>
		<li><label for="s_why_prob">Why is it a problem?<br/>What is the underlying concern?</label><textarea cols="30" rows="4" name="s_why_prob"><?php echo $_SESSION['s_why_prob']; ?></textarea></li>
	</ul>

	<p class="ql_submit"><input type="submit" value="Next Step"></p>
	<div class="cleafix"></div>

</form>