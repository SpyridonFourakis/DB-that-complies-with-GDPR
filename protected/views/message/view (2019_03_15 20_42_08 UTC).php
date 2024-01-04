<?php
/* @var $this MessageController */
/* @var $model Message */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->id,
);
?>

<h1>View Message #<?php echo $model->id; ?></h1>

<p><b>From: </b> <?php echo User::model()->findByPk($model->from_id)->username; ?></p>
<p><b>Subject: </b> <?php echo $model->subject; ?></p>
<br/>
<p><b>Body: </b></p>
<p><?php echo html_entity_decode($model->body); ?></p>
