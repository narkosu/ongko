<?php
/* @var $this ProgrespenelitianController */
/* @var $model ProgresPenelitian */

$this->breadcrumbs=array(
	'Progres Penelitians'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProgresPenelitian', 'url'=>array('index')),
	array('label'=>'Create ProgresPenelitian', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('progres-penelitian-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Progres Penelitians</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'progres-penelitian-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'proposal_id',
		'periode',
		'pagu',
		'tanggal_pangajuan_etik',
		'file_ijin_etik',
		/*
		'narasi',
		'realisasi_anggaran',
		'masalah',
		'tindak_lanjut',
		'created_by',
		'created_at',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
