<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
	'name' => 'Hotel Daily Inn',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'tTChuQoxXKnxgBWa5xzDVUge3GOOxzr8',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'mail.dailyinn.id',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => 'portal@dailyinn.id',
                'password' => 'agPvdN9tLC',
                'port' => '587', // Port 25 is a very common port too
                'encryption' => 'tls',
                'streamOptions' => [
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ],
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>'
            ],
        ],
		'formatter' => [
			'dateFormat' => 'dd.MM.yyyy',
			'decimalSeparator' => '.',
			'thousandSeparator' => ',',
			'currencyCode' => 'Rp ',
		],
		'authManager'=>[
			'class' => 'yii\rbac\DbManager'
		],
		'view' => [
			'theme' => [
				'basePath' => '@app/themes/mega',
				'baseUrl' => '@web/themes/mega',
				'pathMap' => [
					'@app/views' => '@app/themes/mega/views',
				],
			],
		],
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'basePath' => '@webroot',
					'baseUrl' => '@web/themes/mega',
					'js' => []
				],
			],
		],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1','192.168.10.1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['192.168.10.1', '::1'],
    ];
}

return $config;
