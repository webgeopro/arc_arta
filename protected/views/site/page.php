<script type="text/javascript" src="/js/jquery.maphilight.min.js"></script>

<?#if (Yii::app()->user->isGuest):?>

<?$this->widget('maxMenu', array('pageID'=>$pageID, 'innerMenu'=>true,))?>
<div id="indexContent">
    <?=$page['content']?>
</div>




<!--
<?#else:?>
    <form action="/site/save" id="formContent" method="post">
        <?=CHtml::activeTextArea($page, $field, array('rows'=>6, 'cols'=>60))?>
        <?$this->widget('application.extensions.editor.editor', array('name'=>$name, 'type'=>'fckeditor', 'height'=>$height))?>
        <input type="hidden" id="inpPageID" name="inpPageID" value="<?=$page['id']?>" />
        <input type="hidden" id="inpDataType" name="inpDataType" value="content" />
        <br /><br />
        <?#<input type="button" id="btnSaveContent" value="Сохранить" />?>
    </form>
<?#endif;?>
-->
<div id="divMainFooter"></div>