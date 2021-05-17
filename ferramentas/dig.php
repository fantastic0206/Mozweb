<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['ferramenta_dig_title'];?></title>
<meta name="description" content="<?php echo $lang['ferramenta_dig_description'];?>">
<meta name="keywords" content="<?php echo $lang['ferramenta_dig_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['ferramenta_dig_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['ferramenta_dig_title'];?>">
<meta property="og:description" content="<?php echo $lang['ferramenta_dig_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['ferramenta_dig_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['ferramenta_dig_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['ferramenta_dig_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['ferramenta_dig_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['ferramenta_dig_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row page_header_verificador">
<div class="container">
<h3><?php echo $lang['ferramenta_meuip_content_1'];?></h3>
<ol class="breadcrumb">
<li><a href="#">home</a></li>
<li class="active"><?php echo $lang['ferramenta_meuip_content_1'];?></li>
</ol>
</div>
</section>
<div class="container">
<div class="col-sm-12 col-md-8"><br><br>
<h2>Web-Based Remote dig Lookup Tool</h2>
<form action="dig" id="testresult">
<legend>Remote dig Lookup Service</legend>
<div class="form-group">
<label  for="host">Host to Lookup</label>
<input class="form-control"  type="text" id="host" name="host" value="" title="">
<div class="help-block">
<p>Enter an IP address or a fully qualified hostname</p>
</div>
</div>
<button  type="submit" class="btn btn-primary" title="">Start remote ping »</button>
</form>
</div>
</div><br><br>
 <div class="domain_promo_div">
<table width="1055" align="center">
<tbody>
<tr>
<td align="left">
<?php
if (isset($_GET['host'])) {
    $host = $_GET['host'];
    $return = array(
            'status' => test($host)
    ); // gawd this is UGLY :D

    // leave for color coding by line
	echo '<pre class="prewhois">';
    echo "Starting Lookup...<br>";
    for($x=0; $x < count($return['status']); $x++)
    { 
        echo $return['status'][$x];
        echo "<br>";
    }
    echo "dig Complete with status: " . "OK?";
	echo '</pre>';
    // ---------------------------
}

/*
 * What the function does
 *
 * @param (name) about this param
 * @return (name)
 */
function test($host) {
     exec(sprintf('dig any %s', escapeshellarg($host)), $res, $rval);
     return $res;
}
?>
</td>
</tr>
</tbody>
</table>
</div><br><br><br>
<?php include_once(dirname(__DIR__) ."/include/section/domains-plan-end.php")?>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</body>
</html>