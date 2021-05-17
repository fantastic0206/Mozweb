<?php include_once (dirname(__FILE__) .'/include/cookies-config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Página não encontrada | MOZWEB - Moçambique</title>
<?php include_once(dirname(__FILE__) ."/include/meta-link.php")?>
<style>
.mainbox {
margin: auto;
height: 600px;
width: 600px;
position: relative;
}
.err {
color: #EF2929;
font-family: 'Nunito Sans', sans-serif;
font-size: 11rem;
position:absolute;
left: 20%;
top: 8%;
}
#far {
position: absolute;
font-size: 8.5rem;
left: 42%;
top: 15%;
color: #EF2929;
}
.err2 {
color: #EF2929;
font-family: 'Nunito Sans', sans-serif;
font-size: 11rem;
position:absolute;
left: 68%;
top: 8%;
}
.msg {
text-align: center;
font-family: 'Nunito Sans', sans-serif;
font-size: 1.6rem;
position:absolute;
left: 16%;
top: 45%;
width: 75%;
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4b9ba14b0f.js" crossorigin="anonymous"></script>
</head>
<body class="home">
<?php include_once(dirname(__FILE__) ."/include/header-menu.php")?>
<div class="mainbox">
<div class="err">4</div>
<i class="far fa-question-circle fa-spin" id="far"></i>
<div class="err2">4</div> 
<div class="msg"> <h1>OHHHH! Você esta perdido!!!</h1><br><p>A página que você está procurando não existe. Como você chegou aqui é um mistério. Mas você pode clicar no botão abaixo para voltar à página inicial.<br><br>
</div>
</div>
<center>
<a href="https://www.mozweb.co.mz" class="btn btn-primary"><i class="fa fa-home"></i> Página Inicial</a>
</center>
<br><br><br>
<?php include_once(dirname(__FILE__) ."/include/footer.php")?>
</body>
</html>