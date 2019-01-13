<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnrollmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enrollments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrollment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Enrollment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dt',
            'st_id',
            'cr_id',
            'enid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
