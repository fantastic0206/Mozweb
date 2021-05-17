<?php include_once (dirname(__DIR__) .'/include/cookies-config-sub.php');?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $lang['contacto_title'];?></title>
<meta name="description" content="<?php echo $lang['contacto_description'];?>">
<meta name="keywords" content="<?php echo $lang['contacto_keywords'];?>">
<link rel="canonical" href="<?php echo $lang['contacto_canonical_url'];?>">
<meta property="og:title" content="<?php echo $lang['contacto_title'];?>">
<meta property="og:description" content="<?php echo $lang['contacto_description'];?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $lang['contacto_canonical_url'];?>">
<meta property="og:image" content="<?php echo $lang['criacao_sites_meta_img'];?>">
<meta property="og:site_name" content="MOZWEB">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="660">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@mozwebmz">
<meta name="twitter:title" content="<?php echo $lang['contacto_title'];?>">
<meta name="twitter:description" content="<?php echo $lang['contacto_description'];?>">
<meta name="twitter:image" content="<?php echo $lang['contacto_meta_img'];?>">
<?php include_once(dirname(__DIR__) ."/include/meta-link.php")?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="shortcode">
<?php include_once(dirname(__DIR__) ."/include/header-menu.php")?>
<section class="row">
<div class="row m0 contact_banner">
<div class="container">
<div class="row">
<h4><?php echo $lang['contacto_content_1'];?></h4>
<h2><i class="icon icon-call-in"></i><?php echo $lang['contacto_content_2'];?></h2>
<p><?php echo $lang['contacto_content_3'];?></p>
</div>
</div>
</div>
</section>
<section class="row contact_content">
<div class="container">
<div class="row form_row">
<div class="col-sm-7 form_side">
<h2 class="part_number">01/</h2>
<h3 class="part_title"><?php echo $lang['contacto_content_4'];?></h3>
<h4><?php echo $lang['contacto_content_5'];?></h4>
<div class="contactForm row m0">
<form action="<?php echo $lang['contacto_segmented_1'];?>" method="post" class="row m0" id="contactForm">
<input type="text" class="form-control" placeholder="<?php echo $lang['contacto_content_6'];?>" name="name" id="name" required>
<input type="email" class="form-control" placeholder="<?php echo $lang['contacto_content_7'];?>" name="email" id="email" required>
<input type="text" class="form-control" placeholder="<?php echo $lang['contacto_content_8'];?>" name="phone" id="phone" maxlength="20" required>
<input type="text" class="form-control" placeholder="<?php echo $lang['contacto_content_9'];?>" name="subject" id="subject" required> 
<textarea class="form-control" placeholder="<?php echo $lang['contacto_content_10'];?>" name="message" id="message" required></textarea>
<div class="g-recaptcha" data-sitekey="6LcoYPEUAAAAAP48ZsJhL6UFBnlZi1xtKONkEWbU"></div><br>
<input type="submit" value="<?php echo $lang['contacto_content_11'];?>" class="btn btn-primary">
<p class="contact-send-message"></p>
</form>
</div>
</div>
<div class="col-sm-5 detail_address">
<h2 class="part_number">02/</h2>
<h3 class="part_title"><?php echo $lang['contacto_content_12'];?></h3>
<h4><?php echo $lang['contacto_content_13'];?></h4>
<div class="media">
<div class="media-left"><i class="fas fa-home"></i></div>
<div class="media-body media-middle"><?php echo $lang['contacto_content_14'];?>
</div>
</div>
<div class="media">
<div class="media-left"><i class="far fa-envelope"></i></div>
<div class="media-body media-middle">
<a href="mailto:&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#111;&#64;&#109;&#111;&#122;&#119;&#101;&#98;&#46;&#99;&#111;&#46;&#109;&#122;">&#99;&#111;&#110;&#116;&#97;&#99;&#116;&#111;&#64;&#109;&#111;&#122;&#119;&#101;&#98;&#46;&#99;&#111;&#46;&#109;&#122;</a>
<ul class="nav nav-pills"><br>
<li><a href="https://www.facebook.com/mozweb.co.mz" target="_blank" title="Facebook"><i class="fab fa-facebook fa-3x"></i></a></li>
<li><a href="https://twitter.com/mozwebmz" title="Twitter" target="_blank"><i class="fab fa-twitter fa-3x"></i></a></li>
<li><a href="https://instagram.com/mozwebmz" title="Instagram" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></li>
</ul>
</div>
</div>
<br><br><h4><?php echo $lang['contacto_content_15'];?></h4><center><iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmozweb.co.mz&amp;width=380&amp;height=220&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:380px; height:220px;" allowTransparency="true"></iframe></center>
</div>
</div>
<div class="row we_support">
<div class="col-sm-12">
<h2 class="part_number">03/</h2>
<h3 class="part_title"><?php echo $lang['contacto_content_16'];?></h3>
<div class="row">
<div class="col-sm-4">
<div class="media">
<div class="media-left">
<i class="far fa-comments"></i>
</div>
<div class="media-body">
<h4><a href="https://cliente.mozweb.co.mz/submitticket.php?<?php echo $lang['whmcs_lang_parameter'];?>" target="_blank">Tickets</a></h4><?php echo $lang['contacto_content_17'];?>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="media">
<div class="media-left">
<i class="fab fa-whatsapp"></i>
</div>
<div class="media-body">
<h4><a href="https://api.whatsapp.com/send?phone=258843508758" target="_blank">WhatsApp</a></h4><?php echo $lang['contacto_content_18'];?>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="media">
<div class="media-left">
<i class="fab fa-facebook-messenger"></i>
</div>
<div class="media-body">
<h4><a href="http://m.me/mozweb.co.mz" target="_blank">Facebook Messenger</a></h4><?php echo $lang['contacto_content_19'];?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include_once(dirname(__DIR__) ."/include/footer.php")?>
<?php echo $lang['home_footer_ajax_email'];?>
</body>
</html>