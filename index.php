<?php
	error_reporting(0);
	session_start();
	$session=session_id();

	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	include_once _lib."config.php";
	//include_once _lib."checkSSL.php";
	include_once _lib."AntiSQLInjection.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."breadcrumb.php";
	include_once _lib."file_requick.php";
	include_once _lib."nina_firewall.php";
	include_once _source."counter.php";

?>
<!doctype html>
<html lang="vi">
<head>
	<base href="http://<?=$config_url?>/"  />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
	<?php include _template."layout/seoweb.php";?>
	<?php include _template."layout/js_css.php";?>
    <?=$company['analytics']?>
</head>

<body ondragstart="return false;" ondrop="return false;" >
<div id="pre-loader" style="display:none;"><div id="wrap"><div id="preloader_1"><span></span><span></span><span></span><span></span><span></span></div></div></div>
	<div id="header">
		<?php include _template."layout/header.php";?>
    </div>
    <div id="menu">
        <?php include _template."layout/menu_top.php";?>
    </div>
    <div id="menu_mobi">
        <?php include _template."layout/menu_mobi.php";?>
    </div>
    <?php if($_GET['com']==''||$_GET['com']=='index'){?>
    <div id="slider">
        <?php include _template."layout/slider_jssor.php";?>
    </div>
    <?php }?>
    <div id="main_content">
        <?php include _template.$template."_tpl.php"; ?>
        <div class="clear"></div>
    </div>
    <div id="wap_footer">
        <?php include _template."layout/footer.php";?>
    </div>
	<?=$company['codethem']?>
	<?php include _template."layout/php_js.php";?>
</body>
</html>
