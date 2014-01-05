<?php
/* @var $this StudentsController */
/* @var $model StudentsModel */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'students-model-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Поля со звездочкой <span class="required">*</span> обязательны для заполнения</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'idGroup'); ?>
        <?php echo $form->dropdownList($model, 'idGroup', GroupsModel::getGroupsList(), array('empty' => '')); ?>
        <?php echo $form->error($model, 'idGroup'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'firstName'); ?>
        <?php echo $form->textField($model, 'firstName', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'firstName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lastName'); ?>
        <?php echo $form->textField($model, 'lastName', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'lastName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender', GenderModel::listData(), array('empty' => '')) ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'dob'); ?>
        <?php
        $this->widget(
            'bootstrap.widgets.TbDatePicker', array(
                'name' => 'dob',
                 'options' => array(
                     'language' => 'ru'
                 )
            )
        );
        ?>
        <?php echo $form->error($model, 'dob'); ?>
    </div>

    <div class="row">
        <?php // echo $form->labelEx($model, 'isFree'); ?>
        <?php // echo $form->dropDownList($model, 'isFree', StudentsModel::$isFree, array('empty' => '')) ?>
        <?php echo $form->radioButtonList($model, 'isFree', StudentsModel::$isFree); ?>
        <?php echo $form->error($model, 'isFree'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn btn-info')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->