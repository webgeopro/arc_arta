<?php
class maxSliderClassic extends CWidget {
	
    public function run() {
		$cs = Yii::app()->clientScript;
        $base = Yii::app()->baseUrl;
        $cs->registerCSSFile($base.'/css/maxSliderClassic.css');
        if ( !$cs->isScriptFileRegistered($base.'/js/jquery.easySlider.js', CClientScript::POS_HEAD) )
            $cs->registerScriptFile($base.'/js/jquery.easySlider.js', CClientScript::POS_HEAD);
        if ( !$cs->isScriptFileRegistered($base.'/js/maxSliderClassic.js', CClientScript::POS_HEAD) )
            $cs->registerScriptFile($base.'/js/maxSliderClassic.js', CClientScript::POS_HEAD);
        
        $slider = Events::model()->findAll();
            
        $this->render('maxSliderClassic', array(
            'slider'  => $slider,
        ));
	}
}