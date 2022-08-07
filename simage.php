<html>
<head>
<?php
include("config.inc");
echo "<title>$sitename</title>
</head>
<BODY BACKGROUND=\"$backgroundimage\" TEXT=\"$text\" LINK=\"$link\" ALINK=\"$alink\" VLINK=\"$vlink\">";



$picture = $_GET['n'];

echo "
<table width=100% border=0 cellspacing=5 cellpadding=5>
<tr><td align=center width=100%>
$displaytext
</td></tr>

<tr><td align=center width=100%>
<a href=\"#\" onClick=\"javascript:window.history.back(-1)\">Back To $sitename
</td></tr>

<tr><td align=center width=100%>
<img src=\"$n\">
</td></tr>
</table>";
?>

</body>
</html>