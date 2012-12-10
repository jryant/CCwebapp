<?php
echo "
<h2>The 63rd Street Beach House</h2>
<div id=\"jobs\">
<img src=\"jobs/j63rd/image1.jpg\" ALT=\"63rd Street Beach House\">
</div>
<p>Jackson Park is one of the jewels of Chicago's park system. Frederick Law Olmstead designed it to coincide with the 1893 World Columbian Exposition. The entire park is listed in the National Register of Historic Places. It is now an integral part of one of Chicago's most culturally diverse neighborhoods. The 63rd St beach house is in Jackson Park. In 1998, the General Contractor called in Cary Concrete Products to help with the restoration of the long neglected building. It is a cast in place concrete structure of with a footprint of about sixty seven thousand square feet. The original builders used local aggregate brought to the site via the Illinois-Michigan Canal. Thanks to research done by our customer, we learned that five quarries currently in operation could have supplied the original stone. Stone taken from the five sites was used to produce samples until they achieved a satisfactory mix design.</p>

<p>We supplied precast concrete architectural brackets, water fountains and railing posts to match the originals. In order to make the brackets and water fountains we had a sculptor create a model based on photographs and sketches. Our mold maker used these models to produce molds, which we later used to make the pieces.</p>

<p>The original railing posts, which went around the outside of the second story promenade deck, were gone before we had a chance to make measured drawings. Instead the park district had the original contract drawings from the early part of the century, and these along with sketches made before the demolition were used to create the pieces. The walls of the original building were cast with prominent \"lift lines\" about every ten to twelve inches. One requirement of the project was to recreate these lift lines on our railing posts, while at the same time preserving the structural integrity of the pieces. We could not vibrate or otherwise consolidate the concrete in the forms. Instead, we placed the material in lifts alternating low to moderate slump batches to achieve the desired effect. After years of working to produce perfect \"sugar cube\" cast stone, it was very difficult to achieve this look. We made the pieces with a separate column and top. The column has a void in the center. This allowed our customer to locate the pieces accurately, anchor epoxy coated reinforcing to the deck below and fill the void with cast in place cement.</p>

<p>The fountain courtyard features an interactive ground level fountain. Surrounding the fountain, we supplied benches, radial in plan with recessed panels containing integral lighting. Unlike the pieces designed to match the existing structure, these benches gave us a chance to show off our smooth acid wash finish. The designers of the fountain courtyard keyed their layout to that of the existing building. This meant close coordination among various trades in the construction. Since our pieces were relatively long lead-time items we had to \"get it right\" from the start and construct our pieces exactly as drawn. We think the results speak for themselves and we hope the residents of Chicago will enjoy these benches and the restored beach house for many generations.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($j63rd[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=j63rd&amp;num=".$num."\"><img src=\"jobs/j63rd/thumb/{$j63rd[$num][0]}\" height=\"{$j63rd[$num][1]}\" width=\"{$j63rd[$num][2]}\" alt=\"{$j63rd[$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>