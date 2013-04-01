<?php 

check_session();

ql_add_input($_POST);

// var_dump($_SESSION['photos']);
// echo "<hr/>";

?>

<h1>Photos</h1>

	<?php // draw_photo_form(); ?>

	<!-- <div align="center" style="margin:20px;"><a href="#" id="ShowForm">Toggle Form</a></div> -->
	<div id="uploaderform" class="qlform">
		<form action="upload.php" method="post" enctype="multipart/form-data" name="UploadForm" id="UploadForm">
		    <h1>Upload Case Photos</h1>

		    <?php if(count($_SESSION['photos'])<10 && count($_SESSION['photos'])>=1){ ?>
			    <!-- <strong class="error">You have already uploaded <?php echo count($_SESSION['photos']); ?> photos. Upload up to <?php echo 10-count($_SESSION['photos']); ?> more below.</strong> -->
			    <!-- <br /><br /> -->
		    <?php // } if (count($_SESSION['photos'])>=10) { ?>

		    	<p><strong class="error">You have already uploaded <?php echo count($_SESSION['photos']); ?> photos.</strong></p>
		    	<p>Uploading has been completed and cannot be altered at this time. After payment you can email an additional photo us at quicklook@caryconcrete.com  ( Be sure to reference your case# in the email).</p>
		    	<br /><br />
				<button type="submit" class="button" onClick="parent.location='index.php?page=quicklook&step=1';return false;">Go Back</button>
    			<button type="submit" class="button" style="float:right;" onClick="parent.location='index.php?page=quicklook&step=4';return false;">Next Step</button>
		    <?php } else { ?>

		    <p><strong>PHOTO GUIDELINES</strong>
		    	<ul>
		    		<li>Must be sharply focused &mdash; We must be able to enlarge to see certain critical details</li>
					<li>JPGs preferred and &lt; 3 MB per photo.</li>
					<li>Poorly focused pictures or those taken with a mediocre lens are not useful</li>
					<li>In general photos from stand-alone cameras are much better than from a cell phone.</li>
					<li>3 photos minimum</li>
				</ul>
			</p>
		    
			<p><strong>INSTRUCTIONS FOR UPLOADING PHOTOS</strong><br />
			<br />Select  photos to upload (minimum of 3, maximum of 10)<br />
			<br />Step 1: Select photos from your device (card, camera, or hard drive, etc.) one a time. Depending on your browser, the button to click on is labeled Browse or is labeled Choose File. Click on it, then select a picture using the dialog box that appears. The file you chose will be displayed next to the button.<br />

			<br />Step 2: Click on the button that says  &quot;Click here to add another photo&quot;  Repeat Step 1 and load another photo<br />
			<br />Repeat until you have selected all the photos you want to send us<br />
			<br />Step 3: Click the Upload button  AFTER  all your photos have been selected and they each appear in the individual boxes Choose file boxes next to Choose File or Browse.  The upload process will take awhile depending on the speed of your connection and the size and number of the photos you are uploading.</p>


		   	<label>Photos</label>

		    <div id="AddFileInputBox">
		    	<span><input type="file" size="20" name="file[]" class="addedInput fileInputBox" onChange="checkFileType(this);" value=""/></span>
		    	<!-- <input class="photo_input fileInputBox" style="margin-bottom: 5px;" type="file" onChange="checkFileType(this);" name="file[]"/> -->
<!-- 		    	<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" onChange="checkFileType(this);" value=""/></span>
		    	<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" onChange="checkFileType(this);" value=""/></span> -->
		   	</div>
   		    <span class="small"><button id="AddMoreFileBox">Click here to add another photo</button></span> <!-- onClick="event.preventDefault();" -->
		    <div class="sep_s"></div>

		    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id']; ?>">
			<button type="submit" class="button" id="uploadbtn" onClick="validatePhotos();return false;" id="SubmitButton">Upload</button>
			<button type="submit" class="button" id="photos_back" onClick="parent.location='index.php?page=quicklook&step=1';return false;">Go Back</button>

   		    <?php if(count($_SESSION['photos'])<10 && count($_SESSION['photos'])>=1){ ?>
		    <button type="submit" class="button" style="float:right;" onClick="parent.location='index.php?page=quicklook&step=4';return false;">Next Step</button>
		    <?php } ?>

		    <?php } ?>

		    <div id="progressbox">
		    	<div id="progressbar"></div>
		    	<div id="statustxt">0%</div>
		   	</div>
		</form>
	</div>
	<div id="uploadResults">
		<form class="qlform" name="ql1" enctype="multipart/form-data" action="index.php?page=quicklook&step=4" method="post">
			<p><strong>Please add a caption to describe each photo.</strong></p>
    		<div id="output"></div>
    		<!-- <p class="ql_prev"><input type="button" value="Go Back" onClick="parent.location='index.php?page=quicklook&step=2'"></p> -->
    		<p class="ql_submit"><input type="submit" value="Next Step"></p>
    	</form>
	</div>

	<div class="cleafix"></div>
