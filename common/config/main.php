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
        'pages' =>
            [
                'class'            => 'bupy7\pages\Module',
                'viewPath'         => '@frontend/views/pages',
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
    ]
];
