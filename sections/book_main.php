<?php
include("book_page.php");

echo "
<img style=\"float:left;padding: 0 10px 20px 0;\" src=\"images/man.gif\" alt=\"Slab-man\"><img src=\"images/words.gif\" alt=\"Slab-man's Message\">

<p>We published a very nice book illustrating many of the basics of precast concrete and related materials. There are two different illustrations for each letter, plus a humorous comment from 'Slab-Man' on each page. Entertaining and educational, this is suitable for all ages. You can download sample pages or send money and we'll send you however many books you want. <a href=sections/order.html target=_blank>Click here to view the order form</a>.</p>

<p>Click on the thumbnails below to open each picture in a new window. The grey copyright notice appearing on each image is not in the book, merely a watermark for these posted images. Feel free to download, print, and color in these images!</p>

<div id=\"abc\" align=\"center\">
<table border=\"0\">\n\t<tr>";

$i = 1;
foreach ($book_pages as $page=>$title){
	echo "\n\t\t<td><a href=\"javascript:book_open('sections/book_page.php?book_page=".$page."')\"><img src=\"images/book/".$page."_thumb.jpg\" width=\"150\" height=\"200\" alt=\"ABC Book Preview\"></a><p><a href=\"javascript:book_open('sections/book_page.php?book_page=".$page."')\">$title</a></p></td>";
	
/*	if (!is_float($i/3)){
		echo "	</tr>
	<tr>\n";
	}*/
	
	if ($i==3){
		echo "\n\t</tr>\n\t<tr>";
	}
	
	$i++;
}

echo "	
	</tr>
</table>
</div>
";

?>