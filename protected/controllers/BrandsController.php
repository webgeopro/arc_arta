<?php

class BrandsController extends Controller
{
	public $layout='//layouts/brands'; // Главный шаблон для отображения входной страницы Бренды
    
    public function actionIndex()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/arta.css');
        $this->render('arta');
	}
    public function actionMlada()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/brands.css');
        $this->render('mlada');
	}
    public function actionArta()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/arta.css');
        $this->render('arta');
	}
    public function actionAllYear()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/allyear.css');
        $this->render('allyear');
	}
    public function actionLuntik()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/luntik.css');
        $this->render('luntik');
	}

}