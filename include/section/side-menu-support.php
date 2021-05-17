<?php if(count(get_included_files()) ==1) exit("Direct access not permitted."); ?>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" id="sidemenu"> 
<form method="get" name="blog" id="blog" action="https://www.mozweb.co.mz/blog/" target="_blank" class="row m0 search_form">
<h4 class="submenutitle"><?php echo $lang['metodos_de_pagamento_content_19'];?></h4>
<div class="input-group">
<input type="search" name="s" class="form-control" placeholder="<?php echo $lang['metodos_de_pagamento_content_18'];?>" required>
<span class="input-group-addon"><button type="submit"><i class="fal fa-search"></i></button></span>
</div>
</form>
<h4 class="submenutitle"><?php echo $lang['support_hours_content_10'];?></h4>
<div class="list-group">
<a href="https://cliente.mozweb.co.mz/submitticket.php?<?php echo $lang['whmcs_lang_parameter'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_11'];?></a> 
<a href="https://status.mozweb.co.mz" target="_blank" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_12'];?></a> 
<a href="https://cliente.mozweb.co.mz/knowledgebase?<?php echo $lang['whmcs_lang_parameter'];?>" target="_blank" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_13'];?></a> 
</div>
<h4 class="submenutitle"><?php echo $lang['support_hours_content_14'];?></h4>
<div class="list-group">
<a href="<?php echo $lang['header_menu_link_17'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_15'];?></a>
<a href="<?php echo $lang['header_menu_link_19'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_16'];?></a>
<a href="<?php echo $lang['header_menu_link_18'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_17'];?></a>
</div>
<h4 class="submenutitle"><?php echo $lang['support_hours_content_19'];?></h4>
<div class="list-group">
<a href="<?php echo $lang['header_menu_link_29'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_20'];?></a>
<a href="<?php echo $lang['header_menu_link_23'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_21'];?></a>
<a href="<?php echo $lang['header_menu_link_24'];?>" class="list-group-item"><i class="fa fa-caret-right"></i> <?php echo $lang['support_hours_content_22'];?></a>
</div>
</div>