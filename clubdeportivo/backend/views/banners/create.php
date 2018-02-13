<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tablebanners */

$this->title = 'Agregar banner';
$this->params['breadcrumbs'][] = ['label' => 'banner', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablebanners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
