<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tablegalerias */

$this->title = 'Update Tablegalerias: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tablegalerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tablegalerias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
