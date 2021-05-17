<?php include_once (dirname(__FILE__) .'/include/cookies-config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['head_title_index'];?></title>
<meta name="description" content="<?php echo $lang['head_description_index'];?>">
<meta name="keywords" content="<?php echo $lang['head_keywords_index'];?>">
<link rel="canonical" href="<?php echo $lang['head_canonical'];?>">
<meta property="og:title" content="<?php echo $lang['head_title_index'];?>">
<meta property="og:description" content="<?php echo $lang['head_description_index'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['head_canonical'];?>">
<meta property="og:image" content="<?php echo $lang['head_meta_image'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozweb">
<meta name="twitter:title" content="<?php echo $lang['head_title_index'];?>">
<meta name="twitter:description" content="<?php echo $lang['head_description_index'];?>">
<meta name="twitter:image" content="<?php echo $lang['head_meta_image'];?>">
<?php include_once(dirname(__FILE__) ."/include/meta-link.php")?>
</head>
<body class="home">
<?php include_once(dirname(__FILE__) ."/include/header-menu.php")?>
<section class="row slider">
<div class="owl-carousel home_slider">
<div class="item">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/slider/alojamento-partilhado.svg">
<div class="slide_caption row m0">
<div class="container">
<div class="row">
<?php echo $lang['home_index_content_1'];?>
<a href="<?php echo $lang['header_menu_link_3'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
<a href="<?php echo $lang['header_menu_link_3'];?>" class="pkg_price"><script src="https://cliente.mozweb.co.mz/feeds/productsinfo-sec.php?pid=1&get=price&billingcycle=monthly<?php echo $lang['website_currency'];?>"></script></a>
</div>
</div>
</div>
</div>
<div class="item">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/slider/alojamento-wordpress.svg">
<div class="slide_caption row m0">
<div class="container">
<div class="row">
<?php echo $lang['home_index_content_2'];?>
<a href="<?php echo $lang['header_menu_link_2'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
<a href="<?php echo $lang['header_menu_link_2'];?>" class="pkg_price"><script src="https://cliente.mozweb.co.mz/feeds/productsinfo-sec.php?pid=40&get=price&billingcycle=monthly<?php echo $lang['website_currency'];?>"></script></a>
</div>
</div>
</div>
</div>
<div class="item">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/slider/registo-de-dominios.svg">
<div class="slide_caption row m0">
<div class="container">
<div class="row">
<?php echo $lang['home_index_content_3'];?>
<a href="<?php echo $lang['header_menu_link_12'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
<a href="<?php echo $lang['header_menu_link_12'];?>" class="pkg_price"><script language="javascript" src="https://cliente.mozweb.co.mz/feeds/domainprice.php?tld=.com&type=register&regperiod=1&format=1&<?php echo $lang['website_currency'];?>"></script></a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="row find_domain find_domain2" style="background: #333333 no-repeat scroll center center;">
<div class="container">
<form  method="post" action="https://cliente.mozweb.co.mz/cart.php?a=add&domain=register<?php echo $lang['whmcs_lang_parameter'];?>" class="row m0 domain_search">
<div class="col-sm-3 col-md-3 col-lg-2 form_title">
<?php echo $lang['home_index_content_4'];?>
</div>
<div class="col-sm-9 col-md-9 col-lg-10">
<div class="input-group">
<input type="hidden" name="direct" value="true" />
<input type="text" name="query" size="20" autocomplete="off" id="domain" class="form-control" placeholder="<?php echo $lang['home_index_content_24'];?>" required>
<div class="input-group-addon">
<input type="submit" value="<?php echo $lang['home_index_content_25'];?>">
</div>
</div>
<ul class="nav nav-pills price_list">
<li><img src="<?php echo $lang['website_global_img_link'];?>assets/images/com.png"> &nbsp;<script language="javascript" src="https://cliente.mozweb.co.mz/feeds/domainprice.php?tld=.com&type=register&regperiod=1&format=1&<?php echo $lang['website_currency'];?>"></script></li>
<li><img src="<?php echo $lang['website_global_img_link'];?>assets/images/net.png"> &nbsp;<script language="javascript" src="https://cliente.mozweb.co.mz/feeds/domainprice.php?tld=.net&type=register&regperiod=1&format=1&<?php echo $lang['website_currency'];?>"></script></li>
<li><img src="<?php echo $lang['website_global_img_link'];?>assets/images/org.png"> &nbsp;<script language="javascript" src="https://cliente.mozweb.co.mz/feeds/domainprice.php?tld=.org&type=register&regperiod=1&format=1&<?php echo $lang['website_currency'];?>"></script></li>
<li><img src="<?php echo $lang['website_global_img_link'];?>assets/images/info.png"> &nbsp;<script language="javascript" src="https://cliente.mozweb.co.mz/feeds/domainprice.php?tld=.info&type=register&regperiod=1&format=1&<?php echo $lang['website_currency'];?>"></script></li>
</ul>
</div>
</form>
</div>
</section>
<section class="row serviceTab serviceTab_byside">
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="row service_tab_menu">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#serviceT1" aria-controls="serviceT1" role="tab" data-toggle="tab"><img src="" class="icon"><?php echo $lang['home_index_content_5'];?></a></li>
<li role="presentation"><a href="#serviceT2" aria-controls="serviceT2" role="tab" data-toggle="tab"><img src="" class="icon"><?php echo $lang['home_index_content_6'];?></a></li>
<li role="presentation"><a href="#serviceT3" aria-controls="serviceT3" role="tab" data-toggle="tab"><img src="" class="icon"><?php echo $lang['home_index_content_7'];?></a></li>
<li role="presentation"><a href="#serviceT4" aria-controls="serviceT4" role="tab" data-toggle="tab"><img src="" class="icon"><?php echo $lang['home_index_content_8'];?></a></li>
</ul>
</div>
</div>
<div class="col-sm-9">
<div class="row m0 serviceTab_contents">
<div class="tab-content">
<div class="tab-pane  active" role="tabpanel" id="serviceT1">
<div class="col-sm-6 ico_pic">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-home-mozweb.svg"  alt="<?php echo $lang['home_index_content_alt_1'];?>" class="service_img img-responsive fright">
</div>
<div class="col-sm-6 texts">
<?php echo $lang['home_index_content_9'];?>
<a href="<?php echo $lang['header_menu_link_5'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
<div class="tab-pane" role="tabpanel" id="serviceT2">
<div class="col-sm-6 ico_pic">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-home-mozweb.svg" alt="<?php echo $lang['home_index_content_alt_1'];?>" class="service_img img-responsive fright">
</div>
<div class="col-sm-6 texts">
<?php echo $lang['home_index_content_11'];?>
<a href="<?php echo $lang['header_menu_link_3'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
<div class="tab-pane" role="tabpanel" id="serviceT3">
<div class="col-sm-6 ico_pic">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-home-mozweb.svg" alt="<?php echo $lang['home_index_content_alt_1'];?>" class="service_img img-responsive fright">
</div>
<div class="col-sm-6 texts">
<?php echo $lang['home_index_content_12'];?>
<a href="<?php echo $lang['header_menu_link_49'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
<div class="tab-pane" role="tabpanel" id="serviceT4">
<div class="col-sm-6 ico_pic">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-home-mozweb.svg" alt="<?php echo $lang['home_index_content_alt_1'];?>" class="service_img img-responsive fright">
</div>
<div class="col-sm-6 texts">
<?php echo $lang['home_index_content_13'];?>
<a href="<?php echo $lang['header_menu_link_4'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="row why_choose why_choose2">
<div class="container">
<div class="row sectionTitle">
<h2><?php echo $lang['home_index_content_14'];?></h2>
</div>
<div class="row">
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/sla-uptime.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_2'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_15'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/scalable.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_5'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_16'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/migration.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_8'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_17'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/daily-backup.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_3'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_18'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/cpu-hardware.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_6'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_19'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/control-painel.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_9'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_20'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/speed.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_4'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_21'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/test-drive.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_7'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_22'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="feature_section1 media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/home/customer-service.svg" width="80px" alt="<?php echo $lang['home_index_content_alt_10'];?>"></div>
<div class="media-body">
<?php echo $lang['home_index_content_23'];?>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="row featureTab">
<div class="row m0 featureTab_contents">
<div class="tab-content"><center><br><br><br><br><br><h1><?php echo $lang['home_index_content_26'];?> <img src="<?php echo $lang['website_global_img_link'];?>assets/images/emoji_campeoesvendas.png"></h1></center>
<div class="tab-pane active" role="tabpanel" id="featureT1">
<div class="content_row content_row3 row m0">
<div class="container">
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<?php echo $lang['home_index_content_27'];?>
<div class="icon m0 row"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/cwatch-backup.svg" width="220px" alt="<?php echo $lang['home_index_content_alt_11'];?>"></div>
<a href="#" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<?php echo $lang['home_index_content_30'];?>
<div class="icon m0 row"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/redio-streaming.svg" width="220px" alt="<?php echo $lang['home_index_content_alt_12'];?>"></div>
<a href="#" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<?php echo $lang['home_index_content_31'];?>
<div class="icon m0 row"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/reseller-hosting.svg" width="220px" alt="<?php echo $lang['home_index_content_alt_13'];?>"></div>
<a href="#" class="btn btn-primary"><?php echo $lang['home_index_content_10'];?></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="row service_tabs_list">
<div class="row m0 service_tab service_tab1">
<div class="container">
<div class="row">
<div class="col-sm-5 ico_price">
<div class="row m0">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-shared-hosting-mozweb.svg" width="300px" alt="<?php echo $lang['home_index_content_alt_14'];?>">
</div>
</div>
<div class="col-sm-7 content">
<?php echo $lang['home_index_content_32'];?>
<a href="<?php echo $lang['header_menu_link_3'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_35'];?></a>
</div>
</div>
</div>
</div>
<div class="row m0 service_tab service_tab2">
<div class="container">
<div class="row">
<div class="col-sm-5 ico_price">
<div class="row m0">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-domain-mozweb.svg" width="320px" alt="<?php echo $lang['home_index_content_alt_15'];?>">
</div>
</div>
<div class="col-sm-7 content">
<?php echo $lang['home_index_content_33'];?>
<a href="<?php echo $lang['header_menu_link_15'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_36'];?></a>
</div>
</div>
</div>
</div>
<div class="row m0 service_tab service_tab3">
<div class="container">
<div class="row">
<div class="col-sm-5 ico_price">
<div class="row m0">
<img src="<?php echo $lang['website_global_img_link'];?>assets/images/mascote/mascote-vps-mozweb.svg" width="320px" alt="<?php echo $lang['home_index_content_alt_16'];?>">
</div>
</div>
<div class="col-sm-7 content">
<?php echo $lang['home_index_content_34'];?>
<a href="<?php echo $lang['header_menu_link_5'];?>" class="btn btn-primary"><?php echo $lang['home_index_content_35'];?></a>
</div>
</div>
</div>
</div>
</section>
<section class="row facts about_us_facts">
<div class="container">
<hr class="invis1"><br>
<div class="row sectionTitle">
<?php echo $lang['home_index_content_37'];?>
</div>
</section>
<?php include_once(dirname(__FILE__) ."/include/footer.php")?>
</body>
</html>