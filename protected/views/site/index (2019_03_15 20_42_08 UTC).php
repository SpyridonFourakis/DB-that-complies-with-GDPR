<?php
/* @var $this SiteController */

//phpinfo();

$this->pageTitle=Yii::app()->name;

if (Yii::app()->user->isGuest){
    $this->redirect(array('site/login'));
} else {
    $this->redirect(array('user/view', 'id'=>Yii::app()->user->id));
}
?>
