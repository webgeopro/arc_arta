<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
    public $layout='//layouts/index'; // Главный шаблон для отображения входной страницы
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$cs = Yii::app()->clientScript;
        $page = trim($_GET['page']);

        if ($page and Pages::model()->exists('label=:labelID', array(':labelID'=>$page))) {
            $cs->registerCSSFile('/css/second.css');
            $this->layout = '//layouts/second';
            $page = Pages::model()->findByAttributes(array('label'=>$page));
            $this->pageTitle = 'АРТА :: '.$page['name'];
            $this->render('page', array(
                'page' => $page,
                'name' => 'Pages_content',
                'height'=> '1000',
                'field' => 'content',
		        'element_id'=> $page['id'],
                'pageLabel' => $page,
                'pageID' => $page['id'],
            ));
        } else {
            $this->pageTitle = 'АРТА :: Красноярск';
            $page = Pages::model()->findByAttributes(array('label'=>'main'));
            $this->render('index', array('page' => $page));
        }
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
        if (!Yii::app()->user->isGuest) $this->redirect('/pages/admin');
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$this->redirect(Yii::app()->user->returnUrl);
                $this->redirect('/pages/admin');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

    /**
	 * Страница новостей
	 */
	public function actionNews()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/news.css');
        $cs->registerScriptFile('/js/news.js', CClientScript::POS_HEAD);
        $this->layout = '//layouts/second';
        $this->pageTitle = 'АРТА :: Новости';

        //$news = News::model()->findByAttributes(array('label'=>'novelty'));
        $news = News::model()->findAll(array('order'=>'date DESC', 'limit'=>3, ));
        //$news = array();
        $this->render('news', array('news'=>$news, 'pageLabel' => 'news', 'pageID' => 2 ));
	}

    /**
    * Получение новостей
    */
    public function actionGetNews()
    {
        $id = (int)$_POST['newsID'];
        if ($id) {
            $news = News::model()->findByPk($id);
            $ar['full']   = $news['full'];
            $ar['date']   = $news['date'];
            $ar['title']  = $news['title'];
            $ar['result'] = 'success';
        } else {
            $ar['result'] = 'error';
        }
        die( json_encode($ar) );
    }

    /**
	 * Страница акций
	 */
	public function actionEvents()
	{
		$cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/events.css');
        $this->layout = '//layouts/second';
        $this->pageTitle = 'АРТА :: Акции';

        $this->render('events', array('pageLabel' => 'events', 'pageID' => 5 ));
	}

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionNovelty()
    {
        $cs = Yii::app()->clientScript;
        $cs->registerCSSFile('/css/novelty.css');
        $this->layout = '//layouts/second';
        $this->pageTitle = 'АРТА :: Новинки';
        $page = Pages::model()->findByAttributes(array('label'=>'novelty'));
        
        $this->render('novelty', array('page'=>$page, 'pageLabel' => 'novelty', 'pageID' => 6 ));
    }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionGetPage()
	{   $pageLabel = $_POST['pageLabel'];
	    if ($pageLabel) {
            $content = Pages::model()->findByAttributes(array('label'=>$pageLabel));
        } else {
            $content['content'] = '';
        }
        die( $content['content'] );
	}
}