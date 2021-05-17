<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php');?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['whois_dominio_title'];?></title>
<meta name="description" content="<?php echo $lang['whois_dominio_description'];?>">
<meta name="keywords" content="<?php echo $lang['whois_dominio_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['whois_dominio_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['whois_dominio_title'];?>">
<meta property="og:description" content="<?php echo $lang['whois_dominio_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['whois_dominio_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['whois_dominio_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['whois_dominio_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['whois_dominio_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['whois_dominio_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php");?>	
<?php
if (!isset($_GET['domain'])) {
	$domain = null;
} else{
	$domain = $_GET['domain'];
}

function ValidateDomain($domain) {
	if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
		return false;
	}
	return $domain;
}
/*
OLD API 
$username= "contact@mozdomains.com";
$password= "ncG98fkn";
$contents = file_get_contents("https://www.whoisxmlapi.com/whoisserver/WhoisService?domainName=$domain&username=$username&password=$password&outputFormat=JSON");
*/
$apikey = "at_HDfhTUcjU98D1KySaUdayK5tI6lYw";
$contents = file_get_contents("https://www.whoisxmlapi.com/whoisserver/WhoisService?apiKey=$apikey&domainName=$domain&outputFormat=JSON&da=1&ip=1");

$res=json_decode($contents, true);

/*if($res){
if(isset($res['ErrorMessage'])){
        echo $res['ErrorMessage'];
    } 
  }*/
?>

<section class="row find_domain find_domain3">
<div class="row m0 find_domain_cover">
<div class="container">
<div class="row">
<?php echo $lang['whois_dominio_content_1'];?>
</div>
</div>
</div>
<div class="container doamin_search_container">
<form action="whois" class="row m0 domain_search">
<div class="input-group">
<input type="text" required="" class="form-control" size="20" autocomplete="off" value="<?php if(isset($domain)) echo $domain; ?>" name="domain" id="domain" placeholder="<?php echo $lang['whois_dominio_content_4'];?>">
<span class="input-group-addon">
<input type="submit" value="<?php echo $lang['whois_dominio_content_5'];?>" class="">
</span>
</div>
</form>
</div>
</section>
<br><br><br>
<?php
if($domain) {
$domain = trim($domain);
if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
if(substr(strtolower($domain), 0, 8) == "https://") $domain = substr($domain, 8);
if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
if(count(explode('.', $domain)) == 1) $domain = $domain . ".com";
    
	if(ValidateDomain($domain)) {
		$result = ValidateDomain($domain);
	}
    
    else{
        $errors[] = "Invalid Input!";
        }
?>
<!-- Domain Search Result  START -->
<section id="domain_wrraper">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="single_feaure">
<div class="single_feature_header">
<div class="row">
<div class="col-md-6">
<img src="https://whois.mozdomains.com/img/whois/sitebuilder.png" alt="sitebuilder">
</div>
<div class="col-md-6">
<h4>Build your website yourself</h4>
</div>
</div>
</div>
<div class="single_feature_content">
<div class="row">
<div class="col-md-12">
<p>Building your website yourself is as easy as ABC</p>
</div>
</div>
</div>
<div class="single_feature_footer">
<div class="row">
<div class="col-md-12">
<a href="#">Order</a>
<a href="#">More Info</a>
</div>
</div>
</div>
</div>
<div class="single_feaure">
<div class="single_feature_header">
<div class="row">
<div class="col-md-6">
<img src="https://whois.mozdomains.com/img/whois/email-hosting.png" alt="sitebuilder">
</div>
<div class="col-md-6">
<h4>Get professional emails for your business</h4>
</div>
</div>
</div>
<div class="single_feature_content">
<div class="row">
<div class="col-md-12">
<p>Get professional email accounts that work any email client and comes with a storage space of 5GB for N500/month</p>
</div>
</div>
</div>
<div class="single_feature_footer">
<div class="row">
<div class="col-md-12">
<a href="#">Order</a>
<a href="#">More Info</a>
</div>
</div>
</div>
</div>
<div class="single_feaure">
<div class="single_feature_header">
<div class="row">
<div class="col-md-6">
<img src="https://whois.mozdomains.com/img/whois/ssl.png" alt="sitebuilder">
</div>
<div class="col-md-6">
<h4>Increase trust in your brand</h4>
</div>
</div>
</div>
<div class="single_feature_content">
<div class="row">
<div class="col-md-12">
<p>Get your customer, potential clients and browsers to trust your website.</p>
</div>
</div>
</div>
<div class="single_feature_footer">
<div class="row">
<div class="col-md-12">
<a href="#">Order</a>
<a href="#">More Info</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-9">
<?php
if($res['WhoisRecord']['domainAvailability'] == "AVAILABLE"){
?>
<p id="available"><i class="fa fa-check-circle"></i> <b><?=$domain?> is available!</b> <a href="https://cliente.mozweb.co.mz/cart.php?a=add&sld=<?=$domain?>&domain=register">Buy Now</a></p>
<?php 
} else{
?>
<p id="not_available"><i class="fa fa-ban"></i> <b>Not available</b></p>
<div class="row">
<div class="col-md-4">
<div class="domain_date">
<p>REGISTERED DATE</p>
<p><b><?= $res['WhoisRecord']['registryData']['createdDate'] ?? $res['WhoisRecord']['createdDate']; ?></b></p>
</div>
</div>
<div class="col-md-4">
<div class="domain_date">
<p>UPDATED DATE</p>
<p><b><?= $res['WhoisRecord']['registryData']['updatedDate'] ?? $res['WhoisRecord']['updatedDate'] ?? $res['WhoisRecord']['registryData']['createdDate'] ?? $res['WhoisRecord']['createdDate']; ?></b></p>
</div>
</div>
<div class="col-md-4">
<div class="domain_date">
<p>EXPIRY DATE</p>
<p><b><?= $res['WhoisRecord']['registryData']['expiresDate'] ?? $res['WhoisRecord']['expiresDate']; ?></b></p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div id="domain_details">
<h4><b>DOMAIN INFO</b></h4>
<ul>
<li><span>Domain Status: <?= $res['WhoisRecord']['status'] ?? $res['WhoisRecord']['registryData']['status']; ?></span>
<li><span>Domain Age: <?= $res['WhoisRecord']['estimatedDomainAge']; ?> Days</span>
<li><span>Domain Check: <?= $res['WhoisRecord']['domainAvailability']; ?></span>
<li><span>Domain IP: <?= $res['WhoisRecord']['ips'][0]; ?></span>
</li>
</ul>
<h4><b>REGISTRANT INFO</b></h4>
<ul>
<li><span>Name:</span> <?= $res['WhoisRecord']['registrant']['name'] ?? $res['WhoisRecord']['registryData']['registrant']['name']; ?></li>
<li><span>Company:</span> <?= $res['WhoisRecord']['registrant']['organization'] ?? $res['WhoisRecord']['registryData']['registrant']['organization']; ?></li>
<li><span>Address:</span> <?= $res['WhoisRecord']['registrant']['street1'] ?? $res['WhoisRecord']['registryData']['registrant']['street1'];; ?></li>
<li><span>City:</span> <?= $res['WhoisRecord']['registrant']['city'] ?? $res['WhoisRecord']['registryData']['registrant']['city'];; ?></li>
<li><span>State:</span> <?= $res['WhoisRecord']['registrant']['state'] ?? $res['WhoisRecord']['registryData']['registrant']['state']; ?></li>
<li><span>Postal Code:</span> <?= $res['WhoisRecord']['registrant']['postalCode'] ?? $res['WhoisRecord']['registryData']['registrant']['postalCode']; ?></li>
<li><span>Country:</span> <?= $res['WhoisRecord']['registrant']['country'] ?? $res['WhoisRecord']['registryData']['registrant']['country']; ?></li>
<li><span>Email:</span> <?= $res['WhoisRecord']['registrant']['email'] ?? $res['WhoisRecord']['registryData']['registrant']['email']; ?></li>
<li><span>Phone:</span> <?= $res['WhoisRecord']['registrant']['telephone'] ?? $res['WhoisRecord']['registryData']['registrant']['telephone']; ?></li>
</ul> 
<h4><b>ADMINISTRATOR INFO</b></h4>
<ul>
<li><span>Name:</span> <?= $res['WhoisRecord']['administrativeContact']['name'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['name']; ?></li>
<li><span>Company:</span> <?= $res['WhoisRecord']['administrativeContact']['organization'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['organization']; ?></li>
<li><span>Address:</span> <?= $res['WhoisRecord']['administrativeContact']['street1'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['street1']; ?></li>
<li><span>City:</span> <?= $res['WhoisRecord']['administrativeContact']['city'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['city']; ?></li>
<li><span>State:</span> <?= $res['WhoisRecord']['administrativeContact']['state'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['state']; ?></li>
<li><span>Postal Code:</span> <?= $res['WhoisRecord']['administrativeContact']['postalCode'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['postalCode']; ?></li>
<li><span>Country:</span> <?= $res['WhoisRecord']['administrativeContact']['country'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['country']; ?></li>
<li><span>Email:</span> <?= $res['WhoisRecord']['administrativeContact']['email'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['email'];; ?></li>
<li><span>Phone:</span> <?= $res['WhoisRecord']['administrativeContact']['telephone'] ?? $res['WhoisRecord']['registryData']['administrativeContact']['telephone']; ?></li>
</ul> 
<h4><b>TECHNICAL INFO</b></h4>
<ul>
<li><span>Name:</span> <?= $res['WhoisRecord']['technicalContact']['name'] ?? $res['WhoisRecord']['registryData']['technicalContact']['name']; ?></li>
<li><span>Company:</span> <?= $res['WhoisRecord']['technicalContact']['organization'] ?? $res['WhoisRecord']['registryData']['technicalContact']['organization']; ?> </li>
<li><span>Address:</span> <?= $res['WhoisRecord']['technicalContact']['street1'] ?? $res['WhoisRecord']['registryData']['technicalContact']['street1']; ?></li>
<li><span>City:</span> <?= $res['WhoisRecord']['technicalContact']['city'] ?? $res['WhoisRecord']['registryData']['technicalContact']['city']; ?></li>
<li><span>State:</span> <?= $res['WhoisRecord']['technicalContact']['state'] ?? $res['WhoisRecord']['registryData']['technicalContact']['state']; ?></li>
<li><span>Postal Code:</span> <?= $res['WhoisRecord']['technicalContact']['postalCode'] ?? $res['WhoisRecord']['registryData']['technicalContact']['postalCode']; ?></li>
<li><span>Country:</span> <?= $res['WhoisRecord']['technicalContact']['country'] ?? $res['WhoisRecord']['registryData']['technicalContact']['country']; ?></li>
<li><span>Email:</span> <?= $res['WhoisRecord']['technicalContact']['email'] ?? $res['WhoisRecord']['registryData']['technicalContact']['email']; ?></li>
<li><span>Phone:</span> <?= $res['WhoisRecord']['technicalContact']['telephone'] ?? $res['WhoisRecord']['registryData']['technicalContact']['telephone']; ?></li>
</ul>  
<h4><b>REGISTRAR INFO</b></h4>
<ul>
<li><span>Registrar:</span> <?= $res['WhoisRecord']['registrarName']; ?></li>
<li><span>Website:</span> <?= $res['WhoisRecord']['customField3Value'] ?? $res['WhoisRecord']['registryData']['customField3Value']; ?></li>
<li><span>Whois Server:</span> <?= $res['WhoisRecord']['whoisServer'] ?? $res['WhoisRecord']['registryData']['whoisServer'];  ?></li>
</ul> 
<h4><b>NAMESERVER</b></h4>
<?php
foreach($res['WhoisRecord']['registryData']["nameServers"]["hostNames"] ?? $res['WhoisRecord']["nameServers"]["hostNames"] as $n){
?> 
<li><span>Name Server:</span> <?= $n; ?></li>
<?php
}
?>
</div>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
</section>
<!-- Domain Search Resuld END-->
<?php } else { ?> 
<section class="row testi_news">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row sectionTitle">
<?php echo $lang['whois_dominio_content_2'];?>
</div>
<?php echo $lang['whois_dominio_content_3'];?>
</div>
</div>
</div>
</section>
<br><br><br><br>
<?php include_once(dirname(__DIR__) ."/include/section/domains-plan-end.php")?>
<?php } ?>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</body>
</html>