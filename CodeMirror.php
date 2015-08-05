<?php
/**
 * @copyright Copyright &copy; Jay Leno, Aurenav.com, 2015
 * @package yii2-codemirror
 * @version 1.1.0
 */
 
namespace kochiro\CodeMirror;

use Yii;
use yii\helpers\Html;
use yii\web\View;

/**
 * Implements a CodeMirror editor box
 */
class CodeMirror extends \kartik\base\InputWidget
{
    public $script;
    
    public $name;
    public $id;
    public $value;
    public $mode;
    public $htmlOptions;

    public function init()
    {
        parent::init();

        $this->renderInput();
        $this->registerAssets();
    }
    
    /**
     * Renders the input
     */
    protected function renderInput()
    {
        // Add textarea to the page
		echo Html::textArea( $this->name, $this->value, $this->htmlOptions );

        // This block of script will change the textarea from above into a CodeMirror instance
        $script = "<script>
            var editor = CodeMirror.fromTextArea(document.getElementById('description_".$this->id."'), {
                lineNumbers: true,
                styleActiveLine: true,
                matchBrackets: true,
                lineWrapping: true
            });
            editor.setOption('theme', '".$this->htmlOptions['theme']."');
        </script>";
        
        echo $script;
    }

    /**
     * Registers assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        CodeMirrorAsset::register($view);
    }
}