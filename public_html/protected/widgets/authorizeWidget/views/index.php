<?php
//var_dump($user);
?>

<a href="#" class="dropdown-toggle user" data-toggle="dropdown">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar-mini.png" alt="" class="user_avatar"/>
    <?php echo Yii::app()->user->name; ?>
    <b class="caret"></b>
</a>
<ul class="dropdown-menu">
    <li><a href="user_profile.html">Профиль</a></li>
    <li class="divider"></li>
    <li><?php echo CHtml::link('Выйти', Yii::app()->createAbsoluteUrl('site/logout')); ?></li>
</ul>

<!--<div class="authorize">
    <?php // if (isset($user['id'])): ?> 

        <?php // if (isset($user['photo'])): ?>
            <img src="<?php // echo $user['photo']; ?>" alt="" width="40px" height="40px">
        <?php // endif; ?>
        <span class="name">
            <?php // echo $user['name']; ?>
            <?php // if (isset($user['lastname'])): ?>
                <?php // echo $user['lastname']; ?>
            <?php // endif; ?>
        </span>
        <?php // echo CHtml::link(Yii::t('authorize', 'logout'), Yii::app()->createAbsoluteUrl('site/logout')); ?>   
        <?php // if (isset($user['serviceName'])): ?>     
            <br /><span class="logged"><?php echo Yii::t('authorize', 'youAreLoggedBy'); ?><?php echo $user['serviceName']; ?></span>
        <?php // endif; ?>
    <?php // else: ?>
        <?php // echo CHtml::link(Yii::t('authorize', 'login'), Yii::app()->createAbsoluteUrl('site/login')); ?>
    <?php // endif; ?>         
</div> -->
