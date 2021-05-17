<?php include_once (dirname(__FILE__) .'/include/cookies-config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang['file_lang'];?>">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Access Forbidden - MOZWEB - Moçambique</title>
<?php include_once(dirname(__FILE__) ."/include/meta-link.php")?>
<style>
@import url('https://fonts.googleapis.com/css?family=Signika');

* {
	margin: 0;
	box-sizing: border-box;
}

html, body {
	height: 100%;	
}

body {
	font-family: 'Signika', sans-serif;
	font-size: 5vh;
	background: radial-gradient(circle at bottom, #993299, #000);
	overflow: hidden;
	
	display: flex;
	align-items: flex-end;
	justify-content: center;	
	text-align: center;
}

.head {
	background: linear-gradient(#e50000, #660000);
	padding: 4vh;
	transform: translateY(10%);
	clip-path: circle(40% at center);
	cursor: not-allowed;
}

.inner {
	background: radial-gradient(#b2b2b2, #fff);
	padding: 10vh;
	clip-path: circle(40% at center);
}

.body {
	width: 5vh;
	background: linear-gradient(to right, #474747, #1a1a1a 65%);
	margin: auto;
	animation: Body 1.5s ease-out forwards;
}

@keyframes Body {
	from {
		height: 5vh;
	}
	to {
		height: 40vh
   }
}
</style>
</head>
<body>
<div class="wrapper">
<div class="head">
<div class="inner">
<h1>403</h1>
<h3>Forbidden</h3>
</div>
</div>
<div class="body"></div>
</div>
</body>
</html>