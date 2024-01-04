<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);

$this->menu=array(
    array('label'=>'Update', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin'), 'visible'=>$model->isAdmin()),
	array('label'=>'Request Deletion', 'url'=>array('message/requestDeletionMessage'), 'visible'=>!$model->isAdmin()),
);
?>

<h1><?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'password',
		'name',
		'surname',
		'mobile',
		'bank_account',
	),
)); ?>
