<?php

/**
 * @copyright Copyright &copy; Jay Leno, 2015
 * @package yii2-codemirror
 * @version 1.2.0
 */

namespace kochiro\CodeMirror;
use Yii;
use yii\web\AssetBundle;

/**
 * CodeMirror bundle for \kochiro\CodeMirror
 *
 * @author Jay Leno <kochiro@gmail.com>
 * @since 1.0
 */
class CodeMirrorAsset extends AssetBundle
{
    // The JS includes must appear before the textarea so include them in the head
    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $sourcePath = '@bower-asset/CodeMirror';
    
    public function init()
    {
        parent::init();
        $this->js = array_merge(['lib/codemirror.js'], $this->js);
        $this->css = array_merge(['lib/codemirror.css'], $this->css);
/*
        $this->setSourcePath(__DIR__ . '/assets');
        
        $this->setupAssets('js', [
            'lib/codemirror',
            'addon/dialog/dialog',
            'addon/display/placeholder',
            'addon/edit/closebrackets',
            'addon/edit/closetag',
            'addon/edit/matchbrackets',
            'addon/edit/matchtags',
            'addon/edit/trailingspace',
            'addon/fold/xml-fold',
            'addon/hint/html-hint',
            'addon/hint/show-hint',
            'addon/hint/xml-hint',
            'addon/search/match-highlighter',
            'addon/search/search',
            'addon/search/searchcursor',
            'addon/selection/active-line',
            'keymap/extra',
            'mode/clike/clike',
            'mode/css/css',
            'mode/htmlmixed/htmlmixed',
            'mode/javascript/javascript',
            'mode/php/php',
            'mode/sql/sql',
            'mode/xml/xml'
        ]);
        
        $this->setupAssets('css', [
            'lib/codemirror',
            'addon/dialog/dialog',
            'addon/hint/show-hint',
            //'doc/docs',
            'theme/solarized' // see the theme directory for other options and set the desired option in the extension call
        ]);
        
        parent::init();
*/
    }
}