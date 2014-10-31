<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <h2><?php
        $username = 'Alexander';
        echo \Yii::t('app', 'Hello, {username}!', ['username' => $username]);
        ?></h2>

    <code><?= __FILE__ ?></code>
</div>
