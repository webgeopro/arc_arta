<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'АРТА :: Красноярск',
     'language'=>'ru',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.cms.CmsModule',
	),

	'modules'=>array(
		'cms', // Используется легковесная cms
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'artaGii',
			//'ipFilters'=>array('127.0.0.1','::1'),
            //'ipFilters'=>array($_SERVER['REMOTE_ADDR']),
            'ipFilters'=>false,
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
                'gii'=>'gii',
                'gii/<controller:\w+>'=>'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
                //'about' => 'site/index',
                'brands' => 'brands/index',
                '<action:(login|logout|news|novelty|events)>' => 'site/<action>',
                '<page:\w+>' => 'site/index',
                
				//'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                //'page/<name>-<id:\d+>.html'=>'cms/node/page', // clean URLs for pages {CMS}
			),
		),
        'cms'=>array(
            'class'             => 'cms.components.Cms',
            'users'             => array('admin'),                    // the names of the web users with access to the cms
            'languages'         => array('en_us'=>'English'),         // the langauges enabled for the cms
            'defaultLanguage'   => 'en_us',                           // the default language
            'allowedFileTypes'  => 'jpg, gif, png',                   // the types of files that can uploaded as attachments
            'allowedFileSize'   => 1024,                              // the maximum allowed filesize for attachments
            'attachmentPath'    => '/uploads/cms/', // '/files/cms/attachments/', // the path to save the attachments
            'headingTemplate'   => '<h1 class="heading">{heading}</h1>',          // the template to use for node headings
            'widgetHeadingTemplate' => '<h3 class="heading">{heading}</h3>',      // the template to use for widget headings
            'pageTitleTemplate' => '{title} | {appName}',             // the template to use for page titles
            'appLayout'         => 'application.views.layouts.main',  // the application layout to use with the cms
            'flashError'        => 'error',                           // the name of the error flash message categories
            'flashInfo'         => 'info',
            'flashSuccess'      => 'success',
            'flashWarning'      => 'warning',
        ),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=arta',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'loSk',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);