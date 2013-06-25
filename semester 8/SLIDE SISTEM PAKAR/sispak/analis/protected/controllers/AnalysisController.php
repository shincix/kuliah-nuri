<?php

class AnalysisController extends Controller {

    public $layout = '//layouts/front/column1';

    public function actionIndex() {
        $model = new TbTrial;

// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['TbTrial'])) {
//            var_dump($_POST['TbTrial']);
            $model->attributes = $_POST['TbTrial'];
//            var_dump(date("Y-m-d",  strtotime("07-22-2013"))) or die();
//            var_dump($model->tanggal_lahir);
            $model->umur = $model->getAge();
            Yii::app()->session['trial'] = $model;
            $this->redirect(array('analysis'));
//            if ($model->save())
//                $this->redirect(array('view', 'id' => $model->id_trial));
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionAnalysis() {
        if (Yii::app()->session['trial'] == NULL) {
            $this->redirect(array('index'));
        }
        if (isset($_POST['answer'])) {
            if ($_POST['answer'] == 1) {
//                Yii::app()->session['result'] = TbQuestion::model()->findByPk($_POST['id_quetion']);
                Yii::app()->session['result'] = array(
                    'res' => Yii::app()->session['result']['res'] . '' . $_POST['id_quetion'] . ',',
                );
            }
            if (Yii::app()->session['resultinfo']['no'] == Yii::app()->session['resultinfo']['total']) {
                Yii::app()->session['trial']->save();
                $this->redirect('result',array(
                    'id'=>Yii::app()->session['trial']->id_trial
                ));
            }
//            var_dump(Yii::app()->session['resultinfo']) or die();
            Yii::app()->session['resultinfo'] = array(
                'no' => Yii::app()->session['resultinfo']['no'] + 1,
                'id_quetion' => Yii::app()->session['resultinfo']['id_quetion'] . '' . $_POST['id_quetion'] . ',',
            );
        }
//        var_dump(Yii::app()->session['trial']->umur);
        if (Yii::app()->session['resultinfo'] == NULL) {
            Yii::app()->session['resultinfo'] = array(
                'no' => 1,
                'total' => TbQuestion::model()->getTotalQuetion(),
                'id_quetion' => '',
            );
        }

        if (Yii::app()->session['result'] == NULL) {
            Yii::app()->session['result'] = array(
                'res' => '',
            );
        }

        $this->render('analysis');
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tb-trial-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionResult() {
        
    }

}