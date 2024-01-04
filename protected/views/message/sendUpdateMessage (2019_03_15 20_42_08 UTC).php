<?php
/* @var $this MessageController */

if ($model->isNewRecord){ ?>
<h1>Update Email</h1>
<p>Please send an email to the updated user informing him of the processing made on his personal profile, as stated by article 15
    of GDBR "Right of access by the data subject".</p>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'message-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <label>Purpose of the processing: </label>
        <?php echo $form->textArea($model, 'purpose', array('maxlength' => 5000, 'rows' => 6, 'cols' => 60)); ?>
        <?php echo $form->error($model,'purpose'); ?>
    </div>

    <div class="row">
        <label>Recipients or categories of recipient to whom the personal data have been or will be disclosed<br/>
           (recipients in third countries or international organisations) : </label>
        <?php echo $form->textArea($model, 'recipients', array('maxlength' => 5000, 'rows' => 6, 'cols' => 60)); ?>
        <?php echo $form->error($model,'recipients'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<?php } else { ?>
    <h2>Message sent!</h2>
    <p><b>From: </b> Admin</p>
    <p><b>To: </b> User #<?php echo $model->to_id; ?></p>
    <p><b>Subject: </b> <?php echo $model->subject; ?></p>
    <br/>
    <p><?php echo $model->body; ?></p>

<?php } ?>
