<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\tablenoticias */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tablenoticias-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'noticia'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'estas seguro?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'titulo',
       
        'imagen',
        'descripcion',
        'detalles:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
