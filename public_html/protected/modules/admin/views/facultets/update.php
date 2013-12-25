<div class="row-fluid">
    <div class="span12 tac">
        <?php
        /* @var $this FacultetsController */
        /* @var $model FacultetsModel */

        $this->breadcrumbs = array(
            'Facultets Models' => array('index'),
            $model->title => array('view', 'id' => $model->id),
            'Update',
        );

        $this->menu = array(
            array('label' => 'List FacultetsModel', 'url' => array('index')),
            array('label' => 'Create FacultetsModel', 'url' => array('create')),
            array('label' => 'View FacultetsModel', 'url' => array('view', 'id' => $model->id)),
            array('label' => 'Manage FacultetsModel', 'url' => array('admin')),
        );
        ?>

        <h1>Update FacultetsModel <?php echo $model->id; ?></h1>

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