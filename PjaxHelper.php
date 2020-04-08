<?php

namespace denis909\yii;

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

class PjaxHelper
{

    public static function refreshPjax($id)
    {
        return Html::tag('script', '$("' . $selector . '").refresh();', ['type' => 'text/javascript']);
    }

    public static function begin(array $options = [])
    {
        $defaultOptions = [
            'enablePushState' => false,
            'enableReplaceState' => false,
            'timeout' => 0,
            'formSelector' => false,
            'linkSelector' => false
        ];

        $options = ArrayHelper::merge($defaultOptions, $options);

        Pjax::begin($options);
    }

    public static function end()
    {
        Pjax::end();
    }

}