<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

   <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'jekel')->radioList(['L' =>'Laki-laki',
    'P' =>'Perempuan' ],[
        'item' => function($index,$label,$name,$checked,$value){
            return '<label><input type="radio" class="flat" name="'.$name.'" value="'.$value.'" '.
            ($checked ? "checked" : "").'> '.$label.'</label>';
        }
    ]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Enter birth date ...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
]); ?>
    <?= $form->field($model,'id_jurusan')->dropDownList(ArrayHelper::map(\app\models\Jurusan::find()->all(),'id','jurusan'),['prompt' => 'Pilih'])->label('Jurusan'); ?>
     <?= $form->field($model,'id_prodi')->dropDownList(ArrayHelper::map(\app\models\Prodi::find()->all(),'id_prodi','prodi'),['prompt' => 'Pilih'])->label('Prodi'); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>