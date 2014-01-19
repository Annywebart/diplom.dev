<?php // var_dump($user); die; ?>
<?php if (isset($user['id'])): ?> 
    <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
        <?php if (isset($user['photo'])): ?>
            <img src="<?php echo $user['photo']; ?>" alt="" class="user_avatar">
        <?php else: ?>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar-mini.png" alt="" class="user_avatar"/>
        <?php endif; ?>
        <?php echo $user['name']; ?>
        <?php if (isset($user['lastname'])): ?>
            <?php echo $user['lastname']; ?>
        <?php endif; ?>
        <b class="caret"></b>
        <?php if (isset($user['serviceName'])): ?>     
            <br /><span class="logged"><?php echo Yii::t('authorize', 'youAreLoggedBy'); ?><?php echo $user['serviceName']; ?></span>
        <?php endif; ?>
    </a>
    <ul class="dropdown-menu">
        <li><a href="user_profile.html">Профиль</a></li>
        <li class="divider"></li>
        <li><?php echo CHtml::link('Выйти', Yii::app()->createAbsoluteUrl('site/logout')); ?></li>
    </ul>
<?php else: ?>
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
<?php endif; ?>         

