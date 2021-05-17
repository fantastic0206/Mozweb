<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['wordpress_gerenciado_title'];?></title>
<meta name="description" content="<?php echo $lang['wordpress_gerenciado_description'];?>">
<meta name="keywords" content="<?php echo $lang['wordpress_gerenciado_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['wordpress_gerenciado_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['wordpress_gerenciado_title'];?>">
<meta property="og:description" content="<?php echo $lang['wordpress_gerenciado_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['wordpress_gerenciado_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['wordpress_gerenciado_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['wordpress_gerenciado_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['wordpress_gerenciado_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['wordpress_gerenciado_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row">
<div class="row m0 contact_banner hosting_shared">
<div class="container">
<div class="row">
<?php echo $lang['wordpress_gerenciado_content_1'];?>
<?php echo $lang['wordpress_gerenciado_content_2'];?>
<?php echo $lang['wordpress_gerenciado_content_3'];?>
</div>
</div>
</div>
</section> 
<section class="row pricing_plan_table">
<div class="container">
<div class="row sectionTitle">
<?php echo $lang['wordpress_gerenciado_content_4'];?>
<?php echo $lang['wordpress_gerenciado_content_5'];?>
<br>
</div>
<div class="table-responsive">
<div class="col-sm-3 pricing_plan_cell">
<div class="row plan_type"><?php echo $lang['wordpress_gerenciado_content_6'];?></div>
<div class="row pricing_row"><?php echo $lang['wordpress_gerenciado_content_7'];?></div>
<div class="row nav_a">
<ul class="nav">
<?php echo $lang['wordpress_gerenciado_content_8'];?>
</ul>
<a href="#" class="btn btn-primary visible-none"><?php echo $lang['wordpress_gerenciado_content_9'];?></a>
</div>
</div>
<div class="col-sm-3 pricing_plan_cell">
<div class="row plan_type silver"><?php echo $lang['wordpress_gerenciado_content_10'];?></div>
<div class="row pricing_row">
<span class="amount"><script src="https://cliente.mozweb.co.mz/feeds/productsinfo-sec.php?pid=40&get=price&billingcycle=monthly<?php echo $lang['website_currency'];?>"></script></span>
<small><?php echo $lang['wordpress_gerenciado_content_11'];?></small>
</div>
<div class="row nav_a">
<ul class="nav">
<?php echo $lang['wordpress_gerenciado_content_12'];?>
</ul>
<a href="https://cliente.mozweb.co.mz/cart.php?a=add&pid=40<?php echo $lang['whmcs_lang_parameter'];?>" class="btn btn-primary"><i class="fa fa-shopping-cart "></i> <?php echo $lang['wordpress_gerenciado_content_9'];?></a>
</div>
</div>
<div class="col-sm-3 pricing_plan_cell">
<div class="row plan_type gold"><?php echo $lang['wordpress_gerenciado_content_13'];?></div>
<div class="row pricing_row">
<span class="amount"><script src="https://cliente.mozweb.co.mz/feeds/productsinfo-sec.php?pid=41&get=price&billingcycle=monthly<?php echo $lang['website_currency'];?>"></script></span>
<small><?php echo $lang['wordpress_gerenciado_content_11'];?></small>
</div>
<div class="row nav_a">
<ul class="nav">
<?php echo $lang['wordpress_gerenciado_content_14'];?>
</ul>
<a href="https://cliente.mozweb.co.mz/cart.php?a=add&pid=41<?php echo $lang['whmcs_lang_parameter'];?>" class="btn btn-primary"><i class="fa fa-shopping-cart "></i> <?php echo $lang['wordpress_gerenciado_content_9'];?></a>
</div>
</div>
<div class="col-sm-3 pricing_plan_cell">
<div class="row plan_type diamond"><?php echo $lang['wordpress_gerenciado_content_15'];?></div>
<div class="row pricing_row">
<span class="amount"><script src="https://cliente.mozweb.co.mz/feeds/productsinfo-sec.php?pid=42&get=price&billingcycle=monthly<?php echo $lang['website_currency'];?>"></script></span>
<small><?php echo $lang['wordpress_gerenciado_content_11'];?>s</small>
</div>
<div class="row nav_a">
<ul class="nav">
<?php echo $lang['wordpress_gerenciado_content_16'];?>
</ul>
<a href="https://cliente.mozweb.co.mz/cart.php?a=add&pid=42<?php echo $lang['whmcs_lang_parameter'];?>" class="btn btn-primary"><i class="fa fa-shopping-cart "></i> <?php echo $lang['wordpress_gerenciado_content_9'];?></a>
</div>
</div>
</div>
</div>
</section>
<?php include_once(dirname(__DIR__) ."/include/section/hosting-softaculous.php")?>
<?php include_once(dirname(__DIR__) ."/include/section/hosting-linux-support.php")?>
<?php include_once(dirname(__DIR__) ."/include/section/hosting-why-choose-us.php")?>
<?php include_once(dirname(__DIR__) ."/include/section/hosting-features-end.php")?><br><br><br>
<?php include_once(dirname(__DIR__) ."/include/section/faqs-hosting.php")?>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</body>
</html>