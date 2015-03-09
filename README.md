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

<<<<<<< HEAD
=======
```php
>>>>>>> origin/master

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
<<<<<<< HEAD

By default, only core javascript and css files are registered:

    lib/codemirror.js
    lib/codemirror.css

If it is necessary adds other resource files, then should be used the Dependency Injection concept.

Example:

I want to use php mode in the codemirror editor


  //config/web.php

=======
```

By default, only core javascript and css files are registered:

- ```lib/codemirror.js```
- ```lib/codemirror.css```

If it is necessary adds other resource files, then should be used the 
[Dependency Injection](https://github.com/yiisoft/yii2/blob/master/docs/guide/concept-di-container.md) concept.

Example:

I want to use ```php``` mode in the codemirror editor 

```php
  
  //config/web.php
  
>>>>>>> origin/master
  $config = [
      'id' => 'my-app',
      'components' => [
        ...
      ]
      ...
  ]
<<<<<<< HEAD

=======
  
>>>>>>> origin/master
  Yii::$container->set('kochiro\codemirror\CodeMirrorAsset',[
      'js' => [
          'mode/htmlmixed/htmlmixed.js',
          'mode/xml/xml.js',
          'mode/javascript/javascript.js',
          'mode/clike/clike.js',
          'mode/php/php.js',
      ]
  ]);
<<<<<<< HEAD


  return $config;
=======
  
  
  return $config;
  
```
>>>>>>> origin/master
