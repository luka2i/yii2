<?php
/**
 * Created by PhpStorm.
 * User: luka2i
 * Date: 10/30/14
 * Time: 7:28 PM
 */

namespace app\components;

use Yii;
use yii\web\UrlManager;

class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        $lang = substr(Yii::$app->language, 0, 2);

        if (isset($params['lang_id'])) {
            //Если указан идентификатор языка, то делаем попытку найти язык в БД,
            //иначе работаем с языком по умолчанию

            if (isset(Yii::$app->params['languages'][$params['lang_id']])) {
                $lang = $params['lang_id'];
            }

            unset($params['lang_id']);
        }

        //Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        //Добавляем к URL префикс - буквенный идентификатор языка
        if ($url == '/') {
            return '/' . $lang;
        } else {
            return '/' . $lang . $url;
        }
    }
}