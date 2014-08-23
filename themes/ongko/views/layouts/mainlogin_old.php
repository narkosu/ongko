<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SISTEM INFORMASI BADAN PENELITIAN LITBANGKES SURABAYA</title>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl .'/css/style.default.css'?>" type="text/css" />
<?php /*<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl .'/js/jquery-1.9.1.min.js'?>"></script>*/?>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl .'/js/jquery-migrate-1.1.1.min.js'?>"></script>
</head>

<body class="loginbody">

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><span class="iconfa-lock"></span> LOGIN FORM <span class="subtitle">Silahkan dengan username & password anda.</span></h1>
        
        <?php echo $content ?>
    </div>
</div><!--loginwrapper-->

<script type="text/javascript">
jQuery.noConflict();
/*
jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
  
});*/
</script>
</body>
</html>
<?php
$cs=Yii::app()->clientScript;

$cs->registerScriptFile( Yii::app()->theme->baseUrl .'/js/jquery-1.9.1.min.js', CClientScript::POS_HEAD);
$cs->scriptMap=array(
    'jquery.js'=>'//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
);
?>
