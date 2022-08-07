<?

// Name of your site
$sitename = "Image Search";

//Your www.domain.com address *Do not use http://
$domain = "www.domain.com";

// Path from www without trailing slash /
$pathtoscript = "/webimages";

// Body Tag Attributes * Any of these can be left blank
$bgcolor =""; // Background Color
$text ="";       // Text Color
$link ="";        // Link Color
$alink ="";      // Active Link Color
$vlink ="";      // Visited Link Color
$backgroundimage = "http://www.domain.com/images/background.jpg";  // Background Image

// Header and Footer files 
// If they are located somehere else then show full path  ex: /home/user/www/header.txt
$headerfile = "header.txt";
$footerfile = "footer.txt";


// Result text that shows after an image is clicked
$displaytext = "Your Image From $sitename";





// No need to edit below here
// #######################################################

// 0 represents "showing no errors" 
// Replacing with E_ALL will "show all errors"
error_reporting(0); 


// Image Variables - imgurl=(image location) imgrefurl=(webpage image was found) h=(height) w=(width) sz=(size)
$imgurl = 'imgurl';
$imgrefurl = 'imgrefurl';
$h = 'h';
$w = 'w';
$sz = 'sz';

// imagetype -  you cannot  add more than the 3 filetypes used here
$jpg = 'jpg';
$gif = 'gif';
$png = 'png';

// image size -  you cannot  add more than the 3 types used here
$icon = 'icon';
$meduim = 'small|medium|large|xlarge';
$xxlarge = 'xxlarge';
// image colors -  you cannot  add more than the 3 types used here
$mono = 'mono';
$gray = 'gray';
$color = 'color';


$lang = "en";
$start = $_GET['start'];
$q1 = $_GET['q'];
$q = str_replace(" ", "+", $q1);
$turl = "/imgres?";
$nurl = "http://images.google.com/imgres?";
$therecolor = "#e7eefc";
$ourcolor = "#99CCFF";
$thumnew = "http://images.google.com/images?q";
$thumold = "/images?q";
$didyoumeanold = "/images?svnum";
$didyoumeannew = "$pathtoscript/isearch.php?svnum";
$imagesizeold =  "/images?imgsz";
$imagesizenew = "$pathtoscript/isearch.php?imgsz";
$imagecolorold = "/images?imgc";
$imagecolornew =  "$pathtoscript/isearch.php?imgc";
$url = "http://images.google.com/images?q=$q&hl=$lang&as_filetype=$imagetype&imgsz=$imgsz&imgc=$imgc&start=$start";
// $url = "http://images.google.com/images?q=$q&hl=$lang&start=$start";
$lines_array = file($url);
$lines_string = implode('', $lines_array);

?>