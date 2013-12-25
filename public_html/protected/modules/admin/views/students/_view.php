<?php
/* @var $this StudentsController */
/* @var $data StudentsModel */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('idGroup')); ?>:</b>
    <?php echo CHtml::encode($data->idGroup); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
    <?php echo CHtml::encode($data->firstName); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
    <?php echo CHtml::encode($data->lastName); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
    <?php echo CHtml::encode($data->gender); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
    <?php echo CHtml::encode($data->dob); ?>
    <br />


</div>