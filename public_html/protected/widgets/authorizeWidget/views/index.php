<?php
/**
 * @author Drozdenko Anna <drozdenko@zfort.com>
 * @link http://www.zfort.com/
 * @copyright Copyright &copy; 2000-2013 Zfort Group
 * @license http://www.zfort.com/terms-of-use
 */
//var_dump($user);
?>
<div class="authorize">
    <?php if (isset($user['id'])): ?> 
    
        <?php if (isset($user['photo'])): ?>
            <img src="<?php echo $user['photo']; ?>" alt="" width="40px" height="40px">
        <?php endif; ?>
        <span class="name">
            <?php echo $user['name']; ?>
            <?php if (isset($user['lastname'])): ?>
                <?php echo $user['lastname']; ?>
            <?php endif; ?>
        </span>
        <?php echo CHtml::link(Yii::t('authorize', 'logout'), Yii::app()->createAbsoluteUrl('site/logout')); ?>   
        <?php if (isset($user['serviceName'])): ?>     
            <br /><span class="logged"><?php echo Yii::t('authorize', 'youAreLoggedBy');?><?php echo $user['serviceName']; ?></span>
        <?php endif; ?>
    <?php else: ?>
        <?php echo CHtml::link(Yii::t('authorize', 'login'), Yii::app()->createAbsoluteUrl('site/login')); ?>
    <?php endif;?>         
</div> 
