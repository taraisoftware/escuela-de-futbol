<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\tablenoticias */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tablenoticias-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true, 'placeholder' => 'Titulo']) ?>

    <?= '<label for="image">Imagen</label>'.FileInput::widget([
        'name' => 'image', 
        'options' => ['multiple' => false], 
        'pluginOptions' => ['previewFileType' => 'any']
    ]); ?>
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true, 'placeholder' => 'Descripcion']) ?>

    <?= $form->field($model, 'detalles')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
