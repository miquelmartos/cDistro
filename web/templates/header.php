<?php
// header.php
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $appName." - ".$_SERVER['HTTP_HOST'] ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
<?php
	if (is_array($css)){
		foreach($css as $c){
			echo '<link rel="stylesheet" href="'.$staticPath.'css/'.$c.'.css">'; 	
		}
	}
  if (is_array($js)){
    foreach($js as $j){
      echo '<script src="'.$staticPath.'js/'.$j.'.js"></script>';
    }
  }
?>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <style>
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }
  </style>

