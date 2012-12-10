<?php

if ($_GET['submit']=="true"){
	include('contact_conf.php');
}	
else {

echo "
<h1>Contact</h1>
<p>If you would like to get in touch with us, you may fill out the information below to e-mail us, or you can contact us at:</p>
<p align=center>Cary Concrete Products
<br>211 Dean St, Suite 1D
<br>Woodstock, Illinois 60098
<br><br>phone: (815) 338-2301
<br>fax: (815) 337-5801
<br><b>Leo Schlosberg (cell): (847) 226-0930</b></p>

<p>In order to better service your inquiry we need to know a little about you.  Please take a moment to answer the following.</p>

<form method=\"post\" enctype=\"multipart/form-data\" action=\"sections/contact_conf.php\" style=\"margin:0 auto;width:80%;\">


<table width=\"100%\" cellpadding=0 cellspacing=0>
	<tr>
		<td width=\"50%\">
			<p>Your name:
			<br><input type=text name=\"Name\" size=30>
			<p>Your title:
			<br><input type=text name=\"Title\" size=30>
			<p>Your company:
			<br><input type=text name=\"Company\" size=30>
			<p>Reply-to e-mail address:
			<br><input type=text name=\"Email\" size=30>
		</td>
		<td width=\"50%\">
			<p>Phone #:
			<br><input type=text name=\"phone_no\" size=30>
			<p>Fax #:
			<br><input type=text name=\"Fax\" size=30>
			<p>Address:
			<br><textarea name=\"Address\" cols=30 rows=4>street
city
state
zip</textarea>
		</td>
	</tr>
</table>

<br>Which of the following best describes your profession?
<br><select name=\"Profession\">
<option>Architect/Engineer
<option>Do-it-your-selfer
<option>General Contractor
<option>Home Builder
<option>Information or Consulting Services
<option>Other Design Professional
<option>Owner's Representative
<option>Specialty Contractor
</select>

<p>Which of the following best describes your interest?
<br><select name=\"Interest\">
<option>Current project in the bidding or construction stage
<option>Current project in the design stage
<option>General information on projects and services
</select>

<p>What are your specific questions or comments?
<br><textarea name=\"Comment\" rows=10 cols=50></textarea>
<p><input type=submit value=Send name=submit> <input type=reset value=\"Clear All\">
</form>";
}

?>