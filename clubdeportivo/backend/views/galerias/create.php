<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tablegalerias */

$this->title = 'Create Tablegalerias';
$this->params['breadcrumbs'][] = ['label' => 'Tablegalerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablegalerias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
