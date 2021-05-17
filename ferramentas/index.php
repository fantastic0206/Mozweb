<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['ferramenta_title'];?></title>
<meta name="description" content="<?php echo $lang['ferramenta_description'];?>">
<meta name="keywords" content="<?php echo $lang['ferramenta_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['ferramenta_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['ferramenta_title'];?>">
<meta property="og:description" content="<?php echo $lang['ferramenta_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['ferramenta_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['ferramenta_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['ferramenta_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['ferramenta_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['ferramenta_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
<style>
.section-support-header{padding:40px 0}.section-support-header .content-wrapper{padding-top:20px}@media only screen and (max-width:991px){.section-support-header .content-wrapper{text-align:center}}.section-support-header .button-wrapper{padding-top:50px}@media only screen and (max-width:991px){.section-support-header .button-wrapper{text-align:center}}.section-support-resources .item{margin:0 0 20px;background-color:#f1f1f1;text-align:center;font-size:1.2em;border-bottom:8px solid #666}.section-support-resources .item a{color:#444}.section-support-resources .item h4{font-size:1.4em}.section-support-resources .item p{padding:0 40px 35px}.section-support-resources .item .button{display:block;padding:10px;background-color:#666;color:#fff;font-weight:700}.section-support-resources .item .icon{display:block;margin:0 auto 16px;padding:30px 0 0;max-width:120px;font-size:4em;padding-bottom:12px;border-bottom:2px solid #ccc}.section-support-resources .item.technical-support{background-color:#ecf6ff;border-color:#5c8db9}.section-support-resources .item.technical-support a{color:#3f6282}.section-support-resources .item.technical-support .icon{border-color:#b2d0ea}.section-support-resources .item.technical-support .button{background-color:#5c8db9}
</style>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row page_header_verificador">
<div class="container">
<h3><?php echo $lang['ferramenta_content_1'];?></h3>
<ol class="breadcrumb">
<li><a href="#">home</a></li>
<li class="active"><?php echo $lang['ferramenta_content_1'];?></li>
</ol>
</div>
</section>
<br><br>
<div class="container">
<div class="row sectionTitle">
<h2><?php echo $lang['ferramenta_content_2'];?></h2><p style="font-size: 20px;font-weight: 200;margin-top: 10px;padding-bottom: 10px;line-height: 1.5;">Esta página você será capaz de ver varias ferramentas que a MOZWEB preparou para que você seja capaz de testar a disponibilidade do seu website, o seu endereço IP, a sua velocidade de internet, o seu certificado ssl e muito mais</p>
</div>
</div>
<!--
<section class="row featureTab">
<div class="row m0 featureTab_contents">
<div class="tab-content">
<div class="tab-pane active" role="tabpanel" id="featureT1">
<div class="content_row content_row3 row m0">
<div class="container">
<div class="row sectionTitle">
<h2><?php echo $lang['ferramenta_content_2'];?></h2><p style="font-size: 20px;font-weight: 200;margin-top: 10px;padding-bottom: 10px;line-height: 1.5;">Esta página você será capaz de ver varias ferramentas que a MOZWEB preparou para que você seja capaz de testar a disponibilidade do seu website, o seu endereço IP, a sua velocidade de internet, o seu certificado ssl e muito mais</p>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>PING</h4><p>ping é um utilitário que usa o protocolo ICMP para testar a conectividade entre equipamentos. É um comando disponível praticamente em todos os sistemas</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_55'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>DIG</h4><p>Domain Information Groper é uma ferramenta de redes de computadores, utilizada para consultas sobre registos de DNS de um determinado domínio, host ou IP</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_56'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>NsLookup</h4><p>nslookup é uma ferramenta, comum ao Windows e ao Linux, utilizada para se obter informações sobre registos de DNS de um determinado domínio, host ou IP</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_57'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>Traceroute</h4><p>traceroute é uma ferramenta de diagnóstico que rastreia a rota de um pacote através de uma rede de computadores</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_57'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>Verificar Meu IP</h4><p>Com esta ferramenta, poderá verificar qual é o seu endereço IP, Localização do IP e realizar o teste de velocidade da sua internet</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_50'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>Testador de Sites</h4><p>Com esta ferramenta você será capaz de testar se o website esta fora do ar apenas para si ou para todo o mundo</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_51'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
<div class="col-sm-4 tech_feature">
<div class="inner row m0">
<h4>Certificado SSL</h4><p>Com esta ferramenta você podera testar o certificado SSL do seu website, gerar um codigo CSR, Decodificar e muito mais</p>
<div>
<br><img src="https://www.mozweb.co.mz/assets/images/logo/mozweb.svg" width="160px">
</div>
<a href="<?php echo $lang['header_menu_link_54'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
-->

<section class="section section-support-resources">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="item">
<a href="<?php echo $lang['header_menu_link_55'];?>" target="_blank">
<span class="icon pe-7s-bookmarks"></span>
<h4>PING</h4>
<p>ping é um utilitário que usa o protocolo ICMP para testar a conectividade entre equipamentos. É um comando disponível praticamente em todos os sistemas<br><br></p>
</a>
<a href="<?php echo $lang['header_menu_link_55'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<!--<div class="item technical-support">-->
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_56'];?>" target="_blank">
<span class="icon pe-7s-light"></span>
<h4>DIG</h4>
<p>Domain Information Groper é uma ferramenta de redes de computadores, utilizada para consultas sobre registos de DNS de um determinado domínio, host ou IP</p>
</a>
<a href="<?php echo $lang['header_menu_link_56'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_57'];?>" target="_blank">
<span class="icon pe-7s-plugin"></span>
<h4>NsLookup</h4>
<p>nslookup é uma ferramenta, comum ao Windows e ao Linux, utilizada para se obter informações sobre registos de DNS de um determinado domínio, host ou IP<br><br></p>
</a>
<a href="<?php echo $lang['header_menu_link_57'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_59'];?>" target="_blank">
<span class="icon pe-7s-plugin"></span>
<h4>Traceroute</h4>
<p>traceroute é uma ferramenta de diagnóstico que rastreia a rota de um pacote através de uma rede de computadores</p>
</a>
<a href="<?php echo $lang['header_menu_link_59'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_50'];?>" target="_blank">
<span class="icon pe-7s-plugin"></span>
<h4>Verificar Meu IP</h4>
<p>Com esta ferramenta, poderá verificar qual é o seu endereço IP, Localização do IP e realizar o teste de velocidade da sua internet</p>
</a>
<a href="<?php echo $lang['header_menu_link_50'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_51'];?>" target="_blank">
<span class="icon pe-7s-plugin"></span>
<h4>Testador de Sites</h4>
<p>Com esta ferramenta você será capaz de testar se o website esta fora do ar apenas para si ou para todo o mundo</p>
</a>
<a href="<?php echo $lang['header_menu_link_51'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
<div class="col-md-4">
<div class="item dev-portal">
<a href="<?php echo $lang['header_menu_link_54'];?>" target="_blank">
<span class="icon pe-7s-plugin"></span>
<h4>Certificado SSL</h4>
<p>Com esta ferramenta você podera testar o certificado SSL do seu website, gerar um codigo CSR, Decodificar e muito mais</p>
</a>
<a href="<?php echo $lang['header_menu_link_54'];?>" target="_blank" class="btn btn-primary">Abrir a Ferramenta</a><br><br>
</div>
</div>
</div>
</div>
</section><br><br><br>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
</body>
</html>