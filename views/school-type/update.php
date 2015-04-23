<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SchoolType */

$this->title = 'Update School Type: ' . ' ' . $model->school_type_id;
$this->params['breadcrumbs'][] = ['label' => 'School Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_type_id, 'url' => ['view', 'id' => $model->school_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
