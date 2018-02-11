<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tablenoticias */

$this->title = 'Crear noticia';
$this->params['breadcrumbs'][] = ['label' => 'noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablenoticias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
