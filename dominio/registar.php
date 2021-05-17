<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php');?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['registar_dominio_title'];?></title>
<meta name="description" content="<?php echo $lang['registar_dominio_description'];?>">
<meta name="keywords" content="<?php echo $lang['registar_dominio_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['registar_dominio_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['registar_dominio_title'];?>">
<meta property="og:description" content="<?php echo $lang['registar_dominio_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['registar_dominio_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['registar_dominio_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['registar_dominio_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['registar_dominio_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['registar_dominio_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row find_domain find_domain3">
<div class="row m0 find_domain_cover">
<div class="container">
<div class="row">
<?php echo $lang['registar_dominio_content_1'];?>
</div>
</div>
</div>
<div class="container doamin_search_container">
<form action="https://cliente.mozweb.co.mz/cart.php?a=add&domain=register<?php echo $lang['whmcs_lang_parameter'];?>" method="post" class="row m0 domain_search">
<div class="input-group">
<input type="hidden" name="direct" value="true">
<input type="text" required="" name="query" class="form-control" size="20" autocomplete="off" placeholder="<?php echo $lang['home_index_content_24'];?>">
<span class="input-group-addon">
<input type="submit" value="<?php echo $lang['registar_dominio_content_2'];?>" class="">
</span>
</div>
</form>
</div>
</section>
<section class="row why_choose home2">
<div class="container">
<div class="row sectionTitle">
<?php echo $lang['registar_dominio_content_3'];?>
</div>
<div class="row">
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/domain-transfer.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_4'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/private-whois.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_5'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/dns-settings.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_6'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/email-forward.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_7'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/customer-service.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_8'];?>
</div>
</div>
</div>
<div class="col-sm-4 cause2choose">
<div class="media">
<div class="media-left"><img src="<?php echo $lang['website_global_img_link'];?>assets/images/features/dominio/control-painel.svg" width="80px"></div>
<div class="media-body">
<?php echo $lang['registar_dominio_content_9'];?>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="domaintlds">
<div class="container">
<div class="section-title"><?php echo $lang['registar_dominio_content_10'];?></div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="<?php echo $lang['registar_dominio_content_11'];?>" title="<?php echo $lang['registar_dominio_content_12'];?>">
<div class="tab-content"> 
<div role="tabpanel" class="tab-pane active" id="tab1"> 
<div class="table-responsive">
<?php echo $lang['registar_dominio_segmented_price'];?>
</div>
</div>
</div>
</div>
</section>
<section class="row testi_news">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row sectionTitle">
<?php echo $lang['registar_dominio_content_13'];?>
</div>
<?php echo $lang['registar_dominio_content_14'];?>
</div>
</div>
</div>
</section>
<br><br><br><br>
<?php include_once(dirname(__DIR__) ."/include/section/domains-plan-end.php")?>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
<script>
function myFunction() {
var input, filter, table, tr, td, i, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("myTable");
tr = table.getElementsByTagName("tr");
for (i = 0; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[0];
if (td) {
txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
tr[i].style.display = "";
}else {
tr[i].style.display = "none";
}}}}
</script>
</body>
</html>