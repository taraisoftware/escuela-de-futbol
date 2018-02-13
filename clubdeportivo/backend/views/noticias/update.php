<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tablenoticias */

$this->title = 'Actualizar noticia: ' . ' ' . $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titulo, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="tablenoticias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
