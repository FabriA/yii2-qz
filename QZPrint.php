<?php

namespace fabria\qz;

use fabria\qz\QZPrintAsset;
/**
 * This is just an example.
 */
class QZPrint extends \yii\base\Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
//        $view = $this->getView();
//        $js = 'alert(\'pippo\');';
//        $view->registerJs($js, $view::POS_END);

        return parent::init();
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function run()
    {
        $this->registerAssets();

        $html = $this->render('widget.php');

        return $html;
    }


    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();

        QZPrintAsset::register($view);

//		$js = '$("#' . $this->options['id'] . '").weatherWidget(' . $this->getPluginOptions() . ');';
//		$view->registerJs($js, $view::POS_END);
    }
}
