<?php
/* @var $this FmUserPhotosController */
/* @var $model FmUserPhotos */

$this->breadcrumbs = array(
    'Fm User Photoses' => array('index'),
    $model->USER_PHOTO_ID,
);

$this->menu = array(
    array('label' => 'List FmUserPhotos', 'url' => array('index')),
    array('label' => 'Create FmUserPhotos', 'url' => array('create')),
    array('label' => 'Update FmUserPhotos', 'url' => array('update', 'id' => $model->USER_PHOTO_ID)),
    array('label' => 'Delete FmUserPhotos', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->USER_PHOTO_ID), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage FmUserPhotos', 'url' => array('admin')),
);
?>
<div class="row">
    <?php echo CHtml::image("/fmphoto/$model->USER_ID" . "/" . $model->IMAGE_NAME, "", array("width" => 800)); ?>  
</div>
<?php
?>