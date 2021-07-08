<<<<<<< HEAD
<?php  
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Prodi</h1>
<table class="table table-hover">
	<tr>
		<td>id</td>
		<td>Prodi</td>
		<td>Keterangan</td>
	</tr>
	<?php foreach ($data_prodi as $prodi):?>
		<tr>
			<td><?= Html::encode($prodi->id) ?></td>
			<td><?= Html::encode($prodi->prodi) ?></td>
			<td><?= Html::encode($prodi->keterangan) ?></td>
		</tr>
	<?php endforeach ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
=======
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\prodiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_jurusan',
            'prodi',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
>>>>>>> 72f541c (gii_Mesi)
