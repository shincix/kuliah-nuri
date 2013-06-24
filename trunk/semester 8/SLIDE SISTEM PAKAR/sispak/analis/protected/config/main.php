<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Tugas Sistem pakar',
    'defaultController' => 'analysis/index',
    'timeZone' => 'Asia/Jakarta',
    // preloading 'log' component
    'preload' => array('log', 'bootstrap'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'gii',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl'=>'admin/login',
            'returnUrl'=>'admin/index',
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
            'responsiveCss' => FALSE,
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'appendParams' => true,
            'rules' => array(
            // '/store/<id:\d+>/<n:.*? >' => '/store/store_location',
            ),
        ),
//        'db' => array(
//            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
//        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=sispak',
            //'connectionString'=>'pgsql:host=localhost;port=5432;dbname=erp_apl',
            'emulatePrepare' => true,
            //'username' => 'postgres',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'class' => 'CDbConnection',
            //'tablePrefix' => 'tb_',
            'enableProfiling' => true,
            'enableParamLogging' => true,
            'schemaCachingDuration' => 180,
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
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require dirname(__FILE__) . '/params.php',
);