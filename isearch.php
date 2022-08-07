<?php
include("config.inc");
$keyword = "Image Search";
echo "
<html><head>
<style type=\"text/css\">


td {
background-color: transparent;
}
</style>
<title>$sitename - $q1</title>
<META NAME=\"description\" CONTENT=\"$q1\">
<META NAME=\"keywords\" CONTENT=\"$q1\">

</head>
<BODY BACKGROUND=\"$backgroundimage\" TEXT=\"$text\" LINK=\"$link\" ALINK=\"$alink\" VLINK=\"$vlink\">
";

include("$headerfile");


echo "
<table width=100% border=0 cellspacing=0 cellpadding=0>
<td>
<br><br>
</td>
</table>
<table width=100% border=0 cellspacing=0 cellpadding=0>
<td align=center width=100%><form action=\"isearch.php?q=\" method=\"get\">
<input type=\"text\" size=\"40\" name=\"q\" value=\"$q1\"title=\"Enter Search String\">
<input type=\"submit\" value=\"Search\">
<br>
<SELECT size=1 name='imagetype' value='$imagetype'>
<OPTION selected value=''>any filetype
<OPTION value='$jpg'>jpg
<OPTION value='$gif'>gif
<OPTION value='$png'>png
</SELECT>
<SELECT size=1 name='imgsz' value='$imgsz'>
<OPTION selected value=''>any size
<OPTION value='$icon'>small
<OPTION value='$medium'>medium
<OPTION value='$xxlarge'>large
</SELECT>
<SELECT size=1 name='imgc' value='$imgc'>
<OPTION selected value=''>any colors
<OPTION value='$mono'>black & white
<OPTION value='$gray'>grayscale
<OPTION value='$color'>full color
</SELECT><p>
</form>
</td></table>";



ereg("Small(.*)Next", $lines_string, $mydata);
$tenew = str_replace("$therecolor", "$ourcolor", $mydata); // change our color




// THE ESSENTIAL STUFF
$tenew2 = str_replace("$turl", "$nurl", $tenew);           // change some url
$tenew3 = str_replace("$thumold", "$thumnew", $tenew2);    // change thumbnail paths
$tenew4 = str_replace("http://images.google.com/images?q=$q", "http://$domain$pathtoscript/isearch.php?q=$q", $tenew3);
$tenew5 = str_replace("http://images.google.com/imgres?imgurl=", "http://$domain$pathtoscript/simage.php?n=", $tenew4);
$tenew6 = str_replace("/images?hl=", "http://$domain$pathtoscript/isearch.php?", $tenew5);


// THE HTML GARBAGE TO TAKE OUT AND REPLACE


$html = str_replace("<img src=/nav_previous.gif width=68 height=26 alt=\"\" border=0><br>", "", $tenew6); // Navigational images
$html1 = str_replace("<img src=/nav_page.gif width=16 height=26 alt=\"\" border=0><br>", "", $html);         // Navigational images
$html2 = str_replace("<img src=/nav_first.gif width=18 height=26 alt=\"\"><br>", "", $html1);                         // Navigational images
$html3 = str_replace("<img src=/nav_current.gif width=16 height=26 alt=\"\"><br>", "", $html2);                   // Navigational images
$html4 = str_replace("<img src=/nav_next.gif width=100 height=26 alt=\"\" border=0><br>", "", $html3);      // Navigational images


$html5 = str_replace("<td nowrap nowrap>", "<td nowrap>", $html4);                                                  // DELETING HTML
$html6 = str_replace("<span class=b>Previous</span>", "Previous&nbsp;", $html5);                          // DELETING HTML
$html7 = str_replace("<span class=b>Next", "Next", $html6);                                                               // DELETING HTML
$html8 = str_replace("Small</a></font></td></tr></table><font size=-1><br></font>", "", $html7);    // DELETING HTML
$html9 = str_replace("<td nowrap>", "</td><td nowrap>", $html8);    // FIXING HTML
$html10 = str_replace("<tr align=center valign=top><td valign=bottom nowrap><font size=-1>Result&nbsp;Page:&nbsp;</font></td>", "", $html9);    // FIXING HTML
$html11 = str_replace("<tr align=center valign=top><td valign=bottom nowrap><font size=-1>Result&nbsp;Page:&nbsp;</font>", "", $html10);          // same type FIXING HTML
$html12 = str_replace("<td nowrap>", "<td nowrap>&nbsp;", $html11);                                                // DELETING HTML

$html13 = str_replace("$didyoumeanold", "$didyoumeannew", $html12);                                                // Did you mean FIX
$html14 = str_replace("Small</a></font></td></tr></table><p>", "", $html13); 
$html15 = str_replace("Small</b></font></td></tr></table><font size=-1><br></font>", "", $html14); 

$html16 = str_replace("$imagesizeold", "$imagesizenew", $html15);                                                // DROPDOWN IMAGESIZE FIX
$html17 = str_replace("$imagecolorold", "$imagecolornew", $html16);                                                // DROPDOWN IMAGECOLOR FIX

echo "$html17[0]";

echo "</table>
<table width=100% border=0 cellspacing=0 cellpadding=0>
<td align=center width=100%>
<br>
<form action=\"isearch.php?q=\" method=\"get\">
<input type=\"text\" size=\"40\" name=\"q\" value=\"$q1\"title=\"Enter Search String\">
<input type=\"submit\" value=\"Search\">
</form></td>
</table>";

include("$footerfile");
?>