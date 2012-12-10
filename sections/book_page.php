<?php
$book_pages = array(
"cover" => "Front Cover",
"a1" => "1st A - Arch",
"a2" => "2nd A - Anchor",
"e2" => "2nd E - Expansion Bolt",
"g1" => "1st G - GFRC",
"g2" => "2nd G - GRG"
);

if (isset($_GET['book_page'])){
function array_neighbor($arr, $key)
{
   $keys = array_keys($arr);
   $keyIndexes = array_flip($keys);
 
   $return = array();
   if (isset($keys[$keyIndexes[$key]-1])) {
       $return[] = $keys[$keyIndexes[$key]-1];
   }
   else {
       $return[] = $keys[sizeof($keys)-1];
   }
  
   if (isset($keys[$keyIndexes[$key]+1])) {
       $return[] = $keys[$keyIndexes[$key]+1];
   }
   else {
       $return[] = $keys[0];
   }
  
   return $return;
}
$curr = $_GET['book_page'];
$neighbors = array_neighbor($book_pages,$curr);

	echo "<html>
<head>
<title>Cary Concrete Products ABC Book Preview</title>
</head>
<body marginheight=0>
<center>
<img src=../images/book/$curr.gif border=2>
<table width=100% border=0>
	<tr>
		<td align=left><a href=book_page.php?book_page={$neighbors[0]}>&lt;&lt;{$book_pages[$neighbors[0]]}</a></td>
		<td align=center>{$book_pages[$curr]}</td>
		<td align=right><a href=book_page.php?book_page={$neighbors[1]}>{$book_pages[$neighbors[1]]}&gt;&gt;</a></td>
	</tr>
</table>
</center>
</body>
</html>";
}
?>