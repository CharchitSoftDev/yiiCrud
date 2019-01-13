<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enrollment */

$this->title = 'Update Enrollment: ' . $model->enid;
$this->params['breadcrumbs'][] = ['label' => 'Enrollments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->enid, 'url' => ['view', 'id' => $model->enid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enrollment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
