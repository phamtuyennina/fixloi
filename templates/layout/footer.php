<?php	

	$d->reset();
	$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
	$d->query($sql_contact);
	$company_contact = $d->fetch_array();


?>

<div id="footer">

    <div id="main_footer">
        <?=$company_contact['noidung'];?>
    </div>
    
    <div id="thongke">
    <div class="thongke_an">
    <div class="td_ft"><?=_thongketruycap?></div>
        <ul>
            <li><img src="images/dangonl.png" alt="Online" />Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
            <li><img src="images/tuan.png" alt="<?=_thongketuan?>" /><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>
            <li><img src="images/tuan.png" alt="<?=_thongkethang?>" /><?=_thongkethang?>: <span><?=$trongthang;?></span></li>
            <li><img src="images/tong.png" alt="<?=_tongtruycap?>" /><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
             
        </ul>
    </div>
        <div id="lienket">
            <a href="<?=$company['facebook']?>" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a>
            <a href="<?=$company['tiwtter']?>" target="_blank"><img src="images/twitter.png" alt="tiwtter" /></a>
            <a href="<?=$company['google']?>" target="_blank"><img src="images/google.png" alt="google" /></a>
            <a href="<?=$company['youtube']?>" target="_blank"><img src="images/youtube.png" alt="youtube" /></a>
        </div>
    </div><!---END #thongke-->


    <div class="clear"></div>
</div><!---END #footer--> 

<div class="copy-right">
	<div class="wap_1200">
    	<div class="cop-l">2016 Copyright © tham tu nguyen long. Web Design by Nina.vn</div>
        <div class="cop-r">Đang online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span> &nbsp;&nbsp;|&nbsp;&nbsp;Tổng truy cập: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></div>
        <div class="clear"></div>    
    </div>
</div>