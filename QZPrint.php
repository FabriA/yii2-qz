<?php

namespace fabria\qz;

/**
 * This is just an example.
 */
class QZPrint extends \yii\base\Widget
{
    public function run()
    {
        $html = '';
        $html .= '<button class="btn btn-primary">Hello</button>';
        return $html;
    }
}
