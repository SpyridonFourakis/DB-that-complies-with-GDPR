<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
    if ($model->isNewRecord) {

        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'user-register-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // See class documentation of CActiveForm for details on this,
            // you need to use the performAjaxValidation()-method described there.
            'enableAjaxValidation' => false,
        )); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

        <div class="row">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'verifyPassword'); ?>
            <?php echo $form->passwordField($model, 'verifyPassword'); ?>
            <?php echo $form->error($model, 'verifyPassword'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name'); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'surname'); ?>
            <?php echo $form->textField($model, 'surname'); ?>
            <?php echo $form->error($model, 'surname'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'mobile'); ?>
            <?php echo $form->textField($model, 'mobile'); ?>
            <?php echo $form->error($model, 'mobile'); ?>
        </div>

        <div class="row">
            <?php echo $form->labelEx($model, 'bank_account'); ?>
            <?php echo $form->textField($model, 'bank_account'); ?>
            <?php echo $form->error($model, 'bank_account'); ?>
        </div>


        <div class="row buttons">
            <?php echo CHtml::submitButton('Submit'); ?>
        </div>

        <?php $this->endWidget(); // form
    } else { ?>
        <h2>User succesfully registered!</h2>
    <?php }?>

</div>