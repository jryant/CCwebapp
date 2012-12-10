<?php 

check_session();

ql_add_input($_POST);


?>

<h1>Photos</h1>

	<?php // draw_photo_form(); ?>

	<!-- <div align="center" style="margin:20px;"><a href="#" id="ShowForm">Toggle Form</a></div> -->
	<div id="uploaderform">
		<form action="upload.php" method="post" enctype="multipart/form-data" name="UploadForm" id="UploadForm">
		    <h1>Upload Case Photos</h1>
		    <p><strong>PHOTO GUIDELINES</strong>
		    	<ul>
		    		<li>Must be sharply focused &mdash; I enlarge to see certain critical details</li>
					<li>JPGs preferred and &lt; 3 MB per photo.</li>
					<li>Poorly focused pictures or those taken with a mediocre lens are not useful</li>
					<li>In general photos from stand-alone cameras are much better than from a cell phone.</li>
					<li>3 photos minimum</li>
				</ul>
			</p>
		    
		    <label>Photos</label>
		    <div id="AddFileInputBox">
		    	<input id="fileInputBox" class="photo_input" style="margin-bottom: 5px;" type="file" onChange="checkFileType(this);" name="file[]"/>
		    	<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" onChange="checkFileType(this);" value=""/></span>
		    	<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" onChange="checkFileType(this);" value=""/></span>
		   	</div>
   		    <span class="small"><a href="#" id="AddMoreFileBox">Add More Photos</a></span>
		    <div class="sep_s"></div>

		    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id']; ?>">
		    <button type="submit" class="button" onClick="validatePhotos();return false;" id="SubmitButton">Upload</button>
		    
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
    		<p class="ql_submit"><input type="submit" value="Next Step"></p>
    	</form>
	</div>

	<div class="cleafix"></div>
