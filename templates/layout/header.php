<?php
 	error_reporting(0);
	$d->reset();
	$sql_banner = "select photo$lang as photo from #_background where type='logo' limit 0,1";
	$d->query($sql_banner);
	$row_logo = $d->fetch_array();

	$d->reset();
	$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
	$d->query($sql_banner);
	$row_banner = $d->fetch_array();
	
	$d->reset();
	$sql_banner_mobi = "select photo$lang as photo from #_background where type='banner_mobi' limit 0,1";
	$d->query($sql_banner_mobi);
	$banner_mobi = $d->fetch_array();
	
	$duoi_banner = end(explode('.',$row_banner['photo']));
			
?>

<div class="wapper">

<div class="logo_head">
	<a href="" class="logo"><img src="<?=_upload_hinhanh_l.$row_logo['photo']?>"  alt="<?=$company['ten']?>"/></a>
</div>

<a href="" class="logo"><img src="<?=_upload_hinhanh_l.$row_banner['photo']?>"  alt="<?=$company['ten']?>"/></a>
<a href=""><img src="<?=_upload_hinhanh_l.$banner_mobi['photo']?>" class="logo_mobi wow <?=$arr_animate['0']?>"  alt="<?=$company['ten']?>"/></a>

<img src="images/saolaplanh.png" class="start-animate sang_header" alt="Sáng lấp lánh" />

<div id="lang"> 
    <a href="index.php?com=ngonngu&lang=en" title="English"><img src="images/en.png" alt="English" /> </a>
    <a href="index.php?com=ngonngu&lang=" title="Việt Nam"><img src="images/vi.png" alt="Việt Nam" /></a>
</div><!--END #lang-->

<ul class="menu_login">
<?php if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false)){?>
    <li><a href="dang-ky.html"><?=_dangky?></a></li>
    <li><a href="dang-nhap.html"><?=_dangnhap?></a></li>
    <li><a style="border:none;" href="quen-mat-khau.html"><?=_quenmatkhau?></a></li>
<?php } else { ?>
	<li><a>Xin chào <span style="color:#FFFF00;">(
	<?php $info_user=info_user($_SESSION['login']['id']);echo $info_user['username']?>)</span></a></li>
    <li><a href="dang-xuat.html"><?=_dangxuat?></a></li>
    <li><a style="border:none;" href="thay-doi-thong-tin.html"><?=_thaydoithongtin?></a></li>
<?php } ?>
</ul>

</div>

