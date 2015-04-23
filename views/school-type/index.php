<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SchoolTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_type_id',
            'school_type_name',
            'date_created',
            'date_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
