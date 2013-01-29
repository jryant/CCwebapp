<?php if(!isset($_SESSION)){session_start();}
echo "<!-- INCLUDED HEADER FILE -->
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
\"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
<title>Cary Concrete Products Inc. - {$sections[$page]}</title>
<meta name=\"Keywords\" content=\"architectural precast concrete, cast stone, GFRC, glass fiber reinforced concrete, GFRG, FRP, fiber reinforced plastic, fiberglass, GRG, glass reinforced gypsum, polymer concrete, terra cotta, chicago, illinois, midwest, cary, drafting, drafter, fabricator, restoration, renovation, commercial construction, building, contractor, architectural ornament, employment opportunities, subcontractor, subcontracting, design build,coloring book, precast, concrete educational, construction, cast stone, abc, mosaic, mosaics\">
<meta name=\"Description\" content=\"Cary Concrete Products is a specialty designer, supplier, and subcontractor of cast stone, precast concrete and other molded materials for commercial construction projects and restoration work. Cary Concrete Products is located in the Chicago area.\">
<meta name=\"verify-v1\" content=\"XUhvZhpZ+l2vOWQzsYMKOa7xiKzNPaegmtuj9gHTgOc=\" />
{$head_spec[$page]}
<link rel=\"stylesheet\" href=\"$root/css/style.css\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"$root/css/nivo-slider.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"$root/includes/default/default.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"$root/css/prettyPhoto.css\" type=\"text/css\" media=\"screen\">
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.form.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.validate.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.nivo.slider.pack.js\" type=\"text/javascript\"></script>
<!--[if lte IE 7]>
<style type=\"text/css\">
#browser-warning { display:block; }
</style>
<![endif]-->
";
if ($page=="quicklook"){ ?>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery.address-1.5.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false,
		overlay_gallery: false
	});
});
</script>
<?php }
if ($page=="quicklook" && in_array($_GET['step'], array("1","2"))){
?>
<script type="text/javascript">
$(document).ready(function(){
	$('.qlform').validate();
});
</script>
<? } ?>

<?php if ($page=="quicklook" && $_GET['step']=="3"){
?>
<script type="text/javascript"> 
$(document).ready(function() { 
	//elements
	var progressbox 		= $('#progressbox'); //progress bar wrapper
	var progressbar 		= $('#progressbar'); //progress bar element
	var statustxt 			= $('#statustxt'); //status text element
	var submitbutton 		= $("#SubmitButton"); //submit button
	var myform 				= $("#UploadForm"); //upload form
	var output 				= $("#output"); //ajax result output element
	var completed 			= '0%'; //initial progressbar value
	var FileInputsHolder 	= $('#AddFileInputBox'); //Element where additional file inputs are appended
	var FilesSoFar 			= <?php echo count($_SESSION['photos']); ?>;
	var MaxFileInputs		= 10-FilesSoFar; //Maximum number of file input boxs
	console.log("FilesSoFar: "+FilesSoFar+" -- Max photos: "+MaxFileInputs);

	// adding and removing file input box
	var i = $('#AddFileInputBox div').size() + 1;
	$('#AddMoreFileBox').live('click', function() {
		if(i < MaxFileInputs)
		{
			$('<span><input type="file" id="fileInputBox" size="20" name="file[]" class="addedInput" onChange="checkFileType(this);" value=""/><a href="#" class="small2" id="removeFileBox"><img src="images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder);
			i++;
		}
		if(i == MaxFileInputs){
			$("#AddMoreFileBox").css("visibility","hidden");
		}
		return false;
	});
	$('#removeFileBox').live('click', function() { 
		if( i > 1 ) {
				$(this).parents('span').remove();i--;
		}
		return false;
	});

	$("#ShowForm").click(function () {
		$("#uploaderform").slideToggle(); //Slide Toggle upload form on click
	});

	$(myform).ajaxForm({
		beforeSend: function() { //brfore sending form
			submitbutton.attr('disabled', ''); // disable upload button
			statustxt.empty();
			progressbox.show(); //show progressbar
			progressbar.width(completed); //initial value 0% of progressbar
			statustxt.html(completed); //set status text
			statustxt.css('color','#000'); //initial color of status text
		},
		uploadProgress: function(event, position, total, percentComplete) { //on progress
			progressbar.width(percentComplete + '%') //update progressbar percent complete
			statustxt.html(percentComplete + '%'); //update status text
			if(percentComplete>50){
				statustxt.css('color','#fff'); //change status text to white after 50%
			} else {
				statustxt.css('color','#000');
			}
			if(percentComplete==100){
				statustxt.html("100% &mdash; Processing...");
			}
				
			},
		complete: function(response) { // on complete
			$('#uploadResults').show();
			output.html(response.responseText); //update element with received data
			// console.log(response.responseText);
			myform.resetForm();  // reset form
			submitbutton.removeAttr('disabled'); //enable submit button
			progressbox.hide(); // hide progressbar
			$("#uploaderform").slideUp(); // hide form after upload
		}
	});

});

function checkFileType(input){
	// console.log(file);
	var ext = input.value.match(/\.(.+)$/)[1];
	ext = ext.toLowerCase();
    switch(ext){
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'tif':
            // alert('allowed');
            break;
        default:
            alert('Sorry, only JPG, PNG, and GIF file formats are accepted.');
            input.value='';
    }
}

function validatePhotos(){
	var errors = 0;
	var photos = 0;
	var FilesSoFar = <?php echo count($_SESSION['photos']); ?>;
	$("#AddFileInputBox input").each(function(index){
		var photo = this.value;
		if(photo.length < 1){
			$(this).addClass("err");
			errors++;
		} else {
			$(this).removeClass("err");
			photos++
		}
	});
	console.log(errors+" errors");
	console.log(photos+" photos");
	console.log(FilesSoFar+" FilesSoFar");
	// return false;
	if(errors >= 1 || (photos < 3 && FilesSoFar < 3)){
		alert("Please upload at least 3 photos.");
	} else {
		$("#UploadForm").submit();
	}
	// if(photos < 3 || FilesSoFar < 3){
	// 	alert("Please upload at least 3 photos.");
	// } else {
	// 	$("#UploadForm").submit();
	// }
}

</script> 
<link href="css/file_upload.css" rel="stylesheet" type="text/css" />
<?php } ?>

<?php
echo "
</head>
<body>
<center>
<a name=\"top\"></a>
<div id=\"header\">Cary Concrete Products, Inc.</div>";
include("menu.php");
?>