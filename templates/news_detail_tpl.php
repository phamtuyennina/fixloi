
<div class="wapper cach_top">
    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12 col-noidung">
            <div class="w_tieude_tin">
                <h1><?=$title_cat?></h1p>
                <div class="sharethis-inline-share-buttons"></div>
            </div>
            <div class="in_mota">
                <?=$tintuc_detail['mota']?>
            </div>
            <?=$tintuc_detail['noidung']?>
            <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
        </div>
        <?php if(count($tintuc)>0){ ?>
        <div class="col-md-3 col-sm-12 col-xs-12 col-lq">
            <div class="w_tieude_tin">
                <p>Các bài viết khác</p>
            </div>
            <ul>
                <?php foreach($tintuc as $v){ ?>
                <li>
                    <a href="<?=$com?>/<?=$v['tenkhongdau']?>.html">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> <?=$v['ten']?>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
        <?php }?>
    </div>
</div>
