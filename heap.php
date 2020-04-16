++++++++++++++++++ FROM component/maxSlider ++++++++++++++++++ BEGIN
<div class="maxSlider" id="<?=$id?>">
    <a class="aScroll aMaxSliderPrev" id="aMaxSliderPrev">
        <img src="<?=Yii::app()->baseUrl?>/images/max_slider_arrow_l.png" width="13" height="13"/>
    </a>
    <?/*<div id="aMaxSliderPrev">
        <a class="aScroll">
            <img src="<?=Yii::app()->baseUrl?>/images/max_slider_arrow_l.png" />
        </a>
    </div>*/?>
    <div id="divMaxSlider_<?=$id?>" class="divMaxSliderInner">
        <ul>
        <?foreach($slider as $s):?>
            <li>
                <div class="divMaxSliderPhoto"> <?#-- Фото товара ?>
                    <div class="divMaxSliderPhotoInner">
                        <div style="background:url('/uploads/max_slider/<?=$s['pic']?>');z-index:200;"></div>
                    </div>
                </div>
                <div id="con_<?=$s['id']?>" class="divMaxSliderText">  <?#-- Описание товара ?>
                    <?=$s['content']?>
                </div>
            </li>
        <?endforeach;?>
        </ul>
    </div>
    <a class="aScroll aMaxSliderNext" id="aMaxSliderNext">
        <img src="<?=Yii::app()->baseUrl?>/images/max_slider_arrow_r.png"  width="13" height="13" />
    </a>
</div>
++++++++++++++++++ FROM component/maxSlider ++++++++++++++++++ END