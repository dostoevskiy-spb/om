<?php
return [
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap'  => ['pages'],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules'    => [
        'pages'            => 'bupy7\pages\Module',
        'pathToImages'     => '@webroot/images',
        'urlToImages'      => '@web/images',
        'pathToFiles'      => '@webroot/files',
        'urlToFiles'       => '@web/files',
        'uploadImage'      => true,
        'uploadFile'       => true,
        'addImage'         => true,
        'addFile'          => true,
        'imperaviLanguage' => 'ru',
    ]
];
