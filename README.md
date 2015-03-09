CodeMirror

CodeMirror extension for Yii2
Installation

The preferred way to install this extension is through composer.

Either run

php composer.phar require --prefer-dist kochiro/yii2-codemirror "*"

or add

"kochiro/yii2-codemirror": "*"

to the require section of your composer.json file.
Usage

Once the extension is installed, simply use it in your code by :

<?php 

use kochiro\CodeMirror\CodeMirror;

<?= $form->field($file, 'description')->widget(CodeMirror::className(), [
    'pluginOptions' => [
        'mode' => 'application/x-httpd-php', 
        'theme' => 'solarized dark',
        ...
    ]
]);

?>

By default, only core javascript and css files are registered:

    lib/codemirror.js
    lib/codemirror.css

If it is necessary to add other resource files, then use the Dependency Injection concept.

Example:

I want to use php mode in the codemirror editor

  //config/web.php

  Yii::$container->set('kochiro\codemirror\CodeMirrorAsset',[
      'js' => [
          'mode/htmlmixed/htmlmixed.js',
          'mode/xml/xml.js',
          'mode/javascript/javascript.js',
          'mode/clike/clike.js',
          'mode/php/php.js',
      ]
  ]);

  return $config;
