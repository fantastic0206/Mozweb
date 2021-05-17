<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php');?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['termos_servicos_title'];?></title>
<meta name="description" content="<?php echo $lang['termos_servicos_description'];?>">
<meta name="keywords" content="<?php echo $lang['termos_servicos_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['termos_servicos_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['termos_servicos_title'];?>">
<meta property="og:description" content="<?php echo $lang['termos_servicos_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['termos_servicos_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['termos_servicos_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['termos_servicos_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['termos_servicos_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['termos_servicos_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row page_header_politicas">
<div class="container">
<h3><?php echo $lang['termos_e_condicoes_content_2'];?></h3>
<ol class="breadcrumb">
<li><a href="<?php echo $lang['head_website_home'];?>"><?php echo $lang['metodos_de_pagamento_content_2'];?></a></li>
<li class="active"><?php echo $lang['termos_e_condicoes_content_2'];?></li>
</ol>
</div>
</section>
<section class="row blog_content" id="openinghours">
<div class="container">
<div class="row">
<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 blogs">
<?php echo $lang['termos_e_condicoes_content_1'];?>
</div>
<?php include_once(dirname(__DIR__) ."/include/section/side-menu-support.php")?>
</div>
</div>
</section>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</body>
</html>