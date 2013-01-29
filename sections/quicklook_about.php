<script>
$(window).load(function() {
	$("#tabs").tabs();
	$.address.change(function(event){
      $("#tabs").tabs( "select" , window.location.hash )
    })
    $("#tabs").bind("tabsselect", function(event, ui) { 
      window.location.hash = ui.tab.hash;
    })
	
	$('.faq-link').click(function() {
    	$( "#tabs" ).tabs('select', 1);
    	return false;
	});

	$('.examples-link').click(function() {
    	$( "#tabs" ).tabs('select', 3);
    	return false;
	});

	$('#slider1, #slider2').nivoSlider({
		effect: 'fade',
		animSpeed: 100,
		// pauseTime: 6000,
		manualAdvance: true
	});
});
</script>

<div id="tabs">
	<ul class="submenu">
		<!-- <div class="ql_next"><a href="?page=quicklook&step=1">Begin New Case</a></div> -->
<!-- 		<div class="ql_next"><a href="#inline-1" rel="prettyPhoto" >Get A Quick Look</a></div> -->
		<div id="inline-1" class="hide" style="display:none;">
			<img src="images/alert.jpeg" width="50" style="float:left; margin:0 10px 10px 0;">
			<p>BEFORE PROCEEDING TO GET A QUICK LOOK, YOU MUST HAVE READ THE <a class="faq-link" href="index.php?page=quicklook#faq">PHOTO GUIDELINES</a> AND HAVE PICTURES READY FOR UPLOADING.</p>
		</div>
		<li><a href="#about"><span>About</span></a></li>
		<li><a href="#guidelines"><span>Photo Guidelines</span></a></li>
		<li><a href="#faq"><span>FAQ</span></a></li>
		<li><a href="#example1"><span>Example Report #1</span></a></li>
		<li><a href="#example2"><span>Example Report #2</span></a></li>
	</ul>
	<br/>
	<div id="about">
		<h1>Quick Look Program</h1>
		<h2>What is Quick Look?</h2>
		<ul>
			<li>Fast, low-cost way for an owner or contractor to get an opinion on the cause and possible remedies for precast concrete that has issues of appearance and/or soundness. See <a href="#materials">below</a> for other materials.</li>
		</ul>

		<h2 class="header">How does it work?</h2>
		<ul>
			<li>You send us a few words and a few photos (must be good and of a certain type <a href="#faq" class="faq-link">details</a>)</li>
			<li>We respond, sometimes with our analysis, sometimes first with questions or directions for more photos and then the analysis.</li>
			<li>Written analysis briefly addresses likely causes and likely progression if no action is taken, possible solutions, and next steps for you to consider.</li>
			<li>Your  report will be emailed to you as an attached pdf file. No hard copy will be sent. The QuickLook service does not include substantial followup to the report.</li>
		</ul>

		<h2 class="header">How fast?</h2>
		<ul>
			<li>After we receive payment and photos, we will <em>usually</em> respond in 24-48 hours. We take no action prior to payment. We will not look at your photos without payment.</li>
		</ul>

		<h2 class="header">How much?</h2>
		<ul>
			<li><?php echo $ql_cost; ?> (PayPal account, credit card via PayPal, or mail us a check.)</li>
			<li>No invoicing option is offered for this service.</li>
		</ul>

		<a name="materials"><h2 class="header">What about cast-in-place concrete and other materials?</h2></a>
		<ul>
			<li>Our core (and very deep) expertise is architectural precast concrete. We have moderate knowledge of masonry and cast in place concrete as well as all types of precast. We are willing to look at problems in those areas on the same basis but we are clear that we have less expertise there. We have noted that it is sometimes difficult for people to distinguish between materials. In virtually every case we can confidently identify the material and have a general idea of what's causing the problem.</li>
		</ul>
	</div>

	<div id="guidelines">
		<h1>Guidelines for Submitting Photos</h1>
		<h2>What are the requirements for case photos?</h2>
	    <ul>
	    	<li>Must be sharply focused &mdash; We must be able to enlarge to see certain critical details</li>
	    	<li>JPGs preferred and &lt; 3 MB per photo.</li>
			<li>Poorly focused pictures or those taken with a mediocre lens are not useful</li>
			<li>In general photos from regular cameras are much better than those from phone cameras.</li>
			<li>3 or 4 photos minimum as itemized below:
				<ol>
					<li>The whole structure and some surroundings (If structure is small and discrete then this view may be combined with the next photo)</li>
					<li>A substantial area surrounding the problem, centered on the problem. (If structure is small and discrete #1 and #2 may be the same)</li>
					<li>The problem area and a little bit of the area around it. (one picture for each example of the problem).</li>
					<li>4. A close-up of the problem (one close-up for each example of the problem).</li>
				</ol>
			</li>
			<li>10 photos maximum per Quick Look. It's called &quot;Quick Look&quot; for a reason. If you feel that more than 10 photos are necessary to communicate the nature and details of your problem, then one option is to break it into 2 separate Quick Looks.</li>
		</ul>

		<p>View the <a href="#example1" class="examples-link">example reports</a> for examples of the photos we need.</p>
	</div>

	<div id="faq">
		<h1>Frequently Asked Questions</h1>

		<h2>What if you can't tell anything from the photos?</h2>
		<p>Most likely I will ask you to provide more and/or better photos. If I can't give you a likely diagnosis, then you know more &mdash; you know it's an uncommon problem. Or it may turn out that the material is not what you thought it was &mdash; you still know more. There are no refunds under any circumstances.</p>

		<h2>Does your company do repair work?</h2>
		<p>Our onsite work is typically within about a 150-mile radius of Chicago. We will consider going anywhere to evaluate a structure and assist in evaluating options.</p>

		<h2>Will you recommend a contractor?</h2>
		<p>On rare occasions we will offer to quote the work ourselves. The &quot;next steps&quot; in our analysis may include identifying the type of contractor we think is best suited to doing the work.</p>

		<h2>What qualifies you to offer this service?</h2>
		<p>First: decades of experience looking at very old (historic) precast concrete and regularly observing how our work and the work of others changes over times. I stop and look all the time.  Second, I have done significant reading of both trade and technical literature. Lastly, I am blessed with the ability to think clearly about causes and effects.  In 2000, because of my experience in looking at historic structures I was featured in a trade magazine <a href="writings/Concrete-Producer-blurb.pdf" target="_blank">article</a> on methods of avoiding freeze-thaw damage.  Feel free to read our <a href="http://planetcommercialconstruction.wordpress.com" target="_blank">blog</a> or <a href="http://caryconcrete.com/index.php?page=writings" target="_blank">other writings</a>.</p>

		<h2>Why do you charge more if my problem is widespread and I want to send more than 10 pictures?</h2>
		<p>You are paying for the time it takes me to review, analyze, and write the findings. More pictures take more time to study and usually if more pictures are required to communicate the problem, then the problem is more complex.</p>

		<h2>What if we want you to look at our problem in greater depth?</h2>
		<p>If I feel I have appropriate knowledge we can do T&amp;M or we can mutually define a scope which could then be quoted on a lump sum basis.</p>
	</div>

	<div id="example1">
		<h1>Example Report #1</h1>

		<h2 style="text-align:center;">Example #1</h2>

		<p>Example #1 is of a planter with a minor cosmetic problem where the owner was concerned if there was also a durability problem. Structure is a sidewalk planter subject to splashing of road salt. Photos are from various elevations, and may be roadside or not-roadside. Pictures were taken 6-8 months (one winter) after installation.</p>

		<div class="report-left">
			<h2>Our Description Of The Problem</h2>
			<p>Brick is spalling at specific locations. It appears to be localized. We also see efflorescence in the same areas as the spalling.</p>

			<h2>Likely Causes</h2>
			<p>Without knowing both the planned and as-built details of the internal construction of the wall (anchorage to backup, attachment method of stills, etc.) it is difficult to be confident of causes. We do see two apparent problems &mdash; water penetration as evidenced by the efflorescence and stresses (apparently axial) on the brick as evidenced by the spalling and cracking. A manufacturing problem with the brick is very unlikely; such problems are very rare with brick and because the problems are very localized. One location is at a corner where forces in a wall accumulate. There is no control joint near the corner. The efflorescence may be showing at damaged areas preferentially as the cracks are a path for moisture to escape, and that &quot;traffic&quot; leaves the efflorescence as a result. The lack of efflorescence or mortar deterioration in the cast stone sill or the sill bed joint points away from significant water infiltration.</p>

			<h2>Anticipated Future Behavior</h2>
			<p>I expect that the majority of the problem areas have shown themselves. I would expect to see a few new ones in the next year or two, and a declining number of new appearances in following years. This is not likely to lead to a reduced service life of the building or the wall..</p>

			<h2>Possible Remediation</h2>
			<p>Cutting control joints in the brick may solve the problem. It is the simplest measure to take as there is no disassembly or opening of the wall. Consider doing that either where needed or in 2-3 affected areas. At the same time replace damaged bricks and mortar. If a year later there is no renewed spalling or significant efflorescence in the repaired areas, then consider it fixed. If not, or even now if you are concerned, you can have a masonry specialist engineer or consultant examine the wall.</p>

			<h2>Your Particular Questions/Concerns</h2>
			<p>Your main concern was whether you had defective brick. You seem to have a problem with the construction of the wall rather defective materials. Your secondary concern was the consequence of doing nothing. The affected brick are likely to continue to deteriorate ifyou take no action.</p>

			<h2>Attachments</h2>
			<p>None.</p>

		</div>

		<div class="report-right">

			<div class="slider-wrapper theme-default">
			    <div id="slider1" class="nivoSlider">
			        <a href="images/qlgal/full/2.jpg" rel="prettyPhoto[ex1]" title="Overall context"><img src="images/qlgal/2.jpg" data-thumb="images/qlgal/2.jpg" alt="" title="Overall context" /></a>
			        <a href="images/qlgal/full/4.jpg" rel="prettyPhoto[ex1]" title="Problem in context"><img src="images/qlgal/4.jpg" data-thumb="images/qlgal/4.jpg" alt="" title="Problem in context" /></a>
			        <a href="images/qlgal/full/3.jpg" rel="prettyPhoto[ex1]" title="Problem detail from context area"><img src="images/qlgal/3.jpg" data-thumb="images/qlgal/3.jpg" alt="" title="Problem detail from context area" /></a>
			        <a href="images/qlgal/full/1.jpg" rel="prettyPhoto[ex1]" title="2nd problem detail from context area"><img src="images/qlgal/1.jpg" data-thumb="images/qlgal/1.jpg" alt="" title="2nd problem detail from context area" /></a>
			        <a href="images/qlgal/full/10.jpg" rel="prettyPhoto[ex1]" title="When you provide us sharp,  detailed photos we can see many details that are meaningful to us. This is simply a portion of an earlier example to show  how much detail we can see when we blow up a good 2MB photo."><img src="images/qlgal/10.jpg" data-thumb="images/qlgal/10.jpg" alt="" title="When you provide us sharp,  detailed photos we can see many details that are meaningful to us. This is simply a portion of an earlier example to show  how much detail we can see when we blow up a good 2MB photo." /></a>
			    </div>
			</div>

		</div>
	</div>

	<div id="example2">
		<h1>Example Report #2</h1>

		<h2 style="text-align:center;">Example #2</h2>

		<p>Example #2 is of a masonry problem on a building. The building was several years old when pictures were taken. All photos are on the west elevation. This is a mild appearance problem and also a concern for future durability.</p>

		<div class="report-left">
			<h2>Our Description Of The Problem</h2>
			<p>Apparently scaling or flaking on some pieces of the cast stone sidewalk planters. Scaling and flaking and &quot;popouts&quot; are similar in that they all involve loss of mortar (cement paste and sand) that is covering aggregate (stone). In a case like this all three may be involved, though I don't think we are seeing typical popouts (which involve a stone that expands when saturated and frozen). Observed following one season of freeze-thaw.</p>

			<h2>Likely Causes</h2>
			<p>The mortar (sand and cement paste portion or fraction of concrete) has broken off leaving a tiny crater and a visible stone. This occurs only where a stone is very near the surface and there is a weak thin mortar paste above the stone. A number of factors in both the mix and the piece can lead to this. Because it is observed only in some stones (far from a majority) we conclude that there is no inherent problem in the mix design or the material. Likely causes (and all can be operative include minor curing issues, dust on the stone, particles of deleterious material (dirt, chert, etc.) in the sand.</p>

			<h2>Anticipated Future Behavior</h2>
			<p>I expect that the majority of the problem areas have shown themselves. I would expect to see a few new ones in year 2, and a declining number of new appearances in following years. This is not likely to lead to a reduced service life or to complete deterioration of a piece..</p>

			<h2>Possible Remediation</h2>
			<p>None practical in our opinion. You can replace. Any patch will likely be as visible or more so than what you see now and will be at risk to fail as it will be very thin and weak. The stones that are exposed are &quot;colder&quot;in terms of color than the surface, which shows a lot of brown sand particles. You could carefully take a fine paint brush and put a matching stain on the stone. This will be a lot of work and will reduce the visibility of the affected areas. Will affect appearance, will not affect durability</p>

			<h2>Your Particular Questions/Concerns</h2>
			<p>Your main concern was whether these pieces were likely to continue scaling and crumbling over the next few years. That is not likely.</p>

			<h2>Attachments</h2>
			<p><a href="images/qlgal/1234a1.pdf" target="_blank">1234a1.pdf</a> points to certain areas in one of your photos.</p>

		</div>

		<div class="report-right">
			<div class="slider-wrapper theme-default">
			    <div id="slider2" class="nivoSlider">
			        <a href="images/qlgal/full/6.jpg" rel="prettyPhoto[ex2]" title="Overall context"><img src="images/qlgal/6.jpg" data-thumb="images/qlgal/6.jpg" alt="" title="Overall context" /></a>
			        <a href="images/qlgal/full/7.jpg" rel="prettyPhoto[ex2]" title="Problem context"><img src="images/qlgal/7.jpg" data-thumb="images/qlgal/7.jpg" alt="" title="Problem context" /></a>
			        <a href="images/qlgal/full/5.jpg" rel="prettyPhoto[ex2]" title="Detail of problem"><img src="images/qlgal/5.jpg" data-thumb="images/qlgal/5.jpg" alt="" title="Detail of problem" /></a>
			        <a href="images/qlgal/full/8.jpg" rel="prettyPhoto[ex2]" title="Very good close-up of similar problem area"><img src="images/qlgal/8.jpg" data-thumb="images/qlgal/8.jpg" alt="" title="Very good close-up of similar problem area" /></a>
			        <a href="images/qlgal/full/9.jpg" rel="prettyPhoto[ex2]" title="When you provide us sharp,  detailed photos we can see many details that are meaningful to us. This is simply a portion of an earlier example to show  how much detail we can see when we blow up a good 2MB photo."><img src="images/qlgal/9.jpg" data-thumb="images/qlgal/9.jpg" alt="" title="When you provide us sharp,  detailed photos we can see many details that are meaningful to us. This is simply a portion of an earlier example to show  how much detail we can see when we blow up a good 2MB photo." /></a>
			    </div>
			</div>
		</div>
	</div>

</div>

<div class="ql_next"><a href="?page=quicklook&step=1">Get A Quick Look</a></div>
<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center" style="clear:both;"><tr><td align="center"></td></tr><tr><td align="center"><a href="#" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700');"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_SbyPP_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark" width="250"></a></td></tr></table><!-- PayPal Logo -->