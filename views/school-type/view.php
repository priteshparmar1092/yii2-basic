<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolType */

$this->title = $model->school_type_id;
$this->params['breadcrumbs'][] = ['label' => 'School Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_type_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'school_type_id',
            'school_type_name',
            'date_created',
            'date_modified',
        ],
    ]) ?>

</div>
