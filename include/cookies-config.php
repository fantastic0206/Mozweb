<?php if(count(get_included_files()) ==1) exit("Direct access not permitted."); ?>
<?php
$url = $_SERVER['REQUEST_URI']; //current URL
$parts = explode('/',$url);
$dir = $_SERVER['SERVER_NAME']; //current Server Name
for ($i = 0; $i < count($parts) - 1; $i++) {
 $dir .= $parts[$i] . "/";
}

//Others Countries Concatenate
$dir_others = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 2; $i++) {
 $dir_others .= $parts[$i] . "/";
}

//English
if ($dir == "$dir_others"."en/") {
	include_once '../en/languages/cookies.php';
}
//Angolan
else {
	include_once 'languages/cookies.php';
	//echo $dir;
}
?>