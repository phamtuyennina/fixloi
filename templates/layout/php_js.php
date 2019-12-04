<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	var tenct='<?=$company['ten']?>';
	var nhaptukhoatimkiem='<?=_nhaptukhoatimkiem?>...';
	var chuanhaptukhoa='<?=_chuanhaptukhoa?>';
	var nhapemailcuaban='<?=_nhapemailcuaban?>...';
	var nhapemail='<?=_nhapemail?>';
	var emailkhonghople='<?=_emailkhonghople?>';
	var nhaphoten='<?=_nhaphoten?>';
	var nhapdiachi='<?=_nhapdiachi?>';
	var nhapsodienthoai='<?=_nhapsodienthoai?>';
	var emailkhonghople='<?=_emailkhonghople?>';
	var nhapchude='<?=_nhapchude?>';
	var nhapnoidung='<?=_nhapnoidung?>';
	var sitekey='<?=$config['sitekey']?>';
</script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js" ></script>
<script type="text/javascript" src="js/my_script.js"></script>
<script type="text/javascript" src="js/giohang.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<?php if($source=='index'){?>
<script type="text/javascript" src="js/engine1/wowslider.js"></script>
<script type="text/javascript" src="js/engine1/script.js"></script>
<?php }?>
<script src="js/lazyload.min.js" type="text/javascript" ></script>
<script src="js/lobibox.min.js" type="text/javascript" ></script>
<script src="js/nprogress.js" type="text/javascript" ></script>
<script src="js/sticky-kit.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.photobox.js"></script>
<script src="magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?=$config['sitekey']?>"></script>
<script src="js/main.js" type="text/javascript" ></script>
<script type="application/ld+json">
{
	"@context" : "http://schema.org",  
	"@type" : "WebSite",  
	"name" : "<?=$company['ten']?>",  
	"url" : "http://<?=$config_url?>/", 
	"potentialAction" : {    
		"@type" : "SearchAction",    
		"target" : "http://<?=$config_url?>/tiem-kiem&keyword={search_term}",    
		"query-input" : "required name=search_term"  
	}            
}
</script>
<script type="text/javascript">
if($('#recaptchaResponse').length){
     grecaptcha.ready(function () {
        grecaptcha.execute(sitekey, { action: 'contact' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
    });
}	
</script>