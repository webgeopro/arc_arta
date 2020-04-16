<?if (count($slider) > 0):?>
<div id="comApp" >
    <div id="aComAppPrev">
        <a class="aScroll">
            <img src="/images/maxSliderClassicArrow_l.png" width="30" height="67" />
        </a>
    </div>
    <div class="divComAppConner"></div>
    <div id="divComApp">
        <ul>
        <?foreach($slider as $s):?>
            <li>
                <div class="divComAppPhoto">
                    <div class="divComAppPhotoInner">
                        <div style="background:url('/uploads/events/<?=$s['pic']?>');"></div>
                    </div>
                </div>
                <!--<div id="con_<?=$s['id']?>" class="divComAppText">
                    <?//=$s['content']?>
                    <br class="clear" />
                </div> У заказчика нет текста, пока закомментировано. -->
            </li>
        <?endforeach;?>
        </ul>
    </div>
    <a class="aScroll" id="aComAppNext">
        <img src="/images/maxSliderClassicArrow_r.png" width="30" height="67" />
    </a>
    <div id="divComAppAll">
        <?//<br />Неизменный текст?>
    </div>
</div>
<?endif;?>