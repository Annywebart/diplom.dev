<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Web Application',
    // preloading 'log' component
    'preload' => array(
        'log',
        'bootstrap',
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.models.EnumerableModels.*',
        'application.components.*',
        'application.extensions.*',
        'application.helpers.*',
        'application.extensions.eoauth.*',
        'application.extensions.eoauth.lib.*',
        'application.extensions.lightopenid.*',
        'application.extensions.eauth.services.*',
    ),
    'modules' => array(
        'admin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1', '192.168.78.1'),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '/'=>'site/index',
                '/admin' => 'site/login',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=diplom',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'q1w2e3r4',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'bootstrap' => array(
            'class' => 'application.components.yiibooster.components.Bootstrap',
        ),
        'userLog' => array(
            'class' => 'application.components.UserLogComponent',
        ),
        'loid' => array(
            'class' => 'application.extensions.lightopenid.loid',
        ),
        'eauth' => array(
            'class' => 'application.extensions.eauth.EAuth',
            'popup' => true, // Use the popup window instead of redirecting.
            'services' => array(// You can change the providers and their classes.
                'google' => array(
                    'class' => 'GoogleOpenIDService',
                ),
//                'google' => array(
//                    'class' => 'GoogleOAuthService',
//                    'client_id' => '06dbd1dffc4e40a2b2ec9b3110807b5c',
//                    'client_secret' => '401e8d05d9d04b5db0f2c35287cea337',
//                    'title' => 'Google',
//                ),
                'yandex' => array(
                    'class' => 'YandexOpenIDService',
                ),
//                'yandex' => array(
//                    'class' => 'YandexOAuthService',
//                    'client_id' => '06dbd1dffc4e40a2b2ec9b3110807b5c',
//                    'client_secret' => '401e8d05d9d04b5db0f2c35287cea337',
//                    'title' => 'Yandex',
//                ),
                'twitter' => array(
                    'class' => 'TwitterOAuthService',
                    'key' => 'karHs6jcyBEU0zAM5hBqEA',
                    'secret' => 'OeCIVMBCSf0HA63ZJ9vDY4s3mCg22iM28baG3uiM',
                ),
                'facebook' => array(
                    'class' => 'FacebookOAuthService',
                    'client_id' => '222911084543615',
                    'client_secret' => 'bf07cace383bc7b7a6664cdc70b41bd3',
                ),
                'vkontakte' => array(
                    'class' => 'VKontakteOAuthService',
                    'client_id' => '3935335',
                    'client_secret' => 'M2Hqe6j26SJXRXYaodLP',
                ),
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'styleSite' => 'http://diplom.dev/themes/site/',
    ),
);
