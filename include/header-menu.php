<?php if(count(get_included_files()) ==1) exit("Direct access not permitted."); ?>
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8973JS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div vw class="enabled">
<div vw-access-button class="active"></div>
<div vw-plugin-wrapper>
<div class="vw-plugin-top-wrapper"></div>
</div>
</div>
<header class="header-top-area top_header">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-7 col-xs-12">
<div class="header-top-left">
<ul class="languagepicker roundborders large">
<?php echo $lang['language_header'];?>
</ul>
</div>
<div class="header-top-left">
<ul>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li> <a href="mailto:&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#111;&#64;&#109;&#111;&#122;&#119;&#101;&#98;&#46;&#99;&#111;&#46;&#109;&#122;"><span class="fal fa-envelope"></span>&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#111;&#64;&#109;&#111;&#122;&#119;&#101;&#98;&#46;&#99;&#111;&#46;&#109;&#122;</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-sm-5 col-xs-12">
<div class="header-top-right">
<ul>
<li><a href="https://cliente.mozweb.co.mz/knowledgebase?<?php echo $lang['whmcs_lang_parameter'];?>"><span class="fal fa-comments"></span><?php echo $lang['header_knowledge_base'];?></a></li>
<?php echo $lang['header_blog_url'];?>
<li><a href="https://webhost.community" target="_blank"><span class="fal fa-users"></span><?php echo $lang['header_register_button'];?></a></li>
<li><a href="https://cliente.mozweb.co.mz/clientarea.php?<?php echo $lang['whmcs_lang_parameter'];?>"><span class="fal fa-user"></span><?php echo $lang['header_login_button'];?></a></li></ul></div></div>
</div></div>
</header>
<nav class="navbar navbar-default navbar-static-top fluid_header centered">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="<?php echo $lang['head_website_home'];?>"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/logo/mozweb.svg" width="240px" alt="MOZWEB"></a>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navigation" aria-expanded="false">
<span class="sr-only">MENU</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="main_navigation">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown mega-drop">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo $lang['header_menu_content_1'];?> <i class="fa fa-angle-double-down"></i></a>
<ul class="dropdown-menu hosting-dropdown mega-menu">
<li class="service_list">
<div class="fleft service service1">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/shared-hosting.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_3'];?>"><?php echo $lang['header_menu_content_2'];?></a><?php echo $lang['header_menu_content_3'];?>
</div>
</div>
</div>
<div class="fleft service service2">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/shared-hosting-mini.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_48'];?>"><?php echo $lang['header_menu_content_4'];?></a><?php echo $lang['header_menu_content_5'];?>
</div>
</div>
</div> 
<div class="fleft service service3">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/wordpress-hosting.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_2'];?>"><?php echo $lang['header_menu_content_6'];?></a><?php echo $lang['header_menu_content_7'];?>
</div>
</div>
</div>
<div class="fleft service service4">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/reseller-hosting.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_4'];?>"><?php echo $lang['header_menu_content_8'];?></a><?php echo $lang['header_menu_content_9'];?>
</div>
</div>
</div>
</li>
</li>
<li class="start_offer">
<div class="row m0 inner">
<h5 class="title"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/alojamento-mini.png" alt="<?php echo $lang['header_menu_content_4'];?>"></h5>
<h5 class="regular_price"><br><?php echo $lang['header_menu_content_10'];?></h5>
<a href="<?php echo $lang['header_menu_link_48'];?>" class="btn btn-default"><?php echo $lang['header_menu_content_11'];?></a>
</div>
</li>
</ul>
<li class="dropdown mega-drop">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo $lang['header_menu_content_12'];?> <i class="fa fa-angle-double-down"></i></a>
<ul class="dropdown-menu hosting-dropdown mega-menu">
<li class="service_list">
<div class="fleft service service1">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/vps-server.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_5'];?>"><?php echo $lang['header_menu_content_13'];?></a><?php echo $lang['header_menu_content_14'];?>
</div>
</div>
</div>
<div class="fleft service service2">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/cloud-server.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_25'];?>"><?php echo $lang['header_menu_content_15'];?></a><?php echo $lang['header_menu_content_16'];?>
</div>
</div>
</div>
<div class="fleft service service3">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/dedicated-server.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_6'];?>"><?php echo $lang['header_menu_content_17'];?></a><?php echo $lang['header_menu_content_18'];?>
</div>
</div>
</div>
<div class="fleft service service4">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/streaming-server.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_49'];?>"><?php echo $lang['header_menu_content_19'];?></a><?php echo $lang['header_menu_content_20'];?>
</div>
</div>
</div> 
</li>
</li>
<li class="start_offer">
<div class="row m0 inner">
<h5 class="title"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/alojamento-mini.png" alt="<?php echo $lang['header_menu_content_4'];?>"></h5>
<h5 class="regular_price"><br><?php echo $lang['header_menu_content_10'];?></h5>
<a href="<?php echo $lang['header_menu_link_48'];?>" class="btn btn-default"><?php echo $lang['header_menu_content_11'];?></a>
</div>
</li>
</ul>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo $lang['header_menu_content_21'];?> <i class="fa fa-angle-double-down"></i></a>
<ul class="dropdown-menu">
<li><a href="<?php echo $lang['header_menu_link_12'];?>"><span class="fal fa-globe"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_22'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_13'];?><?php echo $lang['whmcs_lang_parameter'];?>"><span class="fal fa-exchange-alt"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_23'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_14'];?>?<?php echo $lang['whmcs_lang_parameter'];?>"><span class="fal fa-globe"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_24'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_15'];?>"><span class="fal fa-money-bill-wave"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_25'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_16'];?>"><span class="fal fa-clipboard-list"></span> &nbsp;&nbsp;<?php echo $lang['header_menu_content_26'];?></a></li>
</ul>
</li>
<li class="dropdown mega-drop">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo $lang['header_menu_content_43'];?> <i class="fa fa-angle-double-down"></i></a>
<ul class="dropdown-menu hosting-dropdown mega-menu">
<li class="service_list">
<div class="fleft service service1">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/web-design.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_7'];?>"><?php echo $lang['header_menu_content_27'];?></a><?php echo $lang['header_menu_content_28'];?>
</div>
</div>
</div>
<div class="fleft service service2">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/ssl-certificate.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_8'];?>"><?php echo $lang['header_menu_content_29'];?></a><?php echo $lang['header_menu_content_30'];?>
</div>
</div>
</div>
<div class="fleft service service3">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/email-security.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_9'];?>"><?php echo $lang['header_menu_content_31'];?></a><?php echo $lang['header_menu_content_32'];?>
</div>
</div>
</div>
<div class="fleft service service4">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/menu/website-security.svg" width="40px"></div>
<div class="media-body">
<a href="<?php echo $lang['header_menu_link_10'];?>"><?php echo $lang['header_menu_content_33'];?></a><?php echo $lang['header_menu_content_34'];?>
</div>
</div>
</div> 
</li>
</li>
<li class="start_offer">
<div class="row m0 inner">
<h5 class="title"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/icons/alojamento-mini.png" alt="<?php echo $lang['header_menu_content_4'];?>"></h5>
<h5 class="regular_price"><br><?php echo $lang['header_menu_content_10'];?></h5>
<a href="<?php echo $lang['header_menu_link_48'];?>" class="btn btn-default"><?php echo $lang['header_menu_content_11'];?></a>
</div>
</li>
</ul>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false"><?php echo $lang['header_menu_content_35'];?> <i class="fa fa-angle-double-down"></i></a>
<ul class="dropdown-menu">
<li><a href="<?php echo $lang['header_menu_link_17'];?>"><span class="fal fa-building"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_36'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_53'];?>"><span class="fal fa-users"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_37'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_52'];?>"><span class="fal fa-server"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_38'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_58'];?>"><span class="fal fa-wrench"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_42'];?></a></li>
<li><a href="https://status.mozweb.co.mz" target="_blank"><span class="fal fa-signal"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_39'];?></a></li>
<li><a href="<?php echo $lang['header_menu_link_47'];?>"><span class="fal fa-life-ring"></span>&nbsp;&nbsp;<?php echo $lang['header_menu_content_40'];?></a></li>
</ul>
</li>
<li><a href="<?php echo $lang['header_menu_link_19'];?>"><?php echo $lang['header_menu_content_41'];?></a></li>
</ul>
</div>
</div>
</nav>