<?php
require(__DIR__ . "/../config.php");
?>
<?php include_once (dirname(__DIR__) .'../..//include/cookies-config-sub.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['ferramenta_testador_site_title'];?></title>
<meta name="description" content="<?php echo $lang['ferramenta_testador_site_description'];?>">
<meta name="keywords" content="<?php echo $lang['ferramenta_testador_site_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['ferramenta_testador_site_url'];?>">
<meta property="og:title" content="<?php echo $lang['ferramenta_testador_site_title'];?>">
<meta property="og:description" content="<?php echo $lang['ferramenta_testador_site_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['ferramenta_testador_site_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['ferramenta_testador_site_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['ferramenta_testador_site_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['ferramenta_testador_site_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['ferramenta_testador_site_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."../../include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."../../include/header-menu.php")?>
<section class="row page_header_verificador">
<div class="container">
<h3><?php echo $lang['ferramenta_testador_site_content_1'];?></h3>
<ol class="breadcrumb">
<li><a href="#">home</a></li>
<li class="active"><?php echo $lang['ferramenta_testador_site_content_1'];?></li>
</ol>
</div>
</section>
<section class="row 404_content">
<div class="container">
<div class="row">
<br>
<form action="testador-de-site.php" method="post"> 
<div class="col-sm-6">
<div class="row m0 error_mark1">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/aguardando_verificacao.png">
<?php echo $lang['ferramenta_testador_site_content_2'];?>
</div>
</div>
<div class="col-sm-4">
<div class="row m0 error_msg1">
<?php if (isset($error_msg)) { ?>
<div class="alert alert-danger" role="alert">
<p><?php echo $error_msg; ?></p>
</div>
<?php } ?>
<?php echo $lang['ferramenta_testador_site_content_3'];?>
<input class="form-control" name="url" type="url" value="http://" required>
<br><center><p><?php echo $lang['ferramenta_testador_site_content_4'];?></p>
<a href="#" onclick="document.forms[0].submit();return false;" class="btn btn-primary"><i class="fa fa fa-check-circle fa-lg"></i> <?php echo $lang['ferramenta_testador_site_content_5'];?></a></center><br><br>
<input type="submit" style="display: none;" /> 
</div>
</div>
</form> 
</div>
<?php echo $lang['ferramenta_testador_site_content_6'];?>
<br><br><br>
</div> 
<div class="wpb_row vc_row-fluid feature_section18 "><div class="container ">
<div class="vc_col-sm-12 wpb_column vc_column_container ">
<h1 style="color: #fff;"><?php echo $lang['ferramenta_meuip_content_4'];?><div class="clearfix margin_top2"></div>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<br><p><a href="<?php echo $lang['header_menu_link_4'];?>" class="btn btn-primary"><?php echo $lang['ferramenta_meuip_content_5'];?></a></p>
</div>
</div>
</div> 
</div></div>
</section><br><br><br>
<?php include_once(dirname(__DIR__) ."../../include/section/domains-plan-end.php")?>
<?php include_once(dirname(__DIR__) ."../../include/footer.php")?>
</body>
</html>