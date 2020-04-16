<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/second.css" />

    <!--<script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/index.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<!--<div id="header">
		<div id="logo"></div>
	</div> header -->

	<div id="mainmenu">
		<?if ( 'index' == Yii::app()->controller->getAction()->getId() ):?>
            <?$this->widget('maxMenu', array('pageID'=>'', 'pageLabel'=> @$_GET['page']))?>
        <?else:?>
            <?$this->widget('maxMenu', array('pageID'=>'', 'pageLabel'=>Yii::app()->controller->getAction()->getId() ))?>
        <?endif;?>
    </div><!-- mainmenu -->

	<div id="content">
        <?php echo $content; ?>
    </div>

	<div class="clear"></div>



</div><!-- page -->
<div id="footer"></div><!-- footer -->
</body>
</html>