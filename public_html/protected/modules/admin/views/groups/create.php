<div class="row-fluid">
    <div class="span12 tac">
        <?php
        /* @var $this GroupsController */
        /* @var $model GroupsModel */

        $this->breadcrumbs = array(
            'Groups Models' => array('index'),
            'Create',
        );

        $this->menu = array(
            array('label' => 'List GroupsModel', 'url' => array('index')),
            array('label' => 'Manage GroupsModel', 'url' => array('admin')),
        );
        ?>

        <h1>Create GroupsModel</h1>

        <?php $this->renderPartial('_form', array('model' => $model)); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span5">

        <div id="fl_2" style="height:200px;width:80%;margin:50px auto 0"></div>
    </div>
    <div class="span7">
        <div class="heading clearfix">

        </div>
        <div id="fl_1" style="height:270px;width:100%;margin:15px auto 0"></div>
    </div>
</div>
