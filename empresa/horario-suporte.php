<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['support_hours_title'];?></title>
<meta name="description" content="<?php echo $lang['support_hours_description'];?>">
<meta name="keywords" content="<?php echo $lang['support_hours_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['support_hours_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['support_hours_title'];?>">
<meta property="og:description" content="<?php echo $lang['support_hours_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['support_hours_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['support_hours_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['support_hours_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['support_hours_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['support_hours_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row page_header_historia">
<div class="container">
<h3><?php echo $lang['support_hours_content_1'];?></h3>
<ol class="breadcrumb">
<li><a href="<?php echo $lang['head_website_home'];?>"><?php echo $lang['metodos_de_pagamento_content_2'];?></a></li>
<li class="active"><?php echo $lang['support_hours_content_1'];?></li>
</ol>
</div>
</section>
<section id="openinghours">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
<h3 class="intro"><?php echo $lang['support_hours_content_2'];?></h3><br>
<p style="text-align: justify;"><?php echo $lang['support_hours_content_3'];?></p><br>
<p style="text-align: justify;"><?php echo $lang['support_hours_content_4'];?></p>
<h4><i class="fa fa-clock"></i> <?php echo $lang['support_hours_content_5'];?> 
<span id="Maputo_z024" style="font-size:18px"></span>
<?php echo $lang['support_hours_content_segmented'];?>
<script>
time_is_widget.init({Maputo_z024:{template:"TIME | DATE", date_format:"dayname daynum/monthnum/yy"}});
</script>
</h4>
<br>
<div class="row">
<div class="col-lg-12"> 
<div class="table-responsive">
<table class="table table-striped">
<tbody><tr>
<?php echo $lang['support_hours_content_6'];?>
</tbody></table>
</div>
<div>
<h4><i class="fa fa-lock"></i> <?php echo $lang['support_hours_content_7'];?></h4>
<p><?php echo $lang['support_hours_content_8'];?> <a href="https://cliente.mozweb.co.mz/submitticket.php?<?php echo $lang['whmcs_lang_parameter'];?>"><?php echo $lang['support_hours_content_9'];?></p></div>
</div>
</div>
</div>
<?php include_once(dirname(__DIR__) ."/include/section/side-menu-support.php")?></div> 
</div>
</section>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</html>