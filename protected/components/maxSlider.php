<?php
/**
 * Виджет "Слайдер".
 * Прокрутка товаров.
 * Эффект "рыбьего глаза"
 */

class maxSlider extends CWidget {
	
    public $pageID; # ID страницы
    public $labelName = false; # Отображение подменю на внутренних мтраницах
    public $width   = 340;
    public $widthLi = 150;
    
    public function run() {
		$cs = Yii::app()->clientScript;
        $a = Yii::app()->baseUrl;
        if ( !$cs->isCssFileRegistered($a.'/css/movingboxes.css', CClientScript::POS_HEAD) )
            $cs->registerCSSFile($a.'/css/movingboxes.css');
        if ( !$cs->isCssFileRegistered($a.'/css/maxSlider.css', CClientScript::POS_HEAD) )
            $cs->registerCSSFile($a.'/css/maxSlider.css');
        if ( !$cs->isScriptFileRegistered($a.'/js/jquery.movingboxes.js', CClientScript::POS_HEAD) )
            $cs->registerScriptFile($a.'/js/jquery.movingboxes.js', CClientScript::POS_HEAD);
        if ( !$cs->isScriptFileRegistered($a.'/js/jquery.easing.js', CClientScript::POS_HEAD) )
            $cs->registerScriptFile($a.'/js/jquery.easing.js', CClientScript::POS_HEAD);
        //if ( !$cs->isScriptFileRegistered($a.'/js/maxSlider.js', CClientScript::POS_HEAD) )
        //    $cs->registerScriptFile($a.'/js/maxSlider.js', CClientScript::POS_HEAD);
        
        if ($this->pageID) { // Указана страница
            #$slider = Slider::model()->with('products')->findAllByAttributes(array('page_id'=>$this->pageID));
            $slider = array();
            //$id = rand(3, 6);
        } elseif ($this->labelName) {
            $slider = Products::model()->findAllByAttributes(array('label'=>$this->labelName));
            //$id = $slider['id'];
            //$id = rand(3, 6);
        } else {
            $slider = array();
            //$id = '';
        }
        $this->render("maxSlider", array(
            'slider' => $slider,
            'pageID' => $this->pageID,
            'id'     => rand(1, 10000),
            'width'  => $this->width,
            'widthLi'=> $this->widthLi,
        ));
	}
}