<?php

/**
 * This is the model class for table "tb_question".
 *
 * The followings are the available columns in table 'tb_question':
 * @property integer $id_quetion
 * @property string $problem_question
 * @property string $problem_solving
 */
class TbQuestion extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return TbQuestion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tb_question';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('problem_question, problem_solving,for_age', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_quetion, problem_question, problem_solving', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_quetion' => 'Id Quetion',
            'problem_question' => 'Problem Question',
            'problem_solving' => 'Problem Solving',
            'for_age' => 'For Age',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_quetion', $this->id_quetion);
        $criteria->compare('problem_question', $this->problem_question, true);
        $criteria->compare('for_age', $this->for_age, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getQuetion() {
//        var_dump($this->getCondition());
        return $this->find(array(
                    'condition' => $this->getCondition(),
                    'order' => 'RAND()',
                    'params' => array(':for_age' => Yii::app()->session['trial']->umur),
        ));
    }

    public function getTotalQuetion() {
//        var_dump($this->getCondition());
        return count($this->findAll(array(
                    'condition' => 'for_age = :for_age',
                    'params' => array(':for_age' => Yii::app()->session['trial']->umur),
        )));
    }

    public function getCondition() {
        if (Yii::app()->session['resultinfo'] != NULL) {
            $id = substr(Yii::app()->session['resultinfo']['id_quetion'], 0, -1);
            if ($id != '') {
                return 'id_quetion NOT IN (' . $id . ')'.'for_age = :for_age';
            } else {
                return 'for_age = :for_age';
            }
        } else {
            return 'for_age = :for_age';
        }
    }

}