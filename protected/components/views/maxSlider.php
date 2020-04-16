<?if (count($slider)):?>
<?$cnt = count($slider); $first = (int)( $cnt/ 2); $first=1;?>
<script type="text/javascript">$("document").ready(function() {
    $('#boxes<?=$id?>').movingBoxes({
        targetDiv : 'divMaxSliderText<?=$id?>',
        sliderID  :  <?=$id?>,
        startPanel   : 2,   // start with this panel
        reducedSize  : 0.5,  // non-current panel size: 80% of panel size
        fixedHeight  : true,  // if true, slider height set to max panel height; if false, slider height will auto adjust.
        wrap         : true
    });
});</script>

<div id="boxes<?=$id?>" class="maxSlider" style="width:<?=$width?>px">
    <?/*$cnt=0; for($i=0; $i < 10; $i++)*/ #foreach ($slider as $s): $cnt++;?>
    <?for($i=0; $i < $cnt; $i++):?>
    <div title="div_<?=$id?>_<?=$i?>">
        <img src="/uploads/max_slider/<?=$slider[$i]['pic']?>" name="<?=$i?>" />
    </div>
    <?endfor;?>
    <?#endforeach?>
</div>
<div id="divMaxSliderText<?=$id?>" class="divMaxSliderText">
    <strong><?=($slider[$first]['name'])?$slider[$first]['name']:$slider[0]['name'];?></strong><br />
    <?=($slider[$first]['content'])?$slider[$first]['content']:$slider[0]['content'];?>
</div>

<div id="txt_div_<?=$id?>_-1" class="divMaxSliderTextHelper">
    <strong><?=$slider[$cnt-1]['name']?></strong><br />
    <?=$slider[$cnt-1]['content']?>
</div>
<?for($i=0; $i < $cnt; $i++):?>
<div id="txt_div_<?=$id?>_<?=$i?>" class="divMaxSliderTextHelper">
    <strong><?=$slider[$i]['name']?></strong><br />
    <?=$slider[$i]['content']?>
</div>
<?endfor;?>
<?#Для корректной работы слайдера!?>
<div id="txt_div_<?=$id?>_<?=$cnt?>" class="divMaxSliderTextHelper">
    <strong><?=$slider[0]['name']?></strong><br />
    <?=$slider[0]['content']?>
</div>
<?endif?>