<div class="wapper cach_top">
    <div class="title_page"><h1><?=$title_cat?></h1><span></span></div>
	<div class="box_container">
		<div class="wap_box_new">
			<div class="row1">
			<?php foreach ($tintuc as $k => $v) {?>
                <div class="col-md-4 col-sm-6 col-xs-6 text-center col-tt">
                    <div class="pad_tuvan">
                        <a href="<?=$com?>/<?=$v['tenkhongdau']?>.html">
                            <img src="thumb/380x236x1x90/<?=_upload_tintuc_l.$v['photo']?>" onError="this.src='http://placehold.it/380x236';" alt="<?=$v['ten']?>" />
                        </a>
                        <h5><a href="<?=$com?>/<?=$v['tenkhongdau']?>.html"><?=$v['ten']?></a></h5>
                        <div><?=catchuoi(trim(strip_tags($v['mota'])),200)?></div>
                    </div>    
                </div>
            <?php }?> 
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>
