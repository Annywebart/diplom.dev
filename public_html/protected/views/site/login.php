<div class="login_wrapper">
    <div class="login_panel">
        <div class="login_head">
            <div id="logo">
                <a href="<?php echo Yii::app()->createAbsoluteUrl(Yii::app()->request->baseUrl); ?>">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-150.png"/>
                </a>
            </div>
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control input-lg')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'error')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'password'); ?>
            <a href="#" class="pull-right">Забыли пароль?</a>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control input-lg')); ?>
            <?php echo $form->error($model, 'password'); ?>

            <label class="checkbox">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                Запомнить пароль
            </label>
            <?php echo $form->error($model, 'rememberMe'); ?>

        </div>
        <div class="login_submit">
            <?php echo CHtml::submitButton('Войти', array('class' => 'btn btn-primary btn-block btn-lg')); ?>
        </div>
        <a href="#">Зарегистроваться</a>
        <?php $this->endWidget(); ?>
    </div>

    <h2></h2>
    <?php Yii::app()->eauth->renderWidget(); ?>

</div>






